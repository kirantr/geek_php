<?php

 class Sql
 {

     private $select;
     private $from;
     private $where;

     public function select($select)
     {
         $this->select = 'SELECT' . $select;
         return $this;
     }

     public function from($table)
     {
         $this->name = 'FROM' . $table;
         return $this;
     }

     public function where($where, $val)
     {
         if ($tableName == NAME_TABLE)
         {
             $key = "key";
         } 
         else
         {
             $key = "`key`";
         }
         $this->where = " WHERE $key=" . "'" . $val . "'";
         return $this;
     }

     public function insert($table)
     {
         if ($table == NAME_TABLE)
         {
             $keyData = '(key, data)';
         } 
         else
         {
             $keyData = '(`key`, `data`)';
         }
         $this->insert = "INSERT INTO " . $table . $keyData;
     }

     public function values($key, $data)
     {
         $this->values = " VALUES ('" . $key . "', '" . $data . "')";
         return $this;
     }

     public function exec()
     {
         if (
             !empty($this->select) && !empty($this->from) && !empty($this->where)
         )
         {
             $this->query = $this->select . $this->from . $this->where;
             return $this->query;
//             print_r($this->query) ;
         } 
         else
         {
//				  return NO_PROPERTIES;
         }
     }

 }

?>
