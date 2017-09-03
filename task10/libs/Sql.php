<?php

class Sql
{

    private $select;
    private $from;
    private $where;
    private $distinct;


    public function select($key, $data)
    {
        $this->select = ' SELECT ' . $key .' '. $data;
        return $this;
    }

//DISTINCT 
    public function distinct($key, $data)
    {
        $this->distinct = ' DISTINCT ' . $key .' '. $data;
        return $this;
    }
//INNER JOIN 
    public function innerJoin($nameTableB)
    {
        $this->innerJoin = ' INNER JOIN ' . $nameTableB;
        return $this;
    }
//LEFT OUTER JOIN
    public function leftJoin($nameTableB)
    {
        $this->leftJoin = ' LEFT OUTER JOIN ' . $nameTableB;
        return $this;
    }
//RIGHT  OUTER JOIN
    public function rightJoin($nameTableB)
    {
        $this->rightJoin = ' RIGHT OUTER JOIN ' . $nameTableB;
        return $this;
    }
//CROSS JOIN
    public function crossJoin($nameTableB)
    {
        $this->crossJoin = ' CROSS JOIN ' . $nameTableB;
        return $this;
    }
//NATURAL JOIN
    public function naturalJoin($nameTableB)
    {
        $this->naturalJoin = ' NATURAL JOIN ' . $nameTableB;
        return $this;
    }
//ON
    public function on($nameTableA, $nameTableB, $key)
    {
        $this->on = ' ON ' . $nameTableA .'.'. $key .' = '. $nameTableB .'.'. $key;
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

    public function values($key, $data)
    {
        $this->values = " VALUES ('" . $key . "', '" . $data . "')";
        return $this;
    }

//EXEC
    public function exec()
    {

//DISTINCT 
        if (
                !empty($this->select) 
               &&  !empty($this->distinct) 
               &&  !empty($this->from) 
               &&  !empty($this->where)
        )
        {
            $this->query = 
                      $this->select . 
                      $this->distinct
                    . $this->from
                    . $this->where
            ;
            return $this->query;
        }

//INNER JOIN  
        if (
                !empty($this->select) 
                && !empty($this->from)
                &&  !empty($this->innerJoin) 
                && !empty($this->on)
        )
        {
            $this->query = 
                      $this->select
                    . $this->from
                    . $this->innerJoin
                    . $this->on
            ;
            return $this->query;
        }
//LEFT OUTER JOIN
        if (
                !empty($this->select) 
                && !empty($this->from)
                &&  !empty($this->leftJoin) 
                && !empty($this->on)
        )
        {
            $this->query = 
                      $this->select
                    . $this->from
                    . $this->leftJoin
                    . $this->on
            ;
            return $this->query;
        }
    
//RIGHT  OUTER JOIN
        if (
                !empty($this->select) 
                && !empty($this->from)
                &&  !empty($this->rightJoin) 
                && !empty($this->on)
        )
        {
            $this->query = 
                      $this->select
                    . $this->from
                    . $this->rightJoin
                    . $this->on
            ;
            return $this->query;
        }
    
//CROSS JOIN
        if (
                !empty($this->select) 
                && !empty($this->from)
                &&  !empty($this->crossJoin) 
        )
        {
            $this->query = 
                      $this->select
                    . $this->from
                    . $this->crossJoin
            ;
            return $this->query;
        }
    
//NATURAL JOIN
        if (
                !empty($this->select) 
                && !empty($this->from)
                &&  !empty($this->naturalJoin) 
        )
        {
            $this->query = 
                      $this->select
                    . $this->from
                    . $this->naturalJoin
            ;
            return $this->query;
        }
    
        
        
        
    }

}

?>
