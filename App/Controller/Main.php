<?php

declare(strict_types=1);

namespace App\Controller;

use App\db\DbConnectInterface;
use App\db\Database;

/**
 * Class Main - Homepage
 */
class Main implements ControllerInterface
{
    private $connect;

    public function __construct(DbConnectInterface $dbConnect)
    {
        $this->connect = $dbConnect;
    }
    /**
     * @inheritDoc
     *
     * @return void
     */
    public function execute(): void
    {
        echo "Main page";
    }

}

$link = new Database();
$db = new Main($link);


