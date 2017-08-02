<?php

class HtmlHelper
{
    public static $select;
    public static function Select()
    {
        $select = "<select>
                            <option>Пункт 1</option>
                            <option>Пункт 2</option>
                        </select>";
        return $select;
    }
    

}

echo HtmlHelper :: Select();
?>
