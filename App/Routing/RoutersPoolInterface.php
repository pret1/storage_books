<?php

declare(strict_types=1);

interface RoutersPoolInterface
{
    /**
     * @return array
     */
    public function get(): array;
}