<?php

declare(strict_types=1);

namespace App\Test\Unit\Routing;

use PHPUnit\Framework\TestCase;

class RoutersPoolTest extends TestCase
{
    public function testGetPositive()
    {
        $routerMock = $this->createMock(\App\Routing\Router\Start::class);
        $object = new \App\Routing\RoutersPool([$routerMock]);
        $result = $object->get();
        $this->assertEquals([$routerMock], $result);
    }

    /**
     * @return void
     * @throws \App\AppException
     */
    public function testGetPositive2()
    {
        $object = new \App\Routing\RoutersPool();
        $result = $object->get();
        $this->assertEquals([], $result);
    }

    public function testGetNegative()
    {
        $unexpectedObjectMock = $this->createMock(\App\DB\Database::class);
        $object = new \App\Routing\RoutersPool([$unexpectedObjectMock]);
        $this->expectException('App\AppException');
        $result = $object->get();
    }
}