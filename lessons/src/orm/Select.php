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


    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function setFieldList(string $fieldList='*'): void
    {
        $this->fieldList = $fieldList;
    }

    /**
     * @param mixed $table_name
     */
    public function setTableName($table_name): void
    {
        $this->table_name = $table_name;
    }

    /**
     * @param mixed $condition
     */
    public function setCondition($condition): void
    {
        $this->condition = $condition;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order): void
    {
        $this->order = $order;
    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param mixed $offset
     */
    public function setOffset($offset): void
    {
        $this->offset = $offset;
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