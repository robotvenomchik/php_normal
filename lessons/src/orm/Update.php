<?php

namespace src\orm;

class Update
{
    private $connector;

    /**
     * @param Connector $connector
     */
    public function __construct()
    {
        $this->connector = new Connector();
    }
    public function exec(array $data, string $table_name, string $condition)
    {
        $updated = [];

        foreach ($data as $key => $value) {
            $value= "'" . $value . "'";
            $updated[] = $key . '=' . $value;
        }

        $query = $this->build_sql(implode(',', $updated), $table_name, $condition);
        var_dump($query);
        return $this->connector->connect()->exec($query);
    }
    private function build_sql( $data , $table_name, $condition): string
    {
        return 'UPDATE ' . $table_name .' SET '. $data . ' ' . $condition;
    }


}