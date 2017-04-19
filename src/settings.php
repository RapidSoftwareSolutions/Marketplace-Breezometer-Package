<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        
        'baqi_url' => 'https://api.breezometer.com/baqi',
        'forecast_url' => 'https://api.breezometer.com/forecast',
        'uploadServiceUrl' => 'http://104.198.149.144:8080/'
    ],
];
