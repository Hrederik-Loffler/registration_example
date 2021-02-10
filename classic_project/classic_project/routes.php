<?php

use Core\Router;

$router = new Router();

$router->get('', 'Controllers\PagesController@main');
$router->get('users', 'Controllers\UsersController@index');
$router->get('main', 'Controllers\PagesController@main');
$router->post('main', 'Controllers\UsersController@add');
$router->post('', 'Controllers\UsersController@add');
