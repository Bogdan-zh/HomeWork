<?php
class OrdersAdmin extends CoreAdmin
{
    public function fetch()
    {
        $orders = new Orders();
        $request = new Request();
        
        // все заказы
        $all_orders = $orders->getOrders($request->get('status')); 

        // удаление заказа
        if($request->post('del')) { 
            $id = $request->post('del');
            $orders->deleteOrder($id);
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        // получаем номер стауса заказа
        $status = $request->get('status'); 

        // для отображения выбранности вкладки
        function status($n = 0) {
            $request = new Request();
            if($request->get('status') == $n) {
                $ind = $n;
                return $ind;
            }
        }
        $ind = status($status);

        $array_vars = array(
            'orders' => $all_orders,
            'status' => $status,
            'ind' => $ind,
        );

        return $this->view->render('orders.html',$array_vars);
    }
}