<?php

namespace src\orm;

class Insert
{
    private $connector;

    /**
     * @param Connector $connector
     */
    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(array $data, string $table_name)
    {
        $columns = $values = [];
        foreach ($data as $key => $value) {
            $columns[] = $key;
            $values[] = $value;
        }
        $query = $this->build_sql(implode(',', $columns), $this->prepare_values($values), $table_name);
        var_dump($query);
        return $this->connector->connect()->exec($query);
    }
    private function build_sql($columns, $values, $table_name): string
    {
        return 'INSERT INTO ' . $table_name .' (' .  $columns . ') VALUES (' . $values . ')';
    }

    private function prepare_values(array $values): string
    {
        $temp = [];
        foreach ($values as $value) {
            if (!is_int($value)) {
                $temp[] = "'" . $value . "'";
            } else {
                $temp[] = $value;
            }
        }
        return implode(',', $temp);
    }

}