<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\{ControllerInterface, Robot};
use App\Routing\RouterInterface;

class Robots implements RouterInterface
{

    /**
     * @return ControllerInterface|false
     */
    public function match() // returns controller who contains robots.txt
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Main';
        if ($actionName == 'robots.txt') {
            return new Robot();
        }
        return false;
    }
}
