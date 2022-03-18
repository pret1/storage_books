<?php
declare(strict_types=1);

namespace App;

use App\{Main, More, NoRoute, Listing};

class Router
{
    public static function run(): void
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Main';

        $controllerClass = sprintf("\App\%s", ucfirst($actionName));
        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
        } else {
            $controller = new NoRoute();
        }
    }
}
