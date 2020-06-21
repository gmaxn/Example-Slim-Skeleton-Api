<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Persona;

class PersonaController {

    public function getAll(Request $request, Response $response, $args) {

        $result = json_encode(Persona::all());

        $response->getBody()->write($result);

        return $response;
    }
}