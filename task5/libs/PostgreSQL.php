<?php

class PostgreSQL implements iWorkData
{

    public $dbServerPg;
    protected $stack = array();

    function __construct()
    {
         $this->dbServerPg = pg_connect(PG_SERVER) or die(pg_last_error());
    }

//SELECT
    public function getData($key)
    {
        $query = "SELECT key, data FROM " . PG_NAME_TABLE . " WHERE key='$key'";
        $result = mysqli_query($this->dbServer, $query);
        /* Selection of query results */
        while ($row = mysqli_fetch_assoc($result))
        {
            array_push($this->stack, $row);
        }
        return $this->stack;

        /* clear the result set */
        mysqli_free_result($result);
    }

//INSERT
    public function saveData($key, $data)
    {
        $query = "INSERT INTO " . PG_NAME_TABLE . " ($key) VALUES ('user7', '" . $data . "')";
        $result = mysqli_query($this->dbServer, $query);
    }

//DELETE    
        public function deleteData($key)
    {
        $query = "DELETE FROM ". PG_NAME_TABLE ." WHERE `key`=" . $key;
        var_dump($query);
        $result = mysqli_query($this->dbServer, $query);
    }

}

?>
