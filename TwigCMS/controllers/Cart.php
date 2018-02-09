<?php
class Cart extends Core
{
    public function fetch()
    {   
        $request = new Request();
        $carts = new Carts();
        $orders = new Orders();
        $purchases = new Purchases();
        $mail = new Mail();

        $order = new StdClass();

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

        // очищаем всю корзину(удаляем куку)
        if($cart['amount'] < 1) {
            $carts->clearCart();
        }

        // обновляем изменения в корзине
        if($request->post('update_cart')) {
            $cart_item = $request->post('cart_item');
            $carts->updateCart($cart_item); 
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // удаление конкретного товара из корзины
        if($request->post('delete')) {
            $id = $request->post('delete');
            $carts->delete($id);
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // оформление заказа
        if($request->post('buy')) {
            $order->total_cost = $request->post('total_cost');
            $order->first_name = trim(strip_tags($request->post('first_name')));
            $order->last_name = trim(strip_tags($request->post('last_name')));
            $order->email = trim(strip_tags($request->post('email')));
            $order->phone = trim(strip_tags($request->post('phone')));

            $order_id = $orders->addOrder($order);
            $purchase = $purchases->addPurchase($order_id, $cart['products']);

            if($order->email) {
                $mail->mailTo($order->email, $order->first_name, $order->last_name, $order->phone);
            }

            $message = 'Ваш заказ успешно оформлен! В ближайшее время наш менеджер свяжется с Вами.';
            setcookie('message', $message, time() + 1);

            // очищаем корзину
            $carts->clearCart();

        }


        // echo "<pre>";
        // print_r($request->cookie('order'));
        //print_r(unserialize($request->cookie('cart')));
        // echo "</pre>";

        $amount_in_cart = $cart['amount'];
        // $amount_in_cart = count($cart['products']); // попробовать этот вариант отображения
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
            'message' => $request->cookie('message'),

        );

        if(true) {
            return $this->view->render('cart.html',$array_vars);
        } else {
            //header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}