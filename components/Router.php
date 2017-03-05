<?php

    class Router
    {
        private $routes;

        public function __construct()
        {
            $routerPath = ROOT.'/config/routes.php';
            $this->routes = include($routerPath);
        }

        private function getURI()
        {
            //получаем строку запроса
            if (!empty($_SERVER['REQUEST_URI'])) {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }

        public function run()
        {
            //получаем строку запроса
            $uri = $this->getURI(); // $uri = news/sport/12

            //проверяем наличие такого запроса в routes.php
            foreach ($this->routes as $uriPattern => $path) {
                if(preg_match("~$uriPattern~", $uri)) {

                    //определяем внутнрений путь например /news/view/sport/124
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                    //определяем контролер, action и параментры
                    $segments = explode('/', $internalRoute); //разделяем путь на части для опреденения контролера и метода

                    $controllerName = array_shift($segments).'Controller';
                    $controllerName = ucfirst($controllerName); //финальное имя контролера

                    $actionName = "action".ucfirst(array_shift($segments)); //финальное имя action (method)

                    $parameters = $segments; //в массиве segments остались только параметры (имя контролера и метода удалены)

                    //подключаем файл класс-контролера
                    $controllerFile = ROOT."/controllers/".$controllerName.".php";
                    if (file_exists($controllerFile)) {
                        include_once($controllerFile);
                    }

                    //Создать объект, вызвать нужный метод (т.е action)
                    $controllerObject = new $controllerName;
                    //call_user_func_array Вызываем метод $controllerObject->$actionName() с массивом аргументов

                    if (!method_exists($controllerName, $actionName)) {
                        include_once(ROOT.'/views/site/404.html');

                        die();
                    }

                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                    if($result != null) {
                        break;
                    }

                }
            }

        }
    }

