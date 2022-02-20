<?php

use app\controllers\MainController;
use speedweb\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

ini_set('display_errors', 1);

$app = new Application(dirname(__DIR__), get_config());

##Routers
$app->router->get('/', [MainController::class, 'home']);
##Routers

$app->run();