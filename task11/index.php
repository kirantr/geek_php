<?php

include_once './config.php';
include_once 'libs/Sql.php';
include_once 'libs/ActiveRecord.php';
include_once 'libs/MyTest.php';

$objMyTest = new Sql();
$objMyTest = new ActiveRecord();
$objMyTest = new MyTest();

include_once './templates/tmpl_index.php';

if (isset($_POST['flag']))
{
//INSERT
    if ($_POST['flag'] == 'insert')
    {
        $objMyTest->data = $_POST['text'];
        $objMyTest->getInsert();
    }

//DELETE
    if ($_POST['flag'] == 'delete')
    {
        $objMyTest->data = $_POST['text'];
        $objMyTest->key = $_POST['text'];
        $objMyTest->getDelete();
    }
//UPDATE
    if ($_POST['flag'] == 'update')
    {
        $objMyTest->data = $_POST['text'];
        $objMyTest->getUpdate();
    }
}
