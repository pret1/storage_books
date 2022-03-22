<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\{ControllerInterface, NoRoute};
use App\Routing\RouterInterface;

class NotFound implements RouterInterface
{

    /**
     * @return ControllerInterface|false
     */
    public function match() // returns controller with 404 error
    {
        return new NoRoute();
    }
}
