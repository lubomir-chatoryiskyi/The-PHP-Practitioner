<?php

namespace App\Core\Database;

use \PDO;
use \PDOException;

class QueryBuilder {

    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $params)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($params)),
            ':' . implode(', :', array_keys($params))
        );

        try {
            $this->pdo->prepare($sql)->execute($params);
        } catch (PDOException $e) {
            die($e->getMessage()); // Dev
            // die('Something went wrong!'); //Prod
        }

    }

    public function update($table, $params)
    {
        $sql = sprintf(
            'UPDATE %s SET name=%s WHERE id=%s',
            $table,
            ':name',
            '2'
        );

        $statement = $this->pdo->prepare($sql);

        $statement->execute($params);
    }

}