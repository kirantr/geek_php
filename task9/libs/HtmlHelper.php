<?php

class HtmlHelper
{

//SELECT    
    public static function select($text, $flag)
    {
        $stack = array();

        if ($flag == 'mult_select')
        {
            $multiple = 'size="2" multiple';
        }
        else
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

//TABLE    
    public static function table($text)
    {
        $stack = array();
        $tab1 = '  <table border="1"><tr>';
        array_push($stack, $tab1);
        for ($i = 0; $i < 2; $i++)
        {
            $tab2 = "<th>$text[$i]</th>";
            array_push($stack, $tab2);
        }
        $tab3 = '<tr>';
        array_push($stack, $tab3);
        for ($i = 2; $i < 4; $i++)
        {
            $tab4 = "<td>$text[$i]</td>";
            array_push($stack, $tab4);
        }
        $tab5 = '</tr></tr></table>';
        array_push($stack, $tab5);

        return $stack;
    }

//UL-OL
    public static function ulOl($text, $flag)
    {
        $stack = array();

        if ($flag == 'ul')
        {
            $var = 'ul';
        }
        elseif ($flag == 'ol')
        {
            $var = 'ol';
        }

        $var1 = "<$var>";
        array_push($stack, $var1);

        foreach ($text as $key => $value)
        {
            $var2 = "<li>" . $value . "</li>";
            array_push($stack, $var2);
        }

        $$var3 = "</$var>";
        array_push($stack, $var3);

        return $stack;
    }
    
//DL-DT-DD
    public static function dlDtDd($text, $flag)
    {
        $stack = array();

        if ($flag == 'dl')
        {
            $var = 'dl';
        }

        $var1 = "<$var>";
        array_push($stack, $var1);

        for ($i = 0; $i < 2; $i++)
        {
            $var2 = "<dt>" . $text[$i] . "</dt>";
            array_push($stack, $var2);
        }
        for ($i = 2; $i < 4; $i++)
        {
            $var3 = "<dt>" . $text[$i] . "</dt>";
            array_push($stack, $var3);
        }

        $$var4 = "</$var>";
        array_push($stack, $var4);

        return $stack;
    }

//RADIOBUTTONS
    public static function radio($text, $flag)
    {
        $stack = array();

        if ($flag == 'radio')
        {
            $var = 'input type="radio" name="test" value="test"';
        }
        
        array_push($stack, $var1);

        foreach ($text as $key => $value)
        {
            $var2 = "<$var>"."$value";
            array_push($stack, $var2);
        }

        return $stack;
    }

}

?>