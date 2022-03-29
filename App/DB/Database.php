<?php

declare(strict_types=1);

namespace App\DB;

use mysqli;

class Database
{
    private $db;
    private $books;

    public function connectDb(): mysqli
    {
        if ($this->db === null) {
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

    public function updateBook($name, $content, $dateWrite, $genre, $author, $countPages, $id): void
    {
        $this->connectDb();
        mysqli_query($this->db, "UPDATE books SET books.name = '$name', books.content = '$content', books.date_write_book = '$dateWrite', books.genre = '$genre', books.author = '$author', books.count_of_pages = '$countPages' WHERE id = '$id'");
    }

    public function addBook($name, $content, $dateWrite, $genre, $author, $countPages): void
    {
        $this->connectDb();
        mysqli_query($this->db, "INSERT INTO books(books.name, content, date_write_book, genre, author, count_of_pages) VALUES('$name', '$content', '$dateWrite', '$genre', '$author', '$countPages')");
    }

    public function deleteBook($id): void
    {
        $this->connectDb();
        mysqli_query($this->db, sprintf("DELETE FROM books WHERE id = %s", $id));
    }
}