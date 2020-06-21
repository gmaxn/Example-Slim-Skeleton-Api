<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class PersonaController {

    public function getAll(Request $request, Response $response, $args) {

        $response->getBody()->write("Hello from PersonaController getAll method!");

        return $response;
    }
}