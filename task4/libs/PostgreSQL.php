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
                var_dump($this->query);
        parent::exec();
        if (isset($this->query))
        {
            $result = pg_query($this->query);
                var_dump('<br>PgSQL= '. $result);
            if (!is_bool($result))
            {
//                var_dump($result);
                $this->stack = array();
                while ($row = pg_fetch_row($result))
                {
                    array_push($this->stack, $row);
                }
//         var_dump($this->stack) ;
                return $this->stack;
            } 
        }
    }

//    public function __destruct()
//    {
//        pg_close($this->dbServer);
//    }

}

?>
