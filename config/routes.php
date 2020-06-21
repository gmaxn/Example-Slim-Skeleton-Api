<?php

use Slim\Routing\RouteCollectorProxy;
use App\Controllers\PersonaController;

return function ($app) {

    $app->group('/personas', function (RouteCollectorProxy $group) {

        $group->get('/ByEmail', PersonaController::class . ':getByEmail');
        $group->get('/{id}', PersonaController::class . ':getById');
        $group->get('[/]', PersonaController::class . ':getAll');

        $group->post('[/]', PersonaController::class . ':postPersona');

    });
};
