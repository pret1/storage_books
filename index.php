<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\Router;
use App\Controller\PullObjectRoute;
use App\Routing\RoutersPool;
use App\Routing\FrontController;

$frontController = new FrontController();
$frontController->execute();

//$startRoute = new PullObjectRoute([new App\Controller\Router(), new \App\Controller\NoRoute()]);
//$route = new Router();
//$route->run();

