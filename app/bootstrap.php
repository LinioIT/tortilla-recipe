<?php

use Linio\Tortilla\Application;
use Linio\Tortilla\ErrorHandler;

if (!defined('APP_ROOT')) {
    define('APP_ROOT', __DIR__ . '/../app');
}

if (!defined('SRC_ROOT')) {
    define('SRC_ROOT', __DIR__ . '/../src');
}

if (!defined('TEST_ROOT')) {
    define('TEST_ROOT', __DIR__ . '/../tests');
}

require_once __DIR__ . '/../vendor/autoload.php';

ErrorHandler::register();

$app = new Application();

$parameterData = require_once APP_ROOT . '/config/parameters.php';

$app['debug'] = isset($debug) ? $debug : false;
$app['config'] = require_once APP_ROOT . '/config/config.php';
$app['parameters'] = $parameterData['parameters'];

require APP_ROOT . '/services.php';
require APP_ROOT . '/routing.php';

return $app;
