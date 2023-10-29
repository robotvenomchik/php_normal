<?php

namespace src\models;
use \PDO;
class Gallery
{
    public function findAll():array
    {
        $dsn='mysql:host=localhost;dbname=test_db';
        $a= new PDO($dsn, 'root');
        $b=$a->query('SELECT * FROM Gallery', PDO::FETCH_ASSOC);
        var_dump($b->fetchAll());
        return [];
    }
}