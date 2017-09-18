<?php

 class MyTest extends ActiveRecord
 {

     public $dbServer;

     function __construct()
     {
        $this->dbServer = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if (mysqli_connect_errno())
        {
            printf(NOT_CONNECT, $mysqli->connect_error);
            exit();
        }
                 $this->nameTable=NAME_TABLE;

     }
 }

?>
