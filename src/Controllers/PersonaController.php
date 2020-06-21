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

    public function getById(Request $request, Response $response, $args) {

        echo 'Hi! ^_^' . PHP_EOL;

        $result = json_encode(Persona::find($args['id']));

        $response->getBody()->write($result);

        return $response;
    }

    public function getByEmail(Request $request, Response $response, $args) {

        echo 'Hi! ^_^' . PHP_EOL;
        
        $queryString = $request->getQueryParams();

        $result = json_encode(Persona::where('Email', '=', $queryString['email'])->get());

        $response->getBody()->write($result);

        return $response;
    }

    public function postPersona(Request $request, Response $response, $args) {

        echo 'Hi! ^_^' . PHP_EOL;
        
        $body = $request->getParsedBody();

        $persona = new Persona();
        $persona->firstname = $body['nombre'];
        $persona->lastname = $body['apellido'];
        $persona->email = $body['email'];
        $persona->password = $body['password'];

        $result = json_encode(array('ok' => $persona->save()));

        $response->getBody()->write($result);

        return $response;
    }
}