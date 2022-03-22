<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Routing\FrontController;

$frontController = new FrontController();
$frontController->execute();
