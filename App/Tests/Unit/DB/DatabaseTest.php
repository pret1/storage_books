<?php

declare(strict_types=1);

namespace App\Tests\Unit\DB;

use PHPUnit\Framework\TestCase;
use App\DB\Database;

class DatabaseTest extends TestCase
{
    public function testPositiveQuery()
    {
        $testObject = new Database();
        $testObject->connectDb();
    }
}