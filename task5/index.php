<?php

include_once './config.php';
include_once 'libs/iWorkData.php';
include_once 'libs/CookieClass.php';
include_once 'libs/SessionClass.php';
include_once 'libs/MySql.php';
include_once 'libs/PostgreSQL.php';

$objCookie = new CookieClass();
$objSession = new SessionClass();
$objMySQL = new MySQL();
$objPgSQL = new PostgreSQL();

if (isset($_POST['flag']))
{
    $flag = $_POST['flag'];
    $db = $_POST['db'];

//SELECT COOKIE     
    if ($db == 'cookie')
    {
        $report = $objCookie->getData($key);
    }

//SELECT SESSION     
    if ($db == 'session')
    {
        $report = $objSession->getData($key);
    }

//SELECT MySQL
    if ($flag == 'select' && $db == 'mysql')
    {
        $key = 'user7';
        $select = $objMySQL->getData($key);
    }

//SELECT PG
    if ($flag == 'select' && $db == 'pg')
    {
        $key = 'user7';
        $select = $objPgSQL->getData($key);
    }

//SAVE_DATA
    if ($flag == 'insert' && isset($_POST['text']))
    {
        $data = $_POST['text'];
        if ($db == 'mysql')
        {
            $key = "`key`, `data`";
            $objSQL = $objMySQL;
        }
        elseif ($db == 'pg')
        {
            $key = "key, data";
            $objSQL = $objPgSQL;
        }
        elseif ($db == 'cookie')
        {
            $key = "user7";
            $objSQL = $objCookie;
        }
        elseif ($db == 'session')
        {
            $key = "user7";
            $objSQL = $objSession;
        }
        $save = $objSQL->saveData($key, $data);
        $report = $save;
    }

//DELETE
    if ($flag == 'delete')
    {
        if ($db == 'mysql')
        {
            $key = "'user7'";
            $objSQL = $objMySQL;
        }
        elseif ($db == 'pg')
        {
            $key = "user7";
            $objSQL = $objPgSQL;
        }
        elseif ($db == 'cookie')
        {
            $key = "user7";
            $objSQL = $objCookie;
        }
        elseif ($db == 'session')
        {
            $key = "user7";
            $objSQL = $objSession;
        }

        $delete = $objSQL->deleteData($key);
        $report = $delete;
    }
}

include_once './templates/tmpl_index.php';
