<?php

declare(strict_types=1);

namespace App;

class Output
{
    /**
     * @param string $template
     * @return void
     */
    public function renderPhtml(string $template): void
    {
        ob_start();
        include_once $template;
        echo ob_get_clean();
    }
}
