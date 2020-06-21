<?php 
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;


$app = AppFactory::create();
$app->setBasePath('/Example-Slim-Skeleton-Api/public');

// Register Routes
$routes = require __DIR__ . '/routes.php';
$routes($app);



return $app;
