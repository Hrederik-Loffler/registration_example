<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

require '../vendor/autoload.php';

$database = require '../core/bootstrap.php';

Core\Router::load('../routes.php')->direct(Core\Request::uri(), Core\Request::method());
