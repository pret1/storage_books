<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;


class Update
{
    public function execute(): void
    {
        $all = $_POST;
        $db = new Database();
        $db->updateBook($all);
        header('Location: /');
        exit();
    }
}
