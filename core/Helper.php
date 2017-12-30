<?php

class Helper
{
    public static function view($name, $data = [])
    {
        extract($data);
        return require "views/{$name}.view.php";
    }
}