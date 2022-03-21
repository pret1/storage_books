<?php

declare(strict_types=1);

use App\Controller\ControllerInterface;

class FrontController
{
    /**
     * @var RoutersPoolInterface
     */
    private RoutersPoolInterface $routersPool;

    /**
     * @param RoutersPoolInterface $routersPool
     */
    public function __construct(RoutersPoolInterface $routersPool)
    {

        $this->$routersPool = $routersPool;
    }
    public function execute()
    {
        /** @var RouterInterface $router */
        foreach ($this->routersPool->get() as $router){
           $result = $router->match();
            if($result){
                /** @var ControllerInterface $result */
                $result->execute();
            }

        }
    }
}