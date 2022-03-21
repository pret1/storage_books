<?php

declare(strict_types=1);

use App\Controller\ControllerInterface;

interface RouterInterface
{
    /**
     * @return ControllerInterface|false
     */
    public function match();
}