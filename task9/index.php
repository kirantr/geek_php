<?php

class HtmlHelper
{
    private static $select1;
    public static function setSelect($select1)
    {
        $this->select = $select;
    }
    
    public static function getSelect()
    {
        return $this->select;
    }

}

HtmlHelper :: getSelect();
?>
