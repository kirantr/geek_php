<?php

class Mysql extends Sql
{
    protected $dbServer;
            function __construct()
    {
        $this->dbServer = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
        mysql_select_db(DBNAME) or die(mysql_error());
    }

    public function exec()
    {
        parent::exec();
                var_dump($this->quer);
        if (isset($this->query))
        {
            $result = mysql_query($this->query, $this->dbServer);
                var_dump('<br>MySQL= '. $this->quer);
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
