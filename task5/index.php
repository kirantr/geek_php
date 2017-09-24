<?php

include_once './config.php';
include_once 'libs/iWorkData.php';
include_once 'libs/MySql.php';
 include_once 'libs/PostgreSQL.php';

 $objMySQL = new MySQL();
 $objPgSQL = new PostgreSQL();

include_once './templates/tmpl_index.php';

if (isset($_POST['flag']))
{
//     $objMySQL->flag($_POST['flag']);

//SAVE_DATA

    if ($_POST['flag'] == 'insert' && isset($_POST['text']))
    {
        if ($_POST['db'] == 'mysql')
        {
            $key = "`key`, `data`";
                $data = $_POST['text'];
//             $nameTable = NAME_TABLE;
             $objSQL = $objMySQL;
//         } elseif ($_POST['db'] == 'pg')
//         {
//
//             $key = "key, data";
//             $nameTable = PG_NAME_TABLE;
//             $objSQL = $objPgSQL;
        }
        $objSQL->saveData($key, $data);
    }

////DELETE
     if ($_POST['flag'] == 'delete')
     {
         if ($_POST['db'] == 'mysql')
         {
//             $key = "`key`";
//             $nameTable = NAME_TABLE;
             $objSQL = $objMySQL;
//         } elseif ($_POST['db'] == 'pg')
//         {
//
//             $key = "key";
//             $nameTable = PG_NAME_TABLE;
//             $objSQL = $objPgSQL;
         }
            $key = "'user7'";
         $objSQL->deleteData($key);
     }
}
