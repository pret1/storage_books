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
        $values = '';
        foreach ($all as $key => $value) {
            $values .= $key . "='" . $value . "', ";
        }
        $id = $all['id'];
        $values = trim($values, ', ');
        $sql = "UPDATE books SET $values WHERE id = $id";
        mysqli_query($this->db, $sql);
    }

    /**
     * @param array $all
     * @return void
     */
    public function addBook(array $all): void
    {
        $this->connectDb();
        $keys = array_keys($all);
        $tableFields = implode(', ', $keys);
        $values = '';
        foreach ($all as $value) {
            $values .= "'" . $value . "', ";
        }
        $values = trim($values, ', ');
        $sql = "INSERT INTO books ($tableFields) VALUES ($values)";
        mysqli_query($this->db, $sql);
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
