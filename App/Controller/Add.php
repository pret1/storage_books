<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

class Add
{
    public function execute()
    {
        $db = new Database();
        $db->addBook();
        header('Location: /');
        exit();
    }
}