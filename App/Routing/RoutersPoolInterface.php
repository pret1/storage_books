<?php

declare(strict_types=1);

namespace App\Routing;

interface RoutersPoolInterface
{
    /**
     * Get a set of routers registered in the system
     *
     * @return RouterInterface[]
     */
    public function get(): array;
}
