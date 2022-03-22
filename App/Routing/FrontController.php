<?php

declare(strict_types=1);

namespace App\Routing;

use App\Controller\ControllerInterface;
use App\Routing\Router\{NotFound, Robots, Start};


class FrontController
{
    /**
     * @return void
     * @throws \Exception
     */
    public function execute(): void // the function determines the router what we need
    {
        $routersPool = new RoutersPool(
            [
                new Robots(),
                new Start(),
                new NotFound(),
            ]
        );
        /** @var RouterInterface $router */
        foreach ($routersPool->get() as $router) {
            /** @var ControllerInterface $result */
            $result = $router->match();
            if ($result) {
                break;
            }
        }
        if (!$result) {
            throw new \Exception("Router was not found");
        }
        $result->execute();
    }
}
