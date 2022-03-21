<?php

declare(strict_types=1);

use App\Controller\{ControllerInterface, NoRoute};

class NotFound implements RouterInterface
{

    /**
     * @return ControllerInterface|false
     */
    public function match()
    {
        return new NoRoute();
    }
}