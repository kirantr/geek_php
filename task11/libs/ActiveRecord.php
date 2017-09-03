<?php

class ActiveRecord extends SQL
{

    protected $connectProp;
    protected $stack = array();
    protected $dataRow = array();

    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->stack))
        {
            $this->stack[$name] = $value;
            return true;
        }
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->stack))
        {
            return $this->stack[$name];
        }
    }

    public function save()
    {
//INSERT
         $objSQL->insert($nameTable, $key)->values('user7', $_POST['text'])->exec();
             $result = mysqli_query($this->dbServer, $query);

//UPDATE
         $objSQL->update($nameTable)->set($data, $_POST['text'])
             ->where('user7', $key)->exec();
        
    }

}
