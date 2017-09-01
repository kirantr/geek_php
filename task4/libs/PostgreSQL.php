<?php

 class PostgreSQL extends Sql
 {

     protected $dbServerPg;

     function __construct()
     {
         $this->dbServerPg = pg_connect(PG_SERVER) or die(pg_last_error());
     }

     public function exec()
     {
         parent::exec();
         if (isset($this->query))
         {
             $result = pg_query($this->query);
             if (!is_bool($result))
             {
                 $this->stack = array();
                 while ($row = pg_fetch_array($result))
                 {
                     array_push($this->stack, $row);
                 }
                 return $this->stack;
             }
         }
     }

    public function __destruct()
    {
        pg_close($this->dbServer);
    }
 }

?>
