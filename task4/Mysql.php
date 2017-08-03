require_once "constants.php";

$db_server = mysql_connect(DBHOST, DBUSER, DBPASS) or die(mysql_error());
mysql_select_db(DBNAME) or die(mysql_error());

class Mysql extended Sql
{
  public function setMmysqlHost(DBHOST, DBUSER, DBPASS)
  {
  
  }
}
