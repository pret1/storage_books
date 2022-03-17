<?php
declare(strict_types=1);

namespace App;

class Router
{
    private $pages = [];

    public function addRoute($url, $path)
    {
        $this->pages[$url] = $path;
    }

    public function route($url)
    {
        $path = $this->pages[$url];
        $file_dir = $path;
        if ($path == "") {
            require "NoRoute.php";
            die();
        }

        if (file_exists($file_dir)) {
            require $file_dir;
        } else {
            require "NoRoute.php";
            die();
        }
    }
}