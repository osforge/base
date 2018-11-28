<?php

namespace Osforge\Bootstrap;

use Osforge\Application;
use Osforge\Facade\Facade;

class RegisterProviders
{
  public function bootstrap(Application $app)
  {
    Facade::setFacadeApplication($app);

    $config = require BASE_PATH.'/config/config.php';
    foreach ($config['aliases'] as $className => $facadeName) {
        class_alias($facadeName, $className);
    }
  }
}