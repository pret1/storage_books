<?php

declare(strict_types=1);

namespace App\db;

class Database implements DbConnectInterface
{
    /**
     * @inheritDoc
     *
     *
     */
    public function connectDb(): object
    {
        mysqli_connect('mysql', 'root', 'root', 'book');
    }
}