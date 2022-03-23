<?php

declare(strict_types=1);

namespace App\Controller;

class More implements ControllerInterface
{
    /**
     * @inheritDoc
     *
     * @return void
     */
    public function execute(): void
    {
        echo "More page";
    }
}
