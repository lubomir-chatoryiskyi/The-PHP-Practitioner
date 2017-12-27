<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contacts', 'controllers/contacts.php');
$router->get('404', 'controllers/404.php');
$router->post('names', 'controllers/addName.php');