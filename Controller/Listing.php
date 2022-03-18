<?php

declare(strict_types=1);

namespace App;

use App\RouteInterface;

class Listing implements RouteInterface
{
    /**
     * @return void
     */
    public function action(): void
    {
        echo "Listing page";
    }
}