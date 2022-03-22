<?php

declare(strict_types=1);

namespace App\Routing;

interface RoutersPoolInterface
{
    /**
     * @return array
     */
    public function get(): array; // work with array routes
}
