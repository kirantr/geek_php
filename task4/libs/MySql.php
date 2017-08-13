<?php
require_once "constants.php";
require_once "Sql.php";

class Mysql extends Sql
{
 function __construct() {
	  $this->db_server = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
    }
    
    function result(){
       $result = mysql_query($query);
       return $result;
    }
}

$objMySql = new Mysql();

$db->exec();

?>