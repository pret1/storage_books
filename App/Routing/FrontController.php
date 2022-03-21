<?php

declare(strict_types=1);

use App\Controller\ControllerInterface;

class FrontController
{
    public function execute()
    {
        /**
         * @var RouterInterface $router
         */
        foreach ($routers as $router){
           $result = $router->match();
            if($result){
                /** @var ControllerInterface $result */
                $result->execute();
            }

        }
    }
}