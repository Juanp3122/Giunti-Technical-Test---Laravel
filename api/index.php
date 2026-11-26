<?php

ini_set('display_errors', '1');
ini_set('log_errors', '1');
error_reporting(E_ALL);

// En Vercel solo /tmp es escribible
foreach ([
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

$root = dirname(__DIR__);

if (!file_exists($root . '/vendor/autoload.php')) {
    http_response_code(500);
    exit('DIAG: falta vendor/autoload.php (composer install no se ejecutó)');
}

register_shutdown_function(function () {
    $e = error_get_last();
    if ($e) {
        error_log('DIAG fatal: ' . print_r($e, true));
    }
});

try {
    require $root . '/public/index.php';
} catch (Throwable $e) {
    http_response_code(500);
    error_log((string) $e);
    echo 'DIAG: ' . get_class($e) . ': ' . $e->getMessage();
}