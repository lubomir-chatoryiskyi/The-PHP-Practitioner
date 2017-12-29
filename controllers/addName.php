<?php

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

/*
$app['database']->update('users', [
    'name' => $_POST['name']
]);
*/

header('Location: /');
