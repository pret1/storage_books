<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Class Main - Homepage
 */
class Main implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void // display homepage
    {
        echo "Main page";
    }
}
