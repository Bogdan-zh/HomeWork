<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
// Последняя посещенная страница
if(isset($_SERVER['HTTP_REFERER'])) {
    $cookie_vis_value = $_SERVER['HTTP_REFERER'];
    setcookie("last_visited", $cookie_vis_value, time() + 86400*30);
    $last_vis_echo = "Последная посещенная страница: <a href=\"$cookie_vis_value\">$cookie_vis_value</a>";
} elseif (isset($_COOKIE['last_visited'])) {
    $www = $_COOKIE['last_visited'];
    $last_vis_echo = "Последная посещенная страница: <a href=\"$www\">$www</a>";
} else {
    $last_vis_echo = "ERROR";
}

// Последнее время посещения
$last_time = isset($_COOKIE['last_time']) ? "Последнее время посещения: ".$_COOKIE['last_time'] : '';
setcookie("last_time", date("Y-m-d H:i:s"), time() + 86400*30);

/*-------------------------------------------------------------------------------------------------*/


if(isset($_POST['clear_wishlist'])) {
    setcookie('wishlist', $_COOKIE['wishlist'], time() - 86400*30);
    header("Location:".$_SERVER['HTTP_REFERER']);
}

if(isset($_POST['clear_cart'])) {
    setcookie('cart', $_COOKIE['cart'], time() - 86400*30);
    header("Location:".$_SERVER['HTTP_REFERER']);
}

if(isset($_POST['delete'])) {
//delete product in cart
    $id = $_POST['delete'];
    $refresh = unserialize($_COOKIE['cart']);
    unset($refresh[$id]);
    setcookie('cart', serialize($refresh), time() + 86400*30);
    header("Location:".$_SERVER['HTTP_REFERER']);
}

if(isset($_POST['buy'])) {
    setcookie('cart', $_COOKIE['cart'], time() - 86400*30);
    $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/?route=order";
    header("Location: $url");
}

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
 ?>