<?php

declare(strict_types=1);

namespace App\Test\Unit\Routing;

use PHPUnit\Framework\TestCase;

class RoutersPoolTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function testGetPositive()
    {
        $this->assertTrue(true);
    }

    public function testGetPositive2()
    {
        $this->assertTrue(false);
    }
}