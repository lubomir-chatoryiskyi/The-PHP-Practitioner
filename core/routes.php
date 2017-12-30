<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contacts', 'PagesController@contacts');
$router->get('404', 'PagesController@notFound');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@addUser');