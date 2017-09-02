<?php

/*
|-----------------------------------------
| Web Routes
|-----------------------------------------
*/ 

$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'index.phtml', $args);
});

/*
|-----------------------------------------
| API Routes
|-----------------------------------------
*/ 
$app->group('/api', function () use ($app) {
	$app->get('/sample', App\Controllers\Api\ExampleController::class . ':sample');	
});