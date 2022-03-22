<?php

declare(strict_types=1);

namespace App\Controller;

class Robot implements ControllerInterface
{
    /**
     * @return void
     */
    public function execute(): void // config robots.txt file
    {
        echo "<pre>";
        echo "User-agent: Googlebot
              Disallow: /nogooglebot/

              User-agent: *
              Allow: /

              Sitemap: http://www.example.com/sitemap.xml";
        echo "</pre>";
    }
}