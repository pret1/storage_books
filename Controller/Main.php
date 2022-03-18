<?php

declare(strict_types=1);

namespace App;

use App\RouteInterface;

/**
 * Class Main - Homepage
 */
class Main implements RouteInterface
{
   /**
    * @return void
    */
   public function action(): void
   {
       echo "Main page";
   }
}
