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

    {
        $this->connectDb();

        $this->books = mysqli_query($this->db, sprintf("SELECT %s FROM %s WHERE id = %s", $search, $table, $id));
        return mysqli_fetch_all($this->books, MYSQLI_ASSOC);
    }

    public function updateBook($table, $name, $content, $dateWrite, $genre, $author, $countPages, $id)
//    public function updateBook()
    {
        $this->connectDb();
        $rezult = mysqli_query($this->db, sprintf("UPDATE %s SET books.name = %s, books.content = %s, books.date_write_book = %s, books.genre = %s, books.author = %s, books.count_of_pages = %s WHERE id = %s", $table, $name, $content, $dateWrite, $genre, $author, $countPages, $id));
        if(!$rezult){
            echo 'Wrong query';
        }
//        mysqli_query($this->db, "UPDATE books SET books.name = 'King', books.content = 'we change content', books.date_write_book = '2022-03-28', books.genre = 'fantasy', books.author = 'Konau', books.count_of_pages = 33 WHERE id = 2");
    }

    public function addBook()
    {
        $this->connectDb();
        mysqli_query($this->db, "INSERT INTO books(name, content, date_write_book, genre, author, count_of_pages) VALUES('Do table', '101 way do table','2002-10-10', 'Children book', 'Hans Wilhelm', 18)");
    }

    public function deleteBook()
    {
        $this->connectDb();
        mysqli_query($this->db, "DELETE FROM books WHERE id = 4");
    }
}