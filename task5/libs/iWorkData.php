<?php
interface iWorkData
{
	public function getData ($key);
	public function saveData($key, $val);
	public function deleteData($key);
}

?>
