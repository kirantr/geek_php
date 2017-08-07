<?php

include_once './config.php';
include_once './libs/Calc.php';
include_once './templates/index.php';

if ($date1 && $date2)
{
    if (isset($plus))
    {
        echo $objCalc-> plus();
    }
    
    if (isset($minus))
    {
        echo $objCalc-> minus();
    }
    
    if (isset($multiplication))
    {
        echo $objCalc-> multiplication();
    }
    
    if (isset($division))
    {
        echo $objCalc-> division();
    }
    
    if (isset($precent))
    {
        echo $objCalc-> precent();
    }
    
    if (isset($sqrt))
    {
        echo $objCalc-> sqrt();
    }
}