<?php 
session_start();


function connect($hostname, $login, $pass, $basename) { // открываетт соединение с базой
    if(!empty($hostname) && !empty($login) && !empty($basename)) {

        $link = mysqli_connect($hostname, $login, $pass, $basename);
        if (!$link) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        return $link;
    } else {
        return false;
    }
}


function endconnect($link) { // закрывает соединение с базой
    mysqli_close($link);
}


function query($link, $query) { // возвращает обьект
    if(isset($link) && !empty($query)) {
        return mysqli_query($link, $query);
    } else {
        return false;
    }
}


function result($res) {
    if(!empty($res)) {
        return mysqli_fetch_assoc($res); // возвращает один элемент массива
    } else {
        return false;
    }
}


function results($res) { // возвращает ассоциативный массив
    if(!empty($res)) {
        $array = array();
        while($r = mysqli_fetch_assoc($res)) {
            $array[] = $r;
        }
        return $array;
    } 
}



?>