<?php

declare(strict_types=1);

namespace App\Routing\Router;

use App\Controller\{ControllerInterface, NoRoute};
use App\Routing\RouterInterface;

class NotFound implements RouterInterface
{

    /**
     * @inheritDoc
     *
     * @return ControllerInterface|false
     */
    public function match()
    {
        return new NoRoute();
    }
}
