<?php

namespace src\models;
use \PDO;
use src\orm\Connector;

class Users
{
    public function findAll():array
    {
        $connect=new Connector();
        $query=$connect->connect()->query('SELECT * FROM Menu', PDO::FETCH_ASSOC);
        var_dump($query->fetchAll());
        return [];

    }
}