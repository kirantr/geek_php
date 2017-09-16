<?php

 class ActiveRecord extends SQL
 {

     protected $stack = array();
     protected $data = array();
//     public $n;

                public function __set($name, $value)
             {
                 echo "Установка '$name' в '$value'\n";
//                 $this->data = $value;
             }

             public function __get($name)
             {
                 echo "Получение '$name'\n";
//                 if (array_key_exists($name, 
//                 $this->data;
//                     ))
                 {
//                     return $this->data[$name];
                 }
             }

//         }

     public function save()
     {
//INSERT
         $objSQL->insert($nameTable, $key)->values('user7', $_POST['text'])->exec();
         $result = mysqli_query($this->dbServer, $query);

//UPDATE
         $objSQL->update($nameTable)->set($data, $_POST['text'])
             ->where('user7', $key)->exec();
     }

     public function getSelect()
     {
//SELECT
$dbServer = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die(mysql_error());
//$query = "SELECT " . 'user7' . " FROM " . NAME_TABLE;
$query = "SELECT  *  FROM   MY_TEST";
         $result = mysqli_query($dbServer, $query);
         var_dump('$result= ', $result);
         while ($row = mysqli_fetch_assoc($result))
         {
             $this->row[] = $row;
         }
         return $this->row;
     }

 }
 
