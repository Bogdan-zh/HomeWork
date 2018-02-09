<?php
class Route
{
    public static function run()
    {
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);


        $uri_array = array(
            '/admin/' => 'MainAdmin',
            '/admin/products' => 'CatalogAdmin',
            '/admin/product' => 'ProductAdmin',
            '/admin/pages' => 'PagesAdmin',
            '/admin/page' => 'PageAdmin',
            '/admin/categories' => 'CategoriesAdmin',
            '/admin/category' => 'CategoryAdmin',
            '/admin/orders' => 'OrdersAdmin',
            '/admin/order' => 'OrderAdmin',
        );
        if( array_key_exists($uri['path'], $uri_array)) {

            if(file_exists($controllers_dir.$uri_array[$uri['path']] . '.php')) {
                require $controllers_dir.$uri_array[$uri['path']] . '.php'; //controllers/Main.php
                $controller = new $uri_array[$uri['path']](); // new Main();

                if(method_exists($controller,'fetch')) {
                    print $controller->fetch();
                } else {
                    header("Location: /admin");
                }
            } else {
                header("Location: /admin");
            }

        } else {
            header("Location: /admin");
        }
    }

}