<?php

// Logging
$app->register(new Linio\Tortilla\Provider\MonologServiceProvider(), [
    'monolog.logfile' => $app['config']['log']['logfile'],
    'monolog.name' => $app['config']['log']['name'],
]);

// Controller definitions
$app['controller.default'] = function () {
    return new Acme\Api\Controller\DefaultController();
};
