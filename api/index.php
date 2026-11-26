<?php

// En Vercel solo /tmp es escribible: redirige a ahí todo lo que Laravel escribe
$overrides = [
    'APP_CONFIG_CACHE'   => '/tmp/config.php',
    'APP_ROUTES_CACHE'   => '/tmp/routes.php',
    'APP_EVENTS_CACHE'   => '/tmp/events.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
    'LOG_CHANNEL'        => 'stderr',
    'SESSION_DRIVER'     => 'cookie',
    'CACHE_DRIVER'       => 'array',
    'CACHE_STORE'        => 'array',
];

foreach ($overrides as $key => $value) {
    putenv("$key=$value");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

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
$publicDir = realpath($root . '/public');
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH));
$file = realpath($publicDir . $path);

// Archivos estáticos de public/ (nunca .php)
if (
    $file !== false
    && is_file($file)
    && str_starts_with($file, $publicDir . DIRECTORY_SEPARATOR)
    && strtolower(pathinfo($file, PATHINFO_EXTENSION)) !== 'php'
) {
    $mimes = [
        'css'   => 'text/css; charset=utf-8',
        'js'    => 'application/javascript; charset=utf-8',
        'json'  => 'application/json',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'gif'   => 'image/gif',
        'webp'  => 'image/webp',
        'svg'   => 'image/svg+xml',
        'ico'   => 'image/x-icon',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'txt'   => 'text/plain; charset=utf-8',
    ];
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    header('Content-Type: ' . ($mimes[$ext] ?? 'application/octet-stream'));
    header('Content-Length: ' . filesize($file));
    header('Cache-Control: public, max-age=3600');
    readfile($file);
    exit;
}

// Todo lo demás lo gestiona Laravel
require $root . '/public/index.php';