<?php


 class Mysql extends Sql
 {

     function __construct()
     {
         $this->db_server = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
     }

     public function exec()
     {
         $result = mysql_query($this->query, $this->db_server);
         $this->stack = array();
         while ($row = mysql_fetch_row($result, MYSQL_ASSOC))
         {
             array_push($this->stack, $row);
         }
//         print_r($this->stack) ;
         return $this->stack;
     }

     public function __destruct()
     {
         mysql_close($this->db_server);
     }

 }

?>