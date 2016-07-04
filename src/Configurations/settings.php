<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../../src/Views',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../../logs/app.log',
        ],
        'db_connection' => [
            'servername' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'slim-mvc',
        ],
    ],
];