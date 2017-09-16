<?php

 class MyTest extends Sql
 {

     public $dbServer;

     function __construct()
     {
         $this->dbServer = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die(mysql_error());
//         mysql_select_db(DBNAME) or die(mysql_error());
     }

     public function exec()
     {
//         parent::exec();
//         if (isset($this->query))
//         {
//             $result = mysql_query($this->query, $this->dbServer);
//             if (!is_bool($result))
//             {
//                 $this->stack = array();
//                 while ($row = mysql_fetch_row($result, MYSQL_ASSOC))
//                 {
//                     array_push($this->stack, $row);
//                 }
//                 return $this->stack;
//             }
//         }
     }

//     public function __destruct()
//     {
//         mysql_close($this->dbServer);
//     }

 }

?>
