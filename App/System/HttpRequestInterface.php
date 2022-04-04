<?php

declare(strict_types=1);

namespace App\System;

interface HttpRequestInterface
{
    /**
     * @return string
     */
    public function getRequestUri(): string;
}