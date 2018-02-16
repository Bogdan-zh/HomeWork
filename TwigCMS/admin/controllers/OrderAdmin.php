<?php
class OrderAdmin extends CoreAdmin
{
    public function fetch()
    {
        $orders = new Orders();
        $purchases = new Purchases();
        $request = new Request();
        $products = new Products();
        
        $id = $request->get('id'); // id ЗАКАЗА
        $order = $orders->getOrder((int)$id); // тут данные заказа
        $purchase = $purchases->getPurchase($id); // тут товары в заказе
        $statuses = $orders->getStatuses(); // тут все статусы

        $current_status = $orders->getStatusOrder($id); // текущий статус заказа
        $status_id = $request->post('statuses'); // id текущего статуса заказа

        // товары в заказе
        $total = 0;
        $product = array();
        if($purchase) { 
            foreach($purchase as $item) {
                $total += $item['price'] * $item['amount'];
                $product = $products->getProduct($item['product_id']);
            }
        }

        // сохранение изменения данных в заказе
        if($request->post('save')) {
            $order_upd = new stdClass();
            $order_upd->first_name = $request->post('first_name');
            $order_upd->last_name = $request->post('last_name');
            $order_upd->email = $request->post('email');
            $order_upd->phone = $request->post('phone');
            $order_upd->total_cost = $total;

            $orders->updateOrder($id, $order_upd);

            // обновлениe и сохранениe товаров в админке заказа
            if(!empty($purchase)) {
                $array_amount = [];
                $array_amount[] = $request->post('amount');
                $arr_amount = [];
                foreach($array_amount as $arr_amount) {
                    $arr_amount[] = $arr_amount;
                }
                $arr_amount = array_pop($arr_amount);

                $arr_id = [];
                foreach($purchase as $item) {
                    $arr_id[] = $item['id'];
                }

                $res = array_combine($arr_id, $arr_amount);

                foreach($res as $k => $v) {
                    $purchases->updatePurchase($k, $v);
                }
            }

            // обновление статуса заказа
            $orders->updateStatus($id, $status_id);

            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // удаление товара из заказа
        if($request->post('delete')) {
            $purchases->deletePurchase($request->post('delete'));
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // добавление товара в заказ
        $all_products = $products->getProducts();

        if($request->post('add_product_in_order')) {
            if($request->post('product_for_order') > 0) {
                $new_product_id = $request->post('product_for_order');
                $new_product = $products->getProduct($new_product_id);
                $amount = $request->post('amount_new_product');

                $a = true;
                foreach($purchase as $pur) {
                    if($pur['product_id'] == $new_product['id']) {
                        $a = false;
                        break;
                    }
                }
                if($a) {
                    $purchases->addProductInOrder($id, $new_product, $amount);
                }
            }
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        $array_vars = array(
            'order' => $order,
            'id' => $id,
            'purchase' => $purchase,
            'total' => $total,
            'product' => $product,
            'products' => $all_products,
            'statuses' => $statuses,
            'current_status' => $current_status,
        );

        return $this->view->render('order.html',$array_vars);

    }
}