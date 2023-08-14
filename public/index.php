<?php

declare(strict_types = 1);


require __DIR__ .'/../vendor/autoload.php';
define('VIEWS_PATH',__DIR__.'/../Views');




$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



use App\{App,Router,View,Config,Container};
use App\Controllers\{HomeController};

$container = new Container();
$router = new Router($container);




$router->get('/practice_oop/public/',[HomeController::class, 'index']);



echo '<pre>';
(new App(
    $container,
    $router,
    [
        'requestUri' => $_SERVER['REQUEST_URI'],
        'requestMethod' => $_SERVER['REQUEST_METHOD'],
    ],
    new Config($_ENV)
))->run();


