<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;


class Update
{
    public function execute(): void
    {
        $all = $_POST;
        $id = $_POST['id'];
        $name = $_POST['name'];
        $content = $_POST['content'];
        $dateWrite = $_POST['date_write_book'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];
        $countPages = $_POST['count_of_pages'];
        $db = new Database();
        $db->updateBook($name, $content, $dateWrite, $genre, $author, $countPages, $id);
        header('Location: /');
        exit();
    }
}

