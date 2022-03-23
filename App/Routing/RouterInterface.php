<?php

declare(strict_types=1);

namespace App\Routing;

use App\Controller\ControllerInterface;

interface RouterInterface
{
    /**
     * Check url matches our routes and return correct controller
     *
     * @return ControllerInterface|false
     */
    public function match();
}
