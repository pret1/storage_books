<?php

declare(strict_types=1);

namespace App\DB;

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



    public function selectBooks(string $table, string $search): array
    {
        $this->connectDb();
        $this->books = mysqli_query($this->db, "SELECT " . $search . " FROM " . $table);
        return mysqli_fetch_all($this->books, MYSQLI_ASSOC);
    }

    public function takeSelectBook(string $table, string $search, int $id): array
//     public function takeSelectBook(): array
    {
        $this->connectDb();
//        $this->books = mysqli_query($this->db, "SELECT" . $search . "FROM " . $table . "WHERE id=" . $id);
//        $this->books = mysqli_query($this->db, "SELECT * FROM books WHERE id = 1");
        $this->books = mysqli_query($this->db, sprintf("SELECT %s FROM %s WHERE id = %s", $search, $table, $id));
        return mysqli_fetch_all($this->books, MYSQLI_ASSOC);
    }
}