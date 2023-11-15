<?php

namespace src\orm;

class Select
{
    private $fieldList = '*';
    private $table_name;
    private $condition;
    private $order;
    private $limit;
    private $offset;
    private $connector;

    /**
     * @param string $fieldList
     * @param $table_name
     * @param $condition
     * @param $order
     * @param $limit
     * @param $offset
     */
    public function __construct($table_name ,string $fieldList='*',  $condition = null, $order = null, $limit = null, $offset = null)
    {
        $this->fieldList = $fieldList;
        $this->table_name = $table_name;
        $this->condition = $condition;
        $this->order = $order;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->connector = new Connector();
    }


    public function exec($table_name){
        $this->table_name=$table_name;
        $b=$this->build_sql();
        var_dump($b,77777777777777777777);
        $pdoStatement = $this->connector->connect()->query($b, \PDO::FETCH_ASSOC);
        var_dump($b, 8888888888888888888888888888888888);
        $pdoStatement->execute();
        return $pdoStatement->fetchAll();
    }
    public function build_sql()
    {
        $sql = "SELECT " . $this->fieldList . " FROM " . $this->table_name;

        if (!empty($this->condition)) {
            $sql .= " WHERE " . $this->condition;
        }

        if (!empty($this->order)) {
            $sql .= " ORDER BY " . $this->order;
        }

        if (!empty($this->limit)) {
            $sql .= " LIMIT " . $this->limit;
        }

        if (!empty($this->offset)) {
            $sql .= " OFFSET " . $this->offset;
        }

        return $sql;
    }

}