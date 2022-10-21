<?php

use App\Router;

spl_autoload_register(function($class){
    $class = substr($class, strlen('App\\'));
    require_once "src/$class.php";
});

Router::addRoute();

die;

switch($_SERVER['REQUEST_URI']){
    case '/':
        include 'views/index.php';
        break;
    case '/page1':
        include 'views/page1.php';
        break;
    case '/page2':
        include 'views/page2.php';
        break;
    default:
        echo '404';
        break;
}