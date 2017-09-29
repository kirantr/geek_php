<?php

include_once './config.php';
include_once 'libs/iWorkData.php';
include_once 'libs/MySql.php';
include_once 'libs/PostgreSQL.php';
include_once 'libs/CookieClass.php';
include_once 'libs/SessionClass.php';

$objMySQL = new MySQL();
 $objPgSQL = new PostgreSQL();
$objCookie = new CookieClass();
$objSession = new SessionClass();

if (isset($_POST['flag']))
{

//SELECT
    if ($_POST['flag'] == 'select')
    {
        $key = 'user7';
        if ($_POST['db'] == 'mysql')
        {
            $selectMySQL = $objMySQL->getData($key);
        }
    }

//SAVE_DATA
    if ($_POST['flag'] == 'insert' && isset($_POST['text']))
    {
        $data = $_POST['text'];
        if ($_POST['db'] == 'mysql')
        {
            $key = "`key`, `data`";
            $objSQL = $objMySQL;
        }
         elseif ($_POST['db'] == 'pg')
         {
             $key = "key, data";
             $objSQL = $objPgSQL;
        }
        elseif ($_POST['db'] == 'cookie')
        {
            $key = "user7";
            $objSQL = $objCookie;
        } elseif ($_POST['db'] == 'session')
        {
            $key = "user7";
            $objSQL = $objSession;
        }
        $objSQL->saveData($key, $data);
    }

//DELETE
    if ($_POST['flag'] == 'delete')
    {
        if ($_POST['db'] == 'mysql')
        {
            $key = "'user7'";
            $objSQL = $objMySQL;
        }
         elseif ($_POST['db'] == 'pg')
         {
             $key = "user7";
             $objSQL = $objPgSQL;
         }
        elseif ($_POST['db'] == 'cookie')
        {
            $key = "user7";
            $objSQL = $objCookie;
        } elseif ($_POST['db'] == 'session')
        {
            $key = "user7";
            $objSQL = $objSession;
        }

        $objSQL->deleteData($key);
    }
}

include_once './templates/tmpl_index.php';
