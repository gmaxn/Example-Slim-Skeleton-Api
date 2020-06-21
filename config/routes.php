<?php

use Slim\Routing\RouteCollectorProxy;
use App\Controllers\PersonaController;

return function ($app) {

    $app->group('/personas', function (RouteCollectorProxy $group) {

        $group->get('[/]', PersonaController::class . ':getAll');

    });

};
