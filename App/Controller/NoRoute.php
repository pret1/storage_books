<?php

declare(strict_types=1);

namespace App\Controller;

class NoRoute implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void // display page with error 404
    {
        echo "<h1>Page not found 404 </h1>";
    }
}
