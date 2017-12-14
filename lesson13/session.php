<?php 

class Session
{
    public function __construct()
    {
        session_start();
    }

    public static function setSession($name, $value)
    {
        if(!empty($name) && !empty($value)) {
            $_SESSION["$name"] = $value;
        } else {
            return false;
        }
    }

    public static function getSession($name)
    {
        if(!empty($name)) {
            return $_SESSION["$name"];
        } else {
            return false;
        }
    }

    public static function delSession($name)
    {
        if(!empty($name)) {
            unset($_SESSION["$name"]);
        } else {
            return false;
        }
    }

    public static function issetSession($name)
    {
        if(!empty($name)) {
            return isset($_SESSION["$name"]);
        } else {
            return false;
        }
    }
}

$session = new Session(); // для старта сессии в конструкторе


 ?>