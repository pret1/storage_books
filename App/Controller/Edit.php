<?php

declare(strict_types=1);

namespace App\Controller;

use App\Output;

class Edit
{
    public function execute(): void
    {
        $show = new Output();
        $show->renderPhtml('View/edit.phtml');
    }
}