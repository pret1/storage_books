<?php

declare(strict_types=1);

namespace App\db;

interface DbConnectInterface
{
    /**
     * Represents the connection to a MySQL Server or false if an error occurred
     *
     *
     */
    public function connectDb();
}