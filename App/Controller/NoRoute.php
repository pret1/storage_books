<?php

declare(strict_types=1);

namespace App\Controller;

class NoRoute implements RouteInterface
{
    /**
     * @return void
     */
    public function action(): void
    {
        echo "<h1>Page not found 404 </h1>";
    }
}