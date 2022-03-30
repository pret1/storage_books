<?php

declare(strict_types=1);

namespace App;

class Output
{
    public function renderPhtml(string $template): void
    {
        ob_start();
        include_once $template;
        echo ob_get_clean();
    }
}
