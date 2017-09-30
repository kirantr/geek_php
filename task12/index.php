<?php

include_once './config.php';
include_once 'libs/Sql.php';
include_once 'libs/MyPDO.php';
include_once 'libs/MySql.php';
include_once 'libs/PostgreSQL.php';

if (isset($_POST['db']) && isset($_POST['flag']))
{
    $flag = $_POST['flag'];
    if ($_POST['db'] == 'mysql')
    {
        $db = 'mysql';
    }
    elseif ($_POST['db'] == 'pg')
    {
        $db = 'pg';
    }

    $objMyPDO = new MyPDO($db);

    if ($_POST['db'] == 'mysql')
    {
        $objMySQL = new MySQL();
        $objMySQL->pdo = $objMyPDO->pdo;
        $objMyPDO = $objMySQL;
        $keyData = "`key`, `data`";
        $key = "`key`";
        $data = "`data`";
        $table = NAME_TABLE;
    }
    elseif ($_POST['db'] == 'pg')
    {
        $objPgSQL = new PostgreSQL();
        $objPgSQL->pdo = $objMyPDO->pdo;
        $objMyPDO = $objPgSQL;
        $keyData = 'key, data';
        $key = 'key';
        $data = 'data';
        $table = PG_NAME_TABLE;
    }
//SELECT
    if ($flag == 'select')
    {
        $objMyPDO->flag = 'select';
        $selectMyPDO = $objMyPDO->select($keyData)->
                        from($table)->where("user7", $key)->exec();
    }
    if (isset($_POST['flag']))
    {
        $objMyPDO->flag($_POST['flag']);

//INSERT
        if ($flag == 'insert')
        {
            $objMyPDO->flag = 'insert';
            $objMyPDO->insert($table, $keyData)->values('user7', $_POST['text'])->exec();
            $report = SAVE_OK;
        }

//DELETE
        if ($flag == 'delete')
        {
            $objMyPDO->flag = 'delete';
            $objMyPDO->delete()->from($table)->where('user7', $key)->exec();
            $report = DELETE_OK;
        }
//UPDATE
        if ($flag == 'update')
        {
            $objMyPDO->flag = 'update';
            $objMyPDO->update($table)->set($data, $_POST['text'])
                    ->where('user7', $key)->exec();
            $report = UPDATE_OK;
        }
    }
}

include_once './templates/tmpl_index.php';
