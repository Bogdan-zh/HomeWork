<?php

class Cookie
{
    public function setCookie($name, $value, $time)
    {
        if(!empty($name) && !empty($value)) {
            setcookie($name, $value, time() + $time);
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
            setcookie($name, '');
        } else {
            return false;
        }
    }
}

$cookie = new Cookie();

 ?>