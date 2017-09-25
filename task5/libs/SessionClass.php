<?php

class SessionClass implements iWorkData
{

    public function saveData($key, $val)
    {
        $_SESSION[$key] = $val;
        return SET_SESSION;
    }

    public function getData($key)
    {
        if (isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        else
        {
            return NOT_SESSION;
        }
    }

    public function deleteData($key)
    {
        if (isset($_SESSION[$key]))
        {
            unset($_SESSION[$key]);
            return DEL_SESSION;
        }
        else
        {
            return NOT_SESSION;
        }
    }

}

?>
