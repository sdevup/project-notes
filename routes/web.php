<?php

use Framework\Router\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/tarefas', 'TarefasController@index');

return $router;
