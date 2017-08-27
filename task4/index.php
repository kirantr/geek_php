<?php

include_once './config.php';
include_once 'libs/Sql.php';
include_once 'libs/MySql.php';
//MYSQL
$objMySQL = new MySQL();
//$objMySQL -> check(1);

//INSERT  MySQL
//$insertMySQL = $objMySQL->insert(NAME_TABLE, "`key`, `data`")->values('user7', 'value_user7_add')->exec();

//DELETE
//$deletMySQL = $objMySQL->delete()->from(NAME_TABLE)->where('user8', "`key`")->exec();

//UPDATE
$updateMySQL = $objMySQL->update(NAME_TABLE)->set('`data`', 'Update data')
                ->where('user7', "`key`")->exec();

include_once './templates/tmpl_index.php';
