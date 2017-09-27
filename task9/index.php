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
    
//SELECT    
    if ($flag == 'select' || $flag == 'mult_select')
    {
        $out = HtmlHelper::select($stack, $flag);
    }
    
//UL-OL    
    if ($flag == 'ul' || $flag == 'ol')
    {
        $out = HtmlHelper::ulOl($stack, $flag);
    }
    
//DL-DT-DD
    if ($flag == 'dl')
    {
        $out = HtmlHelper::dlDtDd($stack, $flag);
    }

//TABLE    
    if ($flag == 'table')
    {
    $out = HtmlHelper::table($stack);
    }
//RADIO
    if ($flag == 'radio')
    {
    $out = HtmlHelper::radio($stack, $flag);
    }
}
include_once './templates/tmpl_index.php';
?>