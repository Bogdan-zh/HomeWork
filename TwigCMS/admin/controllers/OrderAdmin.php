<?php
class OrderAdmin extends CoreAdmin
{
    public function fetch()
    {
        ob_start();
        $orders = new Orders();
        $purchases = new Purchases();
        $request = new Request();
        $products = new Products();
        
        $id = $request->get('id'); // id ЗАКАЗА
        $order = $orders->getOrder($id); // тут данные заказа
        $purchase = $purchases->getPurchase($id); // тут товары в заказе
        $statuses = $orders->getStatuses(); // тут все статусы

        $current_status = $orders->getStatusOrder($id); // текущий статус заказа
        $status_id = $request->post('statuses'); // id текущего статуса заказа

        // товары в заказе
        $total = 0;
        if($purchase) { 
            foreach($purchase as $item) {
                $total += $item['price'] * $item['amount'];
                $product = $products->getProduct($item['product_id']);
            }
        }

        // сохранение изменения данных в заказе (в админке работает автоматически)
        if($request->post('save')) {
            $order_upd = new stdClass();
            $order_upd->first_name = $request->post('first_name');
            $order_upd->last_name = $request->post('last_name');
            $order_upd->email = $request->post('email');
            $order_upd->phone = $request->post('phone');

            $orders->updateOrder($id, $order_upd);

            // сложные манипуляции для обновления и сохранения товаров в админке заказа
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
            };

            $res = array_combine($arr_id, $arr_amount);

            foreach($res as $k => $v) {
                $purchases->updatePurchase($k, $v);
            }
            //----------------------------------------

            // обновление статуса заказа
            $orders->updateStatus($id, $status_id);

            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // удаление заказа
        if($request->post('del')) { 
            $orders->deleteOrder($request->get('id'));
            header("Location: /admin/orders");
        }

        // удаление товара из заказа
        if($request->post('delete')) {
            $purchases->deletePurchase($request->post('delete'));
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // удаление заказа, если товаров в заказе не осталось
        if(count($purchase) < 1) {
            $orders->deleteOrder($request->get('id'));
            header("Location: /admin/orders");
        }

        ob_flush();



        // echo "<pre>"; 
        // print_r($purchase);
        // //print_r($_POST['delete']);
        // echo "</pre>";
        
        $array_vars = array(
            'order' => $order,
            'purchase' => $purchase,
            'total' => $total,
            'product' => $product,
            'statuses' => $statuses,
            'current_status' => $current_status,
        );

        return $this->view->render('order.html',$array_vars);

    }
}