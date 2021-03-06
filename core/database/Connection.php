<?php

namespace App\Core\Database;

use \PDO;
use \PDOException;

class Connection {

    public static function make($config) {
        try {
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['name']}",
                $config['user'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}