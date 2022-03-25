<?php

declare(strict_types=1);

namespace App\Controller;

use App\Output;

/**
 * Class Main - Homepage
 */
class Main
{

    public function execute(): void
    {
        $show = new Output();
        $show->renderPhtml('View/show.phtml');
    }
}



