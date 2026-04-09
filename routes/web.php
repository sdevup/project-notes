<?php

use Framework\Router\Router;

$router = new Router();

$router->get('/home', 'HomeController@index');
$router->get('/tarefas', 'TarefasController@index');
$router->get('/test', 'TestController@test'); //PedroDev

$router->get('/test2', 'TestController@test'); //sdev

# Rotas adicionais

$router->get('/', 'HomeController@home');
$router->get('/login', 'LoginController@login');
$router->get('/principal', 'PrincipalController@principal');
    

return $router;
