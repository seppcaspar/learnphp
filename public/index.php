<?php

use App\Controllers\ArticleController;
use App\Router;

spl_autoload_register(function($class){
    $class = substr($class, strlen('App\\'));
    require_once "src/$class.php";
});
require 'helpers.php';
require 'routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if($match){
    if(is_callable($match['action'])){
        call_user_func($match['action']);
    }
    if(is_array($match['action'])){
        $class = $match['action'][0];
        $method = $match['action'][1];
        $controller = new $class();
        $controller->$method();
    }
} else {
    http_response_code(404);
    echo '404';
}