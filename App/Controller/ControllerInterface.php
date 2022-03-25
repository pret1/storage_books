<?php

declare(strict_types=1);

namespace App\Controller;

use App\db\DbConnectInterface;

interface ControllerInterface
{
    /**
     * This is the main interface for all controllers created in the system, preferably display the selected page.
     *
     * @return void
     */
    public function execute(): void;
}
