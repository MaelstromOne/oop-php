<?php

namespace classes;

use classes\traits\TSingleton;
use PDO;

class Db
{
    use TSingleton;

    private $pdo;

    public function __construct($dsn, $user, $pass, $opt)
    {
        $this->pdo = new PDO($dsn, $user, $pass, $opt);
    }

    public function select($query): array
    {
        $array = [];
        $stmt = $this->pdo->query($query);
        while ($row = $stmt->fetch()) {
            $array[] = $row;
        }
        return $array;
    }

    public function insert($query): bool
    {
        try {
            $query = $this->pdo->prepare($query);
            return $query->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($query): bool
    {
        try {
            $query = $this->pdo->prepare($query);
            return $query->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($query): bool
    {
        try {
            $query = $this->pdo->prepare($query);
            return $query->execute();
        } catch (PDOException $e) {
            return false;
        }
    }

}