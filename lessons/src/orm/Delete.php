<?php

namespace src\orm;

class Delete
{
    private $connector;

    /**
     * @param Connector $connector
     */
    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(string $table_name, string $condition)
    {
        $query = $this->build_sql($table_name, $condition);
        var_dump($query);
        return $this->connector->connect()->exec($query);
    }
    private function build_sql($table_name, $condition): string
    {
        return 'DELETE FROM ' . $table_name . ' ' . $condition;
    }
}