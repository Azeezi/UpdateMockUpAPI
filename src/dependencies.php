<?php
use Illuminate\Container\Container;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Illuminate\Database\Capsule\Manager as Capsule;
use Tuupola\Middleware\HttpBasicAuthentication;

$container = $app->getContainer();

$container['logger'] = function($c) {
    $logger = new Logger('my_logger');
    $file_handler = new StreamHandler('../logs/app.log', Logger::DEBUG);
    $logger->pushHandler($file_handler);
    return $logger;
};


//$capsule = new illuminate\database\Capsule\Manager;
$capsule = new Capsule;
$capsule->addConnection($container['settings']['db']);

$capsule->setAsGlobal();
$capsule->bootEloquent();

// $tokensettings['api_auth'] = [
//     'header' => [
//        'Authorization-Key' => 'secret',
//        'Client-Key' => 'password',
//    ],
// ];

// return [

//     // ...
    
//     HttpBasicAuthentication::class => function ( $c) {
//         return new HttpBasicAuthentication($c->get('tokensettings')['api_auth']);
//     },
// ];

$container['ActionController'] = function($c) {
    return new \Mock\Controllers\ActionController($c);
};


// $container['renderer'] = function ($c) {
//     $settings = $c->get('settings')['renderer'];
//     return new Slim\Views\PhpRenderer($settings['/Capex/src/templates/swagger/index.php']);
// };
