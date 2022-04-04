<?php

declare(strict_types=1);

namespace App\Tests\Unit\Routing\Router;

use App\Controller\Edit;
use App\Controller\Main;
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
     * @return array
     */
    public function requestUriDataProvider(): array
    {
        return [
            ['requestUri' => '/', 'expectedResult' => Main::class],
            ['requestUri' => '/edit?book_id', 'expectedResult' => Edit::class],
        ];
    }

    /**
     * @return void
     */
    protected function setUp(): void
    {
        $this->stub = $this->createMock(HttpRequest::class);
    }

    /**
     * @param string $requestUri
     * @param string $expectedResult
     * @return void
     * @covers       \App\Routing\Router\Start::match
     * @dataProvider requestUriDataProvider
     */
    public function testStartPositive(string $requestUri, string $expectedResult): void
    {
        $this->stub->expects($this->once())->method('getRequestUri')->willReturn($requestUri);
        $object = new Start($this->stub);
        $result = $object->match();
        $this->assertInstanceOf($expectedResult, $result);
    }

    /**
     * @return void
     * @covers \App\Routing\Router\Start::match
     */
    public function testStartNegative(): void
    {
        $this->stub->expects($this->once())->method('getRequestUri')->willReturn('/url-unexpected-value');
        $object = new Start($this->stub);
        $this->assertFalse($object->match());
    }

}