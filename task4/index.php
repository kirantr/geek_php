<?php

include_once './config.php';
include_once 'libs/Sql.php';
include_once 'libs/MySql.php';
//MYSQL
$objMySQL = new MySQL();
//$objMySQL -> check(1);

include_once './templates/tmpl_index.php';
