<?php

declare(strict_types=1);

namespace App\Routing;

use App\AppException;

class RoutersPool implements RoutersPoolInterface
{
    /**
     * @var RouterInterface[]
     */
    private array $routers;

    /**
     * @param RouterInterface[] $routers
     */
    public function __construct(array $routers = [])
    {
        $this->routers = $routers;
    }

    /**
     * @inheritDoc
     * @throws AppException
     */
    public function get(): array
    {
        foreach ($this->routers as $router) {
            if (!($router instanceof RouterInterface)) {
                throw new AppException('Unexpected class type');
            }
        }
        return $this->routers;
    }
}
