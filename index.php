<?php

use App\Core\Router;

require_once __DIR__.'/vendor/autoload.php';

define ('ROOT', __DIR__);

$router = new Router();
$router->run();