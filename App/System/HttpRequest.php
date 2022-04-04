<?php

declare(strict_types=1);

namespace App\System;

class HttpRequest implements HttpRequestInterface
{
    /**
     * @return string
     */
    public function getRequestUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }
}