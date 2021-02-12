<?php

/**
 * All configurations are stored in this file
 */

return [
    'app' => [
        'url' => env('APP_URL', 'http://localhost:8000'),
        'debug' => env('APP_DEBUG', true),
        'env' => env('APP_ENV', 'dev'),
    ],
    'database' => [
        'dev' => [
            'driver' => env('DB_DRIVER', 'mysql'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'name' => env('DB_NAME', ''),
            'port' => env('DB_PORT', 3306),
        ]
    ],
    'view' => [
        'path' => __DIR__ . '/views/',
    ],
    'storage' => [
        'path' => __DIR__ . '/storage/app/',
    ],
    'logs' => [
        'path' => __DIR__ . '/storage/logs/',
    ]
];
