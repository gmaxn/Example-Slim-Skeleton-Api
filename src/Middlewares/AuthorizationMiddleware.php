<?php

namespace App\Middleware;

use Psr\Http\Message\MessageInterface as IResponse;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

use Slim\Psr7\Response;

class AuthorizationMiddleware
{
    public function __invoke(Request $request, RequestHandler $handler) : IResponse
    {
        $response = $handler->handle($request);

        $existingContent = (string) $response->getBody();

        $response = new Response();

        
        // VALIDAR JWT

        // getHeader('mi_token)

        if (false) {

            $response->getBody()->write($existingContent);

        } else {

            $response->getBody()->write('NO autorizado');

        }

        return $response;
    }
}