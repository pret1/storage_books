<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\{ControllerInterface};
use App\Model\Robot;
use App\Routing\RouterInterface;

class Robots implements RouterInterface
{

    /**
     * @inheritDoc
     *
     * @return ControllerInterface|false
     */
    public function match()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Main';
        if ($actionName == 'robots.txt') {
            return new Robot();
        }
        return false;
    }
}
