<?php

declare(strict_types=1);


interface RouterInterface
{
    /**
     * @return ControllerInterface|false
     */
    public function match();
}