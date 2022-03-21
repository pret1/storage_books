<?php

declare(strict_types=1);

use App\Controller\ControllerInterface;

class Start implements RouterInterface
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
            $controller = new $controllerClass();
        } else {
            return false;
        }

        $controller->execute();
    }
}