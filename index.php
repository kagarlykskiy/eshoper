<?php
    // FRONT CONTROLLER

    // 1.Общие настройки
    ini_set('display_errors',1); //вкл ошибки
    error_reporting(E_ALL);

    // 2. Подключение файлов системы
    define('ROOT',dirname(__FILE__)); //ROOT = /var/www/test
    require_once(ROOT.'/components/Router.php');
    require_once(ROOT.'/components/Db.php');

    // 3. Подключение к БД


    // 4. Вызов Router
    $router = new Router();
    $router->run();