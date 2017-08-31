<?php

class Sql
{

    private $select;
    private $from;
    private $where;

    public function flag($flag)
    {
        $this->flag = $flag;
        var_dump('<br>flag Sql= '. $flag);
        return $this;
    }


    public function select($select)
    {
        $this->select = 'SELECT ' . $select;
        return $this;
    }

    public function from($table)
    {
        $this->from = ' FROM ' . $table;
        return $this;
    }

    public function where($value, $key)
    {
        $this->where = " WHERE $key=" . "'" . $value . "'";
        return $this;
    }

    public function insert($table, $data)
    {
        $this->insert = "INSERT INTO " . "$table  ($data)";
       var_dump($this->insert) ;
        return $this;
    }

    public function values($key, $data)
    {
        $this->values = " VALUES ('" . $key . "', '" . $data . "')";
       var_dump($this->values) ;
        return $this;
    }
//DELETE

    public function delete()
    {
        $this->delete = "DELETE ";
        return $this;
    }

//UPDATE
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

    //EXEC
    public function exec()
    {
//SELECT
        if (
                !empty($this->select) 
                && !empty($this->from) 
                && !empty($this->where) 
                && $this->flag == "select"
        )
        {
            $this->query = $this->select . $this->from . $this->where;
             var_dump('<br>SQL= '. $this->query) ;
            return $this->query;
        } else
        {
        }

//INSERT
        if (
                !empty($this->insert) 
                && !empty($this->values)
                && $this->flag == "insert"
                )
        {
            $this->query = $this->insert . $this->values;
            var_dump('<br>SQL= '. $this->query) ;
            return $this->query;
        }

//DELETE
        if (
                !empty($this->delete) 
                && !empty($this->from) 
                && !empty($this->where)
                && $this->flag == "delete"
        )
        {
            $this->query = $this->delete . $this->from . $this->where;
//             var_dump($this->query) ;
            return $this->query;
        }

//UPDATE
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
