<?php

namespace src\models;
use \PDO;
use src\orm\Connector;
use src\orm\Insert;

class Main
{
    private $tableName = 'Main';
    public function findAll():array
    {
        $connect=new Connector();
        $query=$connect->connect()->query('SELECT * FROM Menu', PDO::FETCH_ASSOC);
        var_dump($query->fetchAll());
        return [];
    }
    public function insert(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->tableName);
        } catch (\Exception $e) {
            var_dump('Error in insert into in Main model');
            var_dump($e->getMessage());
        }
        return false;
    }
}