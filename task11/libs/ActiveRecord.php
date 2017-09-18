<?php

class ActiveRecord extends SQL
{

    protected $stack = array();
    protected $nameTable;
    protected $data;

    public function __set($name, $value)
    {
        $this->data = $value;
    }

    public function __get($name)
    {
        
    }

    public function getInsert()
    {
//INSERT
        $query = $this->insert(NAME_TABLE, '`key`, `data`')->values('user7', $this->data)->exec();
        $result = mysqli_query($this->dbServer, $query);
    }

    public function getDelete()
    {
//INSERT
        $query = $this->delete()->from(NAME_TABLE)->where('user7', $this->data)->exec();
        $result = mysqli_query($this->dbServer, $query);
    }

    public function getUpdate()
    {
//UPDATE
        $query = $this->update(NAME_TABLE)->set("`data`", $this->data)->where("`key`", 'user7')->exec();
        $result = mysqli_query($this->dbServer, $query);
    }

    public function getSelect()
    {
//SELECT
        $result = mysqli_query($this->dbServer, 
                "SELECT `key`, `data` FROM " . NAME_TABLE . " WHERE `key`='$this->data'");
        /* Selection of query results */
        while ($row = mysqli_fetch_assoc($result))
        {
            array_push($this->stack, $row);
        }
        return $this->stack;

        /* clear the result set */
        mysqli_free_result($result);
    }

    public function getFind()
    {
//FIND
        $result = mysqli_query($this->dbServer,
                "SELECT `key`, `data` FROM " . NAME_TABLE . " WHERE `data`='$this->data'");
        /* Selection of query results */
        while ($row = mysqli_fetch_assoc($result))
        {
            array_push($this->stack, $row);
        }
        return $this->stack;

        /* clear the result set */
        mysqli_free_result($result);
    }

}
