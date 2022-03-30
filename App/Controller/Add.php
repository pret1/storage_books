<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

class Add
{
    public function execute(): void
    {
        $all = $_POST;
        $keys = array_keys($all);
        $tableFields = implode(', ', $keys);
        $db = new Database();
        $db->addBook($tableFields, $all);
        header('Location: /');
        exit();
    }
}
