<?php

declare(strict_types=1);

namespace App\Test\Unit\Routing;

use App\Routing\FrontController;
use App\Routing\Router\Robots;
use PHPUnit\Framework\TestCase;

class FrontControllerTest extends TestCase
{
    protected function setUp(): void
    {
    }

    public function testPositiveExecute()
    {
        $object = new FrontController();
        $object->execute();
    }
}