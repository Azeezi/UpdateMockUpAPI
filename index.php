<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Interop\Container\ContainerInterface as ContainerInterface;
use OpenApi\Serializer;

require 'vendor/autoload.php';

require 'src/settings.php';

$app = new \Slim\App(['settings' => $settings]);

require 'src/dependencies.php';

require 'src/App/Routes/base.php'; 

$app->get('/docs', function () use ($app) {
    require $_SERVER['DOCUMENT_ROOT'].'/src/App/documentation/index.php';
});


$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
    });
    
    $app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
             ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Credentials', 'true')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, token')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    });


$app->run();

