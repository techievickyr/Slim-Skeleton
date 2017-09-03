<?php
return [
    'settings' => [
        'displayErrorDetails' => (bool)getenv('DISPLAY_ERRORS', true), // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../resources/views/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        
        // Database settings
        'database' => [
			'development' => [
				'database_type' => 'mysql',
				'database_name' => 'world', 
				'server' => 'localhost',
				'username' => 'world',
				'password' => 'test',
				'charset' => 'utf8'
			],
			'testing' => [
				'database_type' => 'mysql',
				'database_name' => 'slimdb_testing', 
				'server' => 'localhost',
				'username' => 'root',
				'password' => '123456',
				'charset' => 'utf8'
			], 
			'production' => [
				'database_type' => 'mysql',
				'database_name' => 'slimdb', 
				'server' => 'localhost',
				'username' => 'root',
				'password' => '123456',
				'charset' => 'utf8'
			] 
        ],
    ],
];
