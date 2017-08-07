<?php

 class Sql
 {

     private $select;
     private $from;
     private $where;

     public function setSelect($select)
     {
         $this->name = 'SELECT' . $select;
         return $this;
     }

     public function setFrom($from)
     {
         $this->name = 'FROM' . $from;
         return $this;
     }

     public function setWhere($where)
     {
         $this->name = 'WHERE' . $where;
         return $this;
     }

 }

 $db = new Sql();
 $db->setSelect('*')->setFrom('admin1')->setWhere('key=user7')->exec();

 
 ?>
