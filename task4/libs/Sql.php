<?php

class Sql
{

    private $select;
    private $from;
    private $where;

    public function flag($flag)
    {
        $this->flag = $flag;
        var_dump($flag);
        return $this;
    }

    public function select($select)
    {
        $this->select = 'SELECT' . $select;
        return $this;
    }

    public function from($table)
    {
        $this->from = 'FROM ' . $table;
        return $this;
    }

    public function where($value, $key)
    {
        $this->where = " WHERE $key=" . "'" . $value . "'";
        return $this;
    }

    public function insert($table, $data)
    {
//        if ($table == NAME_TABLE) {
//            $keyData = '(key, data)';
//        } else {
//            $keyData = '(`key`, `data`)';
//        }
        $this->insert = "INSERT INTO " . "$table  ($data)";
        return $this;
    }

    public function values($key, $data)
    {
        $this->values = " VALUES ('" . $key . "', '" . $data . "')";
        return $this;
    }

    public function delete()
    {
        $this->delete = "DELETE ";
        return $this;
    }

    public function update($table)
    {
        $this->update = "UPDATE " . $table;
        return $this;
    }

    public function set($data, $value)
    {
        $this->set = " SET " . $data . "='" . $value . "'";
        return $this;
    }

    public function exec()
    {
        if (
                !empty($this->select) 
                && !empty($this->from) 
                && !empty($this->where) 
                && $this->flag == "select"
        )
        {
            $this->query = $this->select . $this->from . $this->where;
//             var_dump($this->query) ;
            return $this->query;
        } else
        {
//            echo 'NO_EXEC';
//            return NO_EXEC;
        }

        if ((!empty($this->insert)) 
                && (!empty($this->values)))
        {
//            $this->query = $this->insert . $this->values;
//            return $this->query;
        }

        if (
                !empty($this->delete) 
                && !empty($this->from) 
                && !empty($this->where)
        )
        {
//            $this->query = $this->delete . $this->from . $this->where;
//             var_dump($this->query) ;
//            return $this->query;
        }

        if (
                !empty($this->update) 
                && !empty($this->set) 
                && !empty($this->where)
                && $this->flag == "update"
        )
        {

            $this->query = $this->update . $this->set . $this->where;
//             var_dump($this->query) ;
            return $this->query;
        }
    }

}

?>
