<?php

class MyPDO extends Sql
{

    protected $pdo;

    public function __construct($db)
    {
//        try
//        {
        if ('mysql' == $db)
        {
            $this->pdo = new PDO(DBDNS, DBUSER, DBPASS);
        }
        elseif ('pg')
        {
            $this->pdo = new PDO(PG_DNS);
        }
//        } catch (PDOException $e)
//        {
//            print "Error!: " . $e->getMessage() . "<br/>";
//            die();
//        }
    }

    public function exec()
    {
        $sql = parent::exec();
        $result = $this->pdo->query($sql, PDO::FETCH_ASSOC);
        var_dump('<br> $result= ', $result);
        if (!is_bool($result))
        {
            $stack = array();
            foreach ($result as $row)
            {
                array_push($stack, $row);
            }
            return $stack;
        }
    }

}
