<?php

class PostgreSQL implements iWorkData
{

    protected $dbServerPg;
    protected $stack = array();

    function __construct()
    {
        $this->dbServerPg = pg_connect(PG_SERVER)
                or die(pg_last_error());
    }

//SELECT
    public function getData($key)
    {
        $query = 'SELECT key, data FROM ' . PG_NAME_TABLE . " WHERE key='$key'";
//         $query = 'SELECT key, data FROM ' . '"' . PG_NAME_TABLE . '"' . " WHERE key='$key'";
       $result = pg_query($this->dbServerPg, $query);
        while ($row = pg_fetch_array($result))
        {
            array_push($this->stack, $row);
        }
        return $this->stack;
    }

//INSERT
    public function saveData($key, $data)
    {
        $query = "INSERT INTO " . PG_NAME_TABLE . " ($key) VALUES ('user7', '" . $data . "')";
//         $query = "INSERT INTO " . '"' . PG_NAME_TABLE . '"' . " ($key) VALUES ('user7', '" . $data . "')";
       $result = pg_query($this->dbServerPg, $query);
        return SAVE_OK;
    }

//DELETE    
    public function deleteData($key)
    {
        $query = "DELETE FROM " . PG_NAME_TABLE . " WHERE key= '$key'";
//        $query = "DELETE FROM " . '"' . PG_NAME_TABLE . '"' . " WHERE key= '$key'";
//        var_dump($query);
        $result = pg_query($this->dbServerPg, $query);
        return DELETE_OK;
    }

    public function __destruct()
    {
        pg_close($this->dbServerPg);
    }

}

?>
