<?php

<<<<<<< HEAD
use Illuminate\Foundation\Application;
=======
>>>>>>> 7d9a0063dcc08e55351ad613fcb2f2512dd98ab7
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

<<<<<<< HEAD
// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
=======
// Register the Auto Loader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
>>>>>>> 7d9a0063dcc08e55351ad613fcb2f2512dd98ab7
