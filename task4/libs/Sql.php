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
			 if ($tableName == PG_TB_NAME)
			 {
				  $key = "key";
			 } else
			 {
				  $key = "`key`";
			 }
			 $this->where = " WHERE $key=" . "'" . $val . "'";
			 return $this;
		}

		public function insert($table)
		{
			 if ($table == PG_TB_NAME)
			 {
				  $keyData = '(key, data)';
			 } 
			 else
			 {
				  $keyData = '(`key`, `data`)';
			 }
			 $this->insert = "INSERT INTO " . $table . $keyData;
		}

		public function exec()
		{
			 if (
				!empty($this->select) && !empty($this->from) && !empty($this->where)
			 )
			 {
				  $this->query = $this->select . $this->from . $this->where;
				  return $this->query;
			 } else
			 {
//				  return NO_PROPERTIES;
			 }
		}

  }

?>
