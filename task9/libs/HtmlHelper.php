<?php

class HtmlHelper
{

    public static function select($text, $flag)
    {
        $stack = array();

        if ($flag == 'mult_select')
        {
            $multiple = 'size="2" multiple';
        } else
        {
            $multiple = '';
        }

        $sel1 = '<select ' . $multiple . '>'
                . ' <option selected  disabled>My select</option>';
        array_push($stack, $sel1);

        foreach ($text as $key => $value)
        {
            $option = "<option>" . $value . "</option>";
            array_push($stack, $option);
        }

        $sel2 = '</select >';
        array_push($stack, $sel2);

        return $stack;
    }

    
    public static function table($text, $flag)
    {
        $stack = array();
        echo 'table';
    }
}

?>