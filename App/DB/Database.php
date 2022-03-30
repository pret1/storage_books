<?php

declare(strict_types=1);

namespace App\DB;

use mysqli;

class Database
{
    private $db;
    private $books;

    /**
     * @return mysqli
     */
    public function connectDb(): mysqli
    {
        if ($this->db === null) {
            $this->db = mysqli_connect('mysql', 'root', 'root', 'book');
        }
        return $this->db;
    }

    /**
     * @param string $table
     * @param string $search
     * @return array
     */
    public function selectBooks(string $table, string $search): array
    {
        $this->connectDb();
        $this->books = mysqli_query($this->db, "SELECT " . $search . " FROM " . $table);
        return mysqli_fetch_all($this->books, MYSQLI_ASSOC);
    }

    /**
     * @param string $table
     * @param string $search
     * @param int $id
     * @return array
     */
    public function takeSelectBook(string $table, string $search, int $id): array
    {
        $this->connectDb();
        $this->books = mysqli_query($this->db, sprintf("SELECT %s FROM %s WHERE id = %s", $search, $table, $id));
        return mysqli_fetch_all($this->books, MYSQLI_ASSOC);
    }

    /**
     * @param array $all
     * @return void
     */
    public function updateBook(array $all): void
    {
        $this->connectDb();
        $stmt = $this->db->prepare("UPDATE books SET name = ?, content = ?, date_write_book = ?, genre = ?, author = ?, count_of_pages =? WHERE id =? ");
        $stmt->bind_param('sssssss', $all['name'], $all['content'], $all['date_write_book'], $all['genre'], $all['author'], $all['count_of_pages'], $all['id']);
        $stmt->execute();
    }

    /**
     * @param string $tableFields
     * @param array $all
     * @return void
     */
    public function addBook(string $tableFields, array $all): void
    {
        $this->connectDb();
        $stmt = $this->db->prepare("INSERT INTO books($tableFields) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param('ssssss', $all['name'], $all['content'], $all['date_write_book'], $all['genre'], $all['author'], $all['count_of_pages']);
        $stmt->execute();
    }

    /**
     * @param $id
     * @return void
     */
    public function deleteBook($id): void
    {
        $this->connectDb();
        mysqli_query($this->db, sprintf("DELETE FROM books WHERE id = %s", $id));
    }
}
