<?php
//phpinfo();
require_once __DIR__ . '/vendor/autoload.php';

use App\Router;

$url = $_SERVER['REQUEST_URI'];

$router = new Router();
$router->addRoute("/", "Main.php");

$router->route("$url");

//echo $url;