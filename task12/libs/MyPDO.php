<?php

class MyPDO extends Sql
{

    public $pdo;

    public function __construct($db)
    {
        try
        {
        if ('mysql' == $db)
        {
            $this->pdo = new PDO(DBDNS, DBUSER, DBPASS);
        }
        elseif ('pg' == $db)
        {
            $this->pdo = new PDO(PG_DNS);
        }
        } catch (PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
