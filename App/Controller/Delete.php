<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

class Delete
{
    public function execute()
    {
        $db = new Database();
        $db->deleteBook();
        header('Location: /');
        exit();
    }
}