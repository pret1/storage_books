<?php

declare(strict_types=1);

namespace App\Test\Unit\Routing\Router;

use PHPUnit\Framework\TestCase;
use App\Routing\Router\Start;

class StartTest extends TestCase
{
    /**
     * @return void
     * @covers \App\Routing\Router\Start::match
     */
    public function testPositiveStart()
    {
        $object = new Start();
        $result = $object->match();
        $this->assertInstanceOf(\App\Controller\Main::class, $result);
    }
}