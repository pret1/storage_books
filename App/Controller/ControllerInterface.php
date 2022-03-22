<?php

declare(strict_types=1);

namespace App\Controller;

interface ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void;
}
