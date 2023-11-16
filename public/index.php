<?php

require "./../vendor/autoload.php";

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Rotas
$app->get('/users', '\Money\Controllers\ApiController:getAllUsers');
$app->get('/users/{id}', '\MoneyProject\Controllers\ApiController:getUser');
$app->post('/users', '\MoneyProject\Controllers\ApiController:createUser');
$app->put('/users/{id}', '\MoneyProject\Controllers\ApiController:updateUser');
$app->delete('/users/{id}', '\MoneyProject\Controllers\ApiController:deleteUser');

$app->run();