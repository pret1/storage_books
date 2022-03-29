<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

class Delete
{
    public function execute()
    {
        $id = $_GET['book_id'];
        $db = new Database();
        $db->deleteBook($id);
        header('Location: /');
        exit();
    }
}