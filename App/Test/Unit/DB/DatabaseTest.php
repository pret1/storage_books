<?php

declare(strict_types=1);

namespace Test\Unit\DB;

use PHPUnit\Framework\TestCase;
use App\DB\Database;

class DatabaseTest extends TestCase
{
    public function testPositivetQuery()
    {
        $testObject = new Database();
        $testObject->connectDb();
    }
    public function testGetNegative()
    {
        $this->assertTrue(false);
    }
}