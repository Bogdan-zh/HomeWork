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
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        if($request->post('update_cart')) {
            //$carts->updateCart(); // обновляем изменения в корзине
            foreach ($_POST['cart_item'] as $id => $amount) {
                if (!empty($id) && !empty($amount)) {
                    $id = trim(strip_tags($id));
                    $amount = trim(strip_tags($amount));
                    $update_cart[$id] = $amount;
                }
            }
            setcookie('cart', serialize($update_cart), time() + 86400*30);
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        if($request->post('delete')) {
            $id = $request->post('delete');
            $carts->delete($id);
            header("Location:".$_SERVER['HTTP_REFERER']);
        }


        // echo "<pre>";
        // print_r($_POST);
        // //print_r(unserialize($request->cookie('cart')));
        // echo "</pre>";

        $amount_in_cart = $cart['amount'];
        $total = $cart['total'];

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