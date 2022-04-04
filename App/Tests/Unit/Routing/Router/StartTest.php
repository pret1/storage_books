<?php

declare(strict_types=1);

namespace App\Tests\Unit\Routing\Router;

use App\System\HttpRequest;
use PHPUnit\Framework\TestCase;
use App\Routing\Router\Start;

class StartTest extends TestCase
{
    /**
     * @var HttpRequest|\PHPUnit\Framework\MockObject\MockObject
     */
    private $stub;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->stub = $this->createMock(HttpRequest::class);
    }
    /**
     * @return void
     * @covers \App\Routing\Router\Start::match
     */
    public function testPositiveStart()
    {
//        $stub = $this->createMock(HttpRequest::class);
//        $stub->expects($this->once())->method('getRequestUri')->willReturn('/');
        $this->stub->expects($this->once())->method('getRequestUri')->willReturn('/');
        $object = new Start($this->stub);
        $result = $object->match();
        $this->assertInstanceOf(\App\Controller\Main::class, $result);
    }

    /**
     * @return void
     * @covers \App\Controller\Edit::execute
     */
    public function testPositiveStart2()
    {
        $this->stub->expects($this->once())->method('getRequestUri')->willReturn('/edit?book_id');
        $object = new Start($this->stub);
        $result = $object->match();
        $this->assertInstanceOf(\App\Controller\Edit::class, $result);
    }

    /**
     * @return void
     * @covers \App\Routing\Router\Start::match
     */
    public function testPositiveStart3()
    {
        $this->stub->expects($this->once())->method('getRequestUri')->willReturn('/wdasdasdss');
        $object = new Start($this->stub);
        $result = $object->match();
        $this->assertSame(false, $result);
    }

}