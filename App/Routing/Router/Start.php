<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\ControllerInterface;
use App\Routing\RouterInterface;

class Start implements RouterInterface
{

    /**
     * @return ControllerInterface|false
     */
    public function match()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $editRoutes = stristr($routes[1], '?', true);
        if(!$editRoutes){
            $actionName = $routes[1] ?: 'Main';
        } else {
            $actionName = $editRoutes ?: 'Main';
        }
        $controllerClass = sprintf("\App\Controller\%s", ucfirst($actionName));
        if (class_exists($controllerClass)) {
            /** @var ControllerInterface $controller */
            return new $controllerClass();
        }
        return false;
    }
}
