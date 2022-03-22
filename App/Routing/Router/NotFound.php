<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\{ControllerInterface, NoRoute};
use App\Routing\RouterInterface;

class NotFound implements RouterInterface
{

    /**
     * @return ControllerInterface|false
     */
    public function match()
    {

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Main';

        $controllerClass = sprintf("\App\Controller\%s", ucfirst($actionName));
        if (class_exists($controllerClass)) {
            /** @var ControllerInterface $controller */
            return false;
        } else {
            return new NoRoute();
        }
    }
}
