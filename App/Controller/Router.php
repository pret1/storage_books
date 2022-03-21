<?php
declare(strict_types=1);

namespace App\Controller;

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
    public function run(): void
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Main';

        $controllerClass = sprintf("\App\Controller\%s", ucfirst($actionName));
        if (class_exists($controllerClass)) {
            /** @var RouteInterface $controller */
            $controller = new $controllerClass();
        } else {
            return;
        }

        $controller->action();
    }
}
