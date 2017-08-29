<?php

class PostgreSQL extends Sql
{
    protected $dbServerPg;
            function __construct()
    {
        $this->dbServerPg = pg_connect(PG_SERVER) or die(pg_last_error());
    }

    public function exec()
    {
        parent::exec();
        if (isset($this->query))
        {
            $result = pg_query($this->dbServerPg, $this->query);
//                var_dump($result);
            if (!is_bool($result))
            {
//                var_dump($result);
                $this->stack = array();
                while ($row = mysql_fetch_row($result, MYSQL_ASSOC))
                {
                    array_push($this->stack, $row);
                }
//         var_dump($this->stack) ;
                return $this->stack;
            } 
        }
    }

    public function __destruct()
    {
        mysql_close($this->dbServer);
    }

}

?>