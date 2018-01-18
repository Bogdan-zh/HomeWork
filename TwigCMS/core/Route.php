<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $parts = explode('/', $uri['path']);
        // echo "<pre>";
        // print_r($parts);
        // echo "</pre>";

        // служебные ссылки
        $uri_array = array(
            '' => 'Main',
            'catalog' => 'Catalog',
            'product' => 'Product',
            'cart' => 'Cart',
            'order' => 'Order',
            'contact' => 'Contact',
            // '404' => 'Error404',
        );

        if(!empty($parts)) {

            if(isset($uri_array[$parts[1]])) {
                // это служебная ссылка

                if(file_exists($controllers_dir.$uri_array[$parts[1]] . '.php')) {
                    require $controllers_dir.$uri_array[$parts[1]] . '.php'; //controllers/Main.php
                    $controller = new $uri_array[$parts[1]](); // new Main();

                    if(method_exists($controller,'fetch')) {
                        print $controller->fetch();
                    } else {
                        Route::error404();
                    }
                }

            } else {
                if(file_exists($controllers_dir.'Page.php')) {
                    require $controllers_dir.'Page.php'; //controllers/Main.php
                    $controller = new Page(); // new Main();

                    if(method_exists($controller,'fetch')) {
                        print $controller->fetch();
                    } else {
                        Route::error404();
                    }
                }
            }
        }
    }


    public static function error404()
    {
        require 'controllers/Error404.php';
        $controler = new Error404();
        if (method_exists($controler, 'fetch'))
        {
            print $controler->fetch();
        }
    }
}