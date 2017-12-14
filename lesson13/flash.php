<?php 

include "session.php";

class Flash
{
    public function setMessage($name, $value)
    {
        if(!empty($name) && !empty($value)) {
            Session::setSession($name, $value);
        } else {
            return false;
        }
    }

    public function getMessage($name)
    {
        if(!empty($name)) {
            return Session::getSession($name);
        } else {
            return false;
        }
    }
}

$flash = new Flash();

 ?>