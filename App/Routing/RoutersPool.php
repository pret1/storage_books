<?php

declare(strict_types=1);

namespace App\Routing;

class RoutersPool implements RoutersPoolInterface
{
    /**
     * @var array
     */
    private array $routers;

    /**
     * @param array $routers
     */
    public function __construct(array $routers)
    {
        $this->routers = $routers;
    }

    /**
     * @inheritDoc
     */
    public function get(): array
    {
        return $this->routers;
    }
}
