<?php

include_once './config.php';
include_once 'libs/Sql.php';
include_once 'libs/MySql.php';
include_once 'libs/PostgreSQL.php';
//MYSQL
$objMySQL = new MySQL();
$objPgSQL = new PostgreSQL();

include_once './templates/tmpl_index.php';
