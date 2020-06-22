<?php

use Slim\Routing\RouteCollectorProxy;
use App\Controllers\PersonaController;
use App\Middleware\AfterMiddleware;
use App\Middleware\AuthorizationMiddleware;

return function ($app) {

    $app->group('/personas', function (RouteCollectorProxy $group) {

        $group->get('/ByEmail', PersonaController::class . ':getByEmail');
        $group->get('/{id}', PersonaController::class . ':getById');
        $group->get('[/]', PersonaController::class . ':getAll')->add(AuthorizationMiddleware::class);

        $group->post('[/]', PersonaController::class . ':postPersona');

    });
};