<?php

declare(strict_types=1);

namespace App\db;

use mysqli;

class Database
{
    private $db;
    private $sqlSelect;
    private $books;

    public function connectDb(): mysqli
    {
        if($this->db === null){
            $this->db = mysqli_connect('mysql', 'root', 'root', 'book');
        }
        return $this->db;
    }



    public function selectBooks(string $table): array
    {
        $this->connectDb();
        $this->books = mysqli_query($this->db, "SELECT * FROM " . $table);
        return mysqli_fetch_all($this->books, MYSQLI_ASSOC);
//        var_dump($this->db);
//        var_dump($this->sqlSelect);
    }
}