<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\Router;
use App\Controller\PullObjectRoute;

$startRoute = new PullObjectRoute([new App\Controller\Router(), new \App\Controller\NoRoute()]);
//$route = new Router();
//$route->run();

