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

        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $categories_catalog_tree = $categories->GetCategoriesTree();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if (isset($parts[1])) {
            $cart = $carts->getCart(); // все товары в корзине
        } 

        // удаление конкретного товара из корзины
        if($request->get('del')) {
            $carts->delete($request->get('del'));
            header("Location: /cart");
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

        // если корзина пуста, то при вводе в адресную строку /cart, произойдет переадресация на главную страницу
        if($parts[1] == 'cart' && $cart['amount'] == 0) {
            header("Location: /");
        }


        // оформление заказа
        $message = '';

        $order = new StdClass();
        $order->first_name = trim(strip_tags($request->post('first_name')));
        $order->last_name = trim(strip_tags($request->post('last_name')));
        $order->email = trim(strip_tags($request->post('email')));
        $order->phone = trim(strip_tags($request->post('phone')));
        $order->total_cost = $request->post('total_cost');

        if($request->post('buy')) {
            if(empty($order->first_name) || empty($order->last_name) || empty($order->email) || (empty($order->phone) || !is_numeric($order->phone))) {
                $message = 'Это поле не должно быть пустым!';
            } else {
                if($cart['amount'] > 0 || $order->total_cost > 0) {

                    // проверка на попытку взлома количества товара на фронте
                    foreach ($cart['products'] as $value) {
                        if($value['amount'] < 1) {
                            header('Location: /cart');
                            die();
                        }
                    }

                    $order->url = md5($order->email.date('m-d-y-h-i'));
                    $order_id = $orders->addOrder($order);
                    $purchase = $purchases->addPurchase($order_id, $cart['products']);

                    // ВРЕМЕННО ЗАКОММЕНТИРОВАНА ОТПРАВКА ПИСЕМ
                    // if($order->email) {
                    //     $mail->orderEmail($order_id);
                    // }

                    // очищаем корзину
                    $carts->clearCart();

                    header('Location: /order/'.$order->url);
                }
            }
        }


        $amount_in_cart = $cart['amount'];
        $total = $cart['total'];

        $array_vars = array(
            'categories' => $all_categories,
            'categories_tree' => $categories_catalog_tree,
            'pages' => $all_pages,
            'amount_in_cart' => $amount_in_cart,
            'cart' => $cart,
            'cart_products' => $cart['products'],
            'total' => $total,
            'message' => $message,
            'order' => $order,
        );

        if(true) {
            return $this->view->render('cart.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}