<?php

namespace src\models;
use \PDO;
use src\orm\Connector;
use src\orm\Insert;

class Gallery
{
    private $tableName = 'Gallery';
    public function findAll():array
    {
        $connect=new Connector();
        $query=$connect->connect()->query('SELECT * FROM Gallery', PDO::FETCH_ASSOC);
        var_dump($query->fetchAll());
        return [];
    }
    public function insert(array $data): bool
    {
        try {
            $insert = new Insert();
            return $insert->exec($data, $this->tableName);
        } catch (\Exception $e) {
            var_dump('Error in insert into in Gallery model');
            var_dump($e->getMessage());
        }
        return false;
    }

}