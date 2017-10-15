<?php 

if(isset($_GET['route'])) {
    $route = $_GET['route'];
} else {
    $route = 'main';
}

if ($route) {
    switch($route) {
        case 'page';
            include 'html/page.php';
            break;
        case 'product';
            include 'html/product.php';
            break;
        default:
            include 'html/main.php';
            break;
    }
}


 ?>