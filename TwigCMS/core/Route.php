<?php
class Route
{
    public static function run()
    {
        $models_dir = 'models/';
        $controllers_dir = 'controllers/';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $url = explode('/', $uri['path']); 

        unset($url[0]);
        $ar[] = $url[1];

        // echo "<pre>"; // раскомментировать по необходимости
        // print_r($uri);
        // print_r($url);
        // echo "</pre>";
        
        $uri_array = array(
            '/'          => 'Main',
            '/products'  => 'Catalog',
            '/register'  => 'Register',
            '/login'     => 'Login',
            '/user'      => 'User',
            '/cart'      => 'Cart',
            '/order'     => 'Order',
            '/about'     => 'About',
            '/contact'   => 'Contact',
            '/404'       => 'Err404',
        );
       

        if($uri['path'] == '/'.$url[1] || $uri['path'] == '/') {

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

        $uri_array = array(
            '/'          => 'Main',
            '/products'  => 'Catalog',
            '/register'  => 'Register',
            '/login'     => 'Login',
            '/user'      => 'User',
            '/cart'      => 'Cart',
            '/order'     => 'Order',
            '/about'     => 'About',
            '/contact'   => 'Contact',
        );
        foreach ($uri_array as $key => $value) {

            if($url[1] == '404' || $url[1] != $key) {

                if(file_exists($controllers_dir.'Err404.php')) {
                    require $controllers_dir.'Err404.php';
                    $controller = new Err404();

                    if(method_exists($controller,'fetch')) {
                        print $controller->fetch();
                    }
                }
            }
        }
    }
}
