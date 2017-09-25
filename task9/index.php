<?php

include_once './libs/HtmlHelper.php';

$stack = array();
if (isset($_POST['text1']) || isset($_POST['text2']) || isset($_POST['text3']) || isset($_POST['text4'])
)
{
    for ($i = 1; $i < 5; $i++)
    {
        $text = $_POST["text$i"];
        array_push($stack, $text);
    }
    $flag = $_POST['flag'];
    if ($flag == 'select' || $flag == 'mult_select')
    {
        $select = HtmlHelper::select($stack, $flag);
    }
    if ($flag == 'table')
    {
    $table = HtmlHelper::table($stack, $flag);
    }
}
include_once './templates/tmpl_index.php';
?>