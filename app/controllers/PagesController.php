<?php

namespace App\Controllers;

use App\Core\Helper;

class PagesController
{

    public function home()
    {
        $data = [
            'title' => 'Home Page',
            'text' => 'Home Page text'
        ];

        return Helper::view('staticPage', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us Page',
            'text' => 'About us text'
        ];

        return Helper::view('staticPage', $data);
    }

    public function contacts()
    {
        $data = [
            'title' => 'Contact Us Page',
            'text' => 'Contact us text'
        ];

        return Helper::view('staticPage', $data);
    }

    public function notFound()
    {
        return Helper::view('404');
    }

}