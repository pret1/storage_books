<?php

declare(strict_types=1);

namespace App\Controller;

use App\db\Database;
use App\Output;

/**
 * Class Main - Homepage
 */
class Main
{

    public function execute(): void
    {
//        $link = new Database();
        $show = new Output();
//        return $link->sqlSelect();
//        var_dump($link->sqlSelect());
//        $link->selectBooks('books');
        $show->renderPhtml('View/show.phtml');

//        return $link->queryBooks();
    }
}



