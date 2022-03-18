<?php

declare(strict_types=1);

namespace App;

use App\RouteInterface;

class More implements RouteInterface
{
    /**
     * @return void
     */
    public function action(): void
    {
        echo "More page";
    }
}