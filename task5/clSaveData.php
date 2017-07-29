<?php
include_once"iworkdata.php"
class clSaveData implements iWorkData
{
 public function setSaveData($key, $val)
 {
  if ()
  {
     $_SESSION["$key"]= $val;
   }
 }
 public function getSaveData()
 {
  return $this->key;
}

?>
