<?php

declare(strict_types=1);

namespace App\Controller;

use App\DB\Database;

class Add
{

    public function execute()
    {

        $all = $_POST;
        $name = $_POST['name'];
        $content = $_POST['content'];
        $dateWrite = $_POST['date_write_book'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];
        $countPages = $_POST['count_of_pages'];
        $db = new Database();
        $db->addBook($name, $content, $dateWrite, $genre, $author, $countPages);
        header('Location: /');
        exit();
    }
}