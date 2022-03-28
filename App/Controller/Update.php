<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

$all = $_POST;
$id = $_POST['id'];
$name = $_POST['name'];
$content = $_POST['content'];
$dateWrite = $_POST['date_write_book'];
$genre = $_POST['genre'];
$author = $_POST['author'];
$countPages = $_POST['count_of_pages'];

class Update
{
    public function execute()
    {
        $db = new Database();
//        $db->updateBook();
        $db->updateBook('books', 'we change name', 'we change important place', '1990-03-03', 'drama', 'Konov', 31, 2);
        header('Location: /');
        exit();
    }
}

