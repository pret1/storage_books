<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\ControllerInterface;
use App\Routing\RouterInterface;
use App\System\HttpRequestInterface;

class Start implements RouterInterface
{
    /**
     * @var HttpRequestInterface
     */
    private HttpRequestInterface $httpRequest;

    /**
     * @param HttpRequestInterface $httpRequest
     */
    public function __construct(HttpRequestInterface $httpRequest)
    {
        $this->httpRequest = $httpRequest;
    }

    /**
     * @return ControllerInterface|false
     */
    public function match()
    {
        $routes = explode('/', $this->httpRequest->getRequestUri());
        $editRoutes = stristr($routes[1], '?', true);
        if (!$editRoutes) {
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
