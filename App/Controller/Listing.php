<?php

declare(strict_types=1);

namespace App\Controller;

class Listing implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void // display listing page
    {
        echo "Listing page";
    }
}
