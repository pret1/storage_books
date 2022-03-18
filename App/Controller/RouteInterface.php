<?php

declare(strict_types=1);

namespace App\Controller;

interface RouteInterface
{
    /**
     * @return void
     */
    public function action(): void;
}