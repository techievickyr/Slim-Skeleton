<?php
// DIC configuration

$container = $app->getContainer();

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// view renderer
$container['view'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    $view = new Slim\Views\PhpRenderer($settings['template_path']);
    return $view;
};

// database
$container['db'] = function ($c) {
	$settings = $c->get('settings')['database'];
	$database = $settings[ENVIRONMENT];	
	$db = new Medoo\Medoo($database);    
    return $db;
};