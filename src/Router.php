<?php

namespace App;

class Router {
    public static $routes = [];

    public static function addRoute($path, $action){
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
}