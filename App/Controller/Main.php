<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Class Main - Homepage
 */
class Main implements ControllerInterface
{
    /**
     * @inheritDoc
     *
     * @return void
     */
    public function execute(): void
    {
        echo "Main page";
    }
}
