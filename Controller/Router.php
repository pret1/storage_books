<?php
declare(strict_types=1);

namespace App;

use App\{Main, More, NoRoute, Listing, RouteInterface};

/**
 * Class Router
 *
 * Determine current action and executes it.
 */
class Router
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Main';

        $controllerClass = sprintf("\App\%s", ucfirst($actionName));
        if (class_exists($controllerClass)) {
            /** @var RouteInterface $controller */
            $controller = new $controllerClass();
        } else {
            $controller = new NoRoute();
        }

        $controller->action();
    }
}
