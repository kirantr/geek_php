<?php

 class Mysql extends Sql
 {

     public $pdo;

     public function exec()
    {
        $sql = parent::exec();
        $result = $this->pdo->query($sql, PDO::FETCH_ASSOC);
        var_dump('<br> $result= ', $result);
        if (!is_bool($result))
        {
            $stack = array();
            foreach ($result as $row)
            {
                array_push($stack, $row);
            }
            return $stack;
        }
    }
    
//     function __construct()
//     {
//         $this->dbServer = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
//         mysql_select_db(DBNAME) or die(mysql_error());
//     }
//
//     public function exec()
//     {
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
//     }
//
//     public function __destruct()
//     {
//         mysql_close($this->dbServer);
//     }

 }

?>
