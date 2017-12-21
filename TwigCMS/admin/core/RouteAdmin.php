<?php
class Route
{
    public static function run()
    {
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $url = explode('/', $uri['path']); 

        // echo "<pre>";
        // print_r($uri);
        // print_r($url);
        // echo "</pre>";

        $uri_array = array(
            '/admin/' => 'MainAdmin',
            '/admin/products/' => 'CatalogAdmin',
            '/admin/product/' => 'ProductAdmin',
        );

        if($uri['path'] == '/'.$url[1].'/' || $uri['path'] == '/admin/'.$url[2].'/') {

            if(file_exists($controllers_dir.$uri_array[$uri['path']] . '.php')) {
                require $controllers_dir.$uri_array[$uri['path']] . '.php'; //controllers/Main.php
                $controller = new $uri_array[$uri['path']](); // new Main();

                if(method_exists($controller,'fetch')) {
                    print $controller->fetch();
                } else {
                    Route::error404();
                }
            } else {
                Route::error404();
            }
        } else {
            Route::error404();
        }
    }

    public static function error404()
    {
        $controllers_dir = 'controllers/';
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $url = explode('/', $uri['path']); 

        if($url[1].'/'.$url[2] == 'admin/404' || $uri['path'] != '') {

            if(file_exists($controllers_dir.'Err404Admin.php')) {
                require $controllers_dir.'Err404Admin.php';
                $controller = new Err404();

                if(method_exists($controller,'fetch')) {
                    print $controller->fetch();
                }
            }
        }
    }
}