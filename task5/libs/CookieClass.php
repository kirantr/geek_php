<?php

class CookieClass implements iWorkData
{
    public function getData($key)
    {
        if (isset($_COOKIE[$key]))
        {
            return $_COOKIE[$key];
        }
        else
        {
            return NOT_COOKIE;
        }
    }

    public function saveData($key, $val)
    {
        setcookie($key, $val, time() + 3600);
        $_COOKIE[$key] = $val;
        return SET_COOKIE;
    }

    public function deleteData($key)
    {
        if (isset($_COOKIE[$key]))
        {
            unset($_COOKIE[$key]);
            return DEL_COOKIE;
        }
        else
        {
            return NOT_COOKIE;
        }
    }

}
