<?php

namespace App\Controllers;

use App\Core\{App, Helper};
use App\Core\Router;

class UsersController
{
    public function index()
    {

        $users = App::get('database')->selectAll('users');

        return Helper::view('users', compact('users'));
    }

    public function addUser() {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);
        Router::redirect('users');
    }
}