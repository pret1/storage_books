<?php

declare(strict_types=1);

namespace App\Controller;

use App\db\DbConnectInterface;

class Data implements DbConnectInterface
{
    private $db;
    private $sqlSelect;
    private $books;
    /**
     * @inheritDoc
     *
     *
     */
    public function connectDb()
    {
        $this->db = mysqli_connect('mysql', 'root', 'root', 'book');
    }

    public function execute()
    {
        var_dump($this->db);
    }

    public function sqlSelect()
    {
        $sqlSelect = "SELECT * FROM books";
    }

    public function books()
    {
        $this->books = mysqli_query($this->db, $this->sqlSelect);
    }

}