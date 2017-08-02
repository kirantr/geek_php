<?php
class Sql
{
  privat $select;
  privat $from;
  privat $where;
  
  
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
$db -> setSelect() -> setFrom() -> setWhere() -> exec();
?>
