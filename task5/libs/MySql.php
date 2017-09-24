<?php

class MySql implements iWorkData
{

    protected $dbServer;
    protected $stack = array();

    function __construct()
    {
        $this->dbServer = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if (mysqli_connect_errno())
        {
            printf(NOT_CONNECT, $mysqli->connect_error);
            exit();
        }
    }
    
//SELECT
    public function getData($key)
    {
        $query = "SELECT `key`, `data` FROM " . NAME_TABLE . " WHERE `key`='$key'";
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
        $query = "INSERT INTO " . NAME_TABLE . " ($key) VALUES ('user7', '" . $data . "')";
        $result = mysqli_query($this->dbServer, $query);
    }

//DELETE    
    public function deleteData($key)
    {
        $query = "DELETE FROM ". NAME_TABLE ." WHERE `key`=" . $key;
//        var_dump($query);
        $result = mysqli_query($this->dbServer, $query);
    }
}

?>
