<?php

  include_once 'libs/config.php';
  include_once 'libs/Sql.php';
  include_once 'libs/MySql.php';
  
//MYSQL
    $objMySQL = new MySQL();
    
//SELECT
    $selectMySQL = $objMySQL->select("`key`")->from(NAME_TABLE)->where('user7', NAME_TABLE)->exec();

             echo '1';

  include_once './templates/tmpl_index.php';
