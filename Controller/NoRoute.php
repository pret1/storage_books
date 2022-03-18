<?php

declare(strict_types=1);

namespace App;

class NoRoute
{
    public function __construct()
    {
        echo "<h1>Page not found 404</h1>";
    }
}