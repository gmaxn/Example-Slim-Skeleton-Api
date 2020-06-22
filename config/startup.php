<?php 
require __DIR__ . '/../vendor/autoload.php';

use Config\DbContext;
use Slim\Factory\AppFactory;


$app = AppFactory::create();
$app->setBasePath('/Example-Slim-Skeleton-Api/public');

// Register Routes
$routes = require __DIR__ . '/routes.php';
$routes($app);

// Add Middlewares
$middlewares = require __DIR__ . '/middlewares.php';
$middlewares($app);

// Initialize DbContext
$dbContext = new DbContext();


return $app;