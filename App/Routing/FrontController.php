<?php

declare(strict_types=1);

namespace App\Routing;

use App\Controller\ControllerInterface;
use App\Routing\Router\{NotFound, Start};


class FrontController
{
    public function execute()
    {
        $routersPool = new RoutersPool(
            [
                new Start(),
                new NotFound(),
            ]
        );
        /** @var RouterInterface $router */
        foreach ($routersPool->get() as $router){
           $result = $router->match();
            if($result){
                /** @var ControllerInterface $result */
                $result->execute();
            }

        }
    }
}
