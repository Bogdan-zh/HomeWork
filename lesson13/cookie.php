<?php

class Cookie
{
    public function setCookie($name, $value)
    {
        if(!empty($name) && !empty($value)) {
            setcookie($name, $value, time() + 3600*24*30);
        } else {
            return false;
        }
    }

    public function getCookie($name) 
    {
        if(!empty($name) && isset($_COOKIE["$name"])) {
            return $_COOKIE["$name"];
        } else {
            return false;
        }
    }

    public function delCookie($name)
    {
        if(!empty($name) && isset($_COOKIE["$name"])) {
            setcookie($name, '', time() - 3600*24*30);
        } else {
            return false;
        }
    }
}

$cookie = new Cookie();

 ?>