<?php
class Cart extends Core
{
    public function fetch()
    {
        $request = new Request();
        $carts = new Carts();

        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $categories_catalog_tree = $categories->GetCategoriesTree();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();
        $products_catalog = $products->getCategoriesForCatalog();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if (isset($parts[1])) {
            $cart = $carts->getCart(); // тут массив, в котором все товары добавленые в корзину 
            //print_r($cart);
        } 

        if($request->post('clear_cart') || $cart['amount'] < 1) {
            $carts->clearCart(); // очищаем всю корзину(удаляем куку)
        }

        if($request->post('update_cart')) {
            $carts->updateCart(); // обновляем изменения в корзине
        }

        if($request->post('delete')) {
            $carts->delete(); // обновляем изменения в корзине
        }


        // echo "<pre>";
        // //print_r($_POST);
        // print_r(unserialize($request->cookie('cart')));
        // echo "</pre>";

        $amount_in_cart = $carts->cart_count();
        $total = $carts->cart_total();

        $array_vars = array(
            'categories' => $all_categories,
            'categories_tree' => $categories_catalog_tree,
            'pages' => $all_pages,
            'products' => $products_catalog,
            'amount_in_cart' => $amount_in_cart,
            'cart' => $cart,
            'cart_products' => $cart['products'],
            'total' => $total,
        );

        if(true) {
            return $this->view->render('cart.html',$array_vars);
        } else {
            //header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}