<?php
    // FRONT CONTROLLER

    ini_set('display_errors',1); //вкл ошибки
    error_reporting(E_ALL);

    session_start();


    define('ROOT',dirname(__FILE__)); //ROOT = /var/www/test
    require_once(ROOT.'/components/Autoload.php');

    $router = new Router();
    $router->run();