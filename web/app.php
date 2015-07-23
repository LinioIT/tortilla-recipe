<?php

$debug = false;

try {
    $app = require_once __DIR__ . '/../app/bootstrap.php';
    $app->run();
} catch (\Exception $exception) {
    syslog(600, (string) $exception);
    header('Content-Type: application/json', true, 500);
    echo json_encode((['type' => '#1000', 'code' => '1000', 'title' => 'Internal error', 'status' => 500]));
}
