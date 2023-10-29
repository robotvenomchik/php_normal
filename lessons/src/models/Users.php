<?php

namespace src\models;
use \PDO;

class Users
{
    public function findAll():array
    {
        $dsn='mysql:host=localhost;dbname=test_db';
        $a= new PDO($dsn, 'root');
        $b=$a->query('SELECT * FROM Menu', PDO::FETCH_ASSOC);
        var_dump($b->fetchAll());
        return [];

    }
}