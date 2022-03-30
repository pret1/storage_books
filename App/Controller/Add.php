<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

class Add
{
    public function execute(): void
    {
        $all = $_POST;
        $db = new Database();
        $db->addBook($all);
        header('Location: /');
        exit();
    }
}
