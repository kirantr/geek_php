<?php

class Mysql extends Sql
{

    function __construct()
    {
        $this->db_server = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
        mysql_select_db(DBNAME) or die(mysql_error());
    }

    public function exec()
    {
        parent::exec();
        if (isset($this->query))
        {
            $result = mysql_query($this->query, $this->db_server);
            if (mysql_num_rows($result))
            {
                var_dump($result);
                $this->stack = array();
                while ($row = mysql_fetch_row($result, MYSQL_ASSOC))
                {
                    array_push($this->stack, $row);
                }
//         var_dump($this->stack) ;
                return $this->stack;
            } else
            {
                echo 'FALSE';
            }
        }
    }

    public function __destruct()
    {
        mysql_close($this->db_server);
    }

}

?>