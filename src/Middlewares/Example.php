<?php
namespace App\Middleware;

use Psr\Http\Message\MessageInterface as IResponse;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

use Slim\Psr7\Response;

class BeforeMiddleware
{
    public function __invoke(Request $request, RequestHandler $handler) : IResponse
    {
        $response = $handler->handle($request);

        $existingContent = (string) $response->getBody();

        $response = new Response();
        
        $response->getBody()->write('BEFORE ' . $existingContent);

        return $response;
    }
}

class AfterMiddleware 
{
    public function __invoke(Request $request, RequestHandler $handler) : IResponse
    {
        $response = $handler->handle($request);

        $response->getBody()->write('AFTER');

        return $response;   
    }
}
