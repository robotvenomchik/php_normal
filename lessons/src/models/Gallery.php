<?php

namespace src\models;
use \PDO;
use src\orm\Connector;
use src\orm\Delete;
use src\orm\Insert;
use src\orm\Select;
use src\orm\Update;
use src\orm\Where;

class Gallery
{
    private $tableName = 'Gallery';
    public function findAll():array
    {
        try {
            $select= new Select();
            return $select->exec($this->tableName);
        }catch (\Exception $exception){
            var_dump('Error in select in Gallery model');
            var_dump($exception->getMessage());
        }
        return false;
    }
    public function findOne(int $id):array
    {
        $connect=new Connector();
        $query=$connect->connect()->query('SELECT * FROM Gallery WHERE id=' . $id, PDO::FETCH_ASSOC);
        return $query->fetchAll();
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
    public function update(array $data, $condition): bool{
        try {
            $update=new Update();
            return $update->exec($data, $this->tableName, Where::andWhere( [ ['id',$condition,'='] ] ) );
        }catch (\Exception $exception){
            var_dump('Error in update in Gallery model');
            var_dump($exception->getMessage());
        }
        return false;

    }
    public function select(array $data, $condition):bool{
        try {
            $select= new Select();
            return $select->exec($this->tableName);
        }catch (\Exception $exception){
            var_dump('Error in select in Gallery model');
            var_dump($exception->getMessage());
        }
        return false;
    }
    public function delete($condition):bool{
        try {
            $delete=new Delete();
            return $delete->exec($this->tableName, Where::andWhere( [ ['id',$condition,'='] ] ) );

        }catch (\Exception $exception){
            var_dump('Error in delete in Gallery model');
            var_dump($exception->getMessage());
        }
        return false;
    }

}