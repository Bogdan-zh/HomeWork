<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $parts = explode('/', $uri['path']);

        // служебные ссылки
        $uri_array = array(
            '' => 'Main',
            'catalog' => 'Catalog',
            'products' => 'Product',
            'cart' => 'Cart',
            'order' => 'Order',
        );

        if(!empty($parts)) {

            if(isset($uri_array[$parts[1]])) {

                if(file_exists($controllers_dir.$uri_array[$parts[1]] . '.php')) {
                    require $controllers_dir.$uri_array[$parts[1]] . '.php'; //controllers/Main.php
                    $controller = new $uri_array[$parts[1]](); // new Main();

                    if(method_exists($controller,'fetch')) {
                        print $controller->fetch();
                    }
                }
                
            } else {
                if(file_exists($controllers_dir.'Page.php')) {
                    require $controllers_dir.'Page.php'; 
                    $controller = new Page();

                    if(method_exists($controller,'fetch')) {
                        print $controller->fetch();
                    }
                }
            }
        }
    }
}