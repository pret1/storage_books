<?php

declare(strict_types=1);

namespace App\Model;

use App\Controller\ControllerInterface;

class Robot implements ControllerInterface
{
    /**
     * Config robots.txt file
     *
     * @return void
     */
    public function execute(): void
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
