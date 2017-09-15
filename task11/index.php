<?php

 include_once './config.php';
 include_once 'libs/Sql.php';
 include_once 'libs/MyTest.php';
 include_once 'libs/ActiveRecord.php';
//MYSQL
 $objMySQL = new MyTest();
 $objAR = new ActiveRecord();

 include_once './templates/tmpl_index.php';
//               echo $objAR->getSelect();

 if (isset($_POST['flag']))
 {
     $objMySQL->flag($_POST['flag']);

//INSERT
     if ($_POST['flag'] == 'insert')
     {
         if ($_POST['db'] == 'mysql')
         {
             $key = "`key`, `data`";
             $nameTable = NAME_TABLE;
             $objSQL = $objMySQL;
         } elseif ($_POST['db'] == 'pg')
         {

             $key = "key, data";
             $nameTable = PG_NAME_TABLE;
             $objSQL = $objPgSQL;
         }
         $objSQL->insert($nameTable, $key)->values('user7', $_POST['text'])->exec();
     }

//DELETE
     if ($_POST['flag'] == 'delete')
     {
         if ($_POST['db'] == 'mysql')
         {
             $key = "`key`";
             $nameTable = NAME_TABLE;
             $objSQL = $objMySQL;
         } elseif ($_POST['db'] == 'pg')
         {

             $key = "key";
             $nameTable = PG_NAME_TABLE;
             $objSQL = $objPgSQL;
         }
         $objSQL->delete()->from($nameTable)->where('user7', $key)->exec();
     }
//UPDATE
     if ($_POST['flag'] == 'update')
     {
         if ($_POST['db'] == 'mysql')
         {
             $key = "`key`";
             $data = "`data`";
             $nameTable = NAME_TABLE;
             $objSQL = $objMySQL;
         } elseif ($_POST['db'] == 'pg')
         {

             $key = "key";
             $data = "data";
             $nameTable = PG_NAME_TABLE;
             $objSQL = $objPgSQL;
         }

         $objSQL->update($nameTable)->set($data, $_POST['text'])
             ->where('user7', $key)->exec();
     }
 }
