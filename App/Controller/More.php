<?php

declare(strict_types=1);

namespace App\Controller;

class More implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void // display example other pages
    {
        echo "More page";
    }
}
