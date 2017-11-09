<?php 

if(isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route = 'main';
}

if ($route) {
    switch($route) {
        case 'page':
        case 'product':
        case 'registration':
        case 'login':
        case 'cart':
        case 'wishlist':
            include "html/$route.php";
            break;
        default:
            include "html/$route.php";
            break;
    }
}


 ?>