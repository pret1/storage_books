<?php

declare(strict_types=1);

namespace App\Routing;

use App\Controller\ControllerInterface;

interface RouterInterface
{
    /**
     * @return ControllerInterface|false
     */
    public function match(); // function work with routers
}
