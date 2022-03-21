<?php

declare(strict_types=1);

namespace App\Controller;

class PullObjectRoute
{
    private $routes = [];
//    private $mainRoute = new Router();
//    private $anyRoute = new NoRoute();



    /**
     * @param Router $router
     * @param NoRoute $noRoute
     */

    public function __construct(array  $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @return Router
     */
    public function getRouter(): Router
    {
        return $this->router;
    }

    /**
     * @return NoRoute
     */
    public function getNoRoute(): NoRoute
    {
        return $this->noRoute;
    }
}
