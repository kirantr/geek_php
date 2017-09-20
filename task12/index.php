<?php

include_once './config.php';
include_once 'libs/Sql.php';
include_once 'libs/MyPDO.php';
// include_once 'libs/MySql.php';
// include_once 'libs/PostgreSQL.php';
//MYSQL
// $objMySQL = new MySQL();
// $objPgSQL = new PostgreSQL();

include_once './templates/tmpl_index.php';

if ($_POST['db'] == 'mysql')
{
    $db = 'mysql';
    $data = "`key`, `data`";
    $key = "`key`";
    $table = NAME_TABLE;
}
elseif ($_POST['db'] == 'pg')
{
    $db = 'pg';
    $data = "key, data";
    $key = "key";
    $table = PG_NAME_TABLE;
}

$objMyPDO = new MyPDO($db);

//SELECT
if ($_POST['flag'] == 'select')
{
    $selectMySQL = $objMyPDO->select($data)->
                    from($table)->where('user7', $key)->exec();
    foreach ($selectMySQL as $value)
    {
        echo
        '<div class="col-md-offset-4 col-md-4 output">'
        . $value['key'] . ' ' . $value['data']
        . "</div>";
    }
}
if (isset($_POST['flag']))
{
    $objMyPDO->flag($_POST['flag']);

//INSERT
    if ($_POST['flag'] == 'insert')
    {
//         if ($_POST['db'] == 'mysql')
//         {
//             $objMySQL->db =  'mysql';
//        $key = "`key`, `data`";
//        $nameTable = NAME_TABLE;
//        $objSQL = $objMySQL;
//         } elseif ($_POST['db'] == 'pg')
//         {
//
//             $key = "key, data";
//             $nameTable = PG_NAME_TABLE;
//             $objSQL = $objPgSQL;
//         }
         $objMyPDO->insert($table, $key)->values('user7', $_POST['text'])->exec();
    }

//DELETE
    if ($_POST['flag'] == 'delete')
    {
        if ($_POST['db'] == 'mysql')
        {
            $key = "`key`";
            $nameTable = NAME_TABLE;
            $objSQL = $objMySQL;
        }
        elseif ($_POST['db'] == 'pg')
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
        }
        elseif ($_POST['db'] == 'pg')
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
// include_once './templates/tmpl_index.php';
