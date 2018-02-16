<?php
class OrdersAdmin extends CoreAdmin
{
    public function fetch()
    {
        $orders = new Orders();
        $request = new Request();
        $database = new Database();
        
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

        $statuses = $orders->getStatuses();


        // PAGINATION
        $num = 9; // сколько товаров на одной странице
        if(isset($_GET['page'])) {
            $page = $_GET['page'];
            $page = intval($page); 
        }
        $count_orders = count($all_orders);
        $total = intval(($count_orders - 1) / $num) + 1; 
        if(empty($page) || $page < 0) {
            $page = 1; 
        } 
        if($page > $total) {
            $page = $total; 
        }
        $start = $page * $num - $num;

        $all_orders = $orders->getOrders($request->get('status'), $start, $num); 


        $array_vars = array(
            'orders' => $all_orders,
            'status' => $status,
            'statuses' => $statuses,
            'ind' => $ind,
            'page' => $page,
            'total' => $total,
        );

        return $this->view->render('orders.html',$array_vars);
    }
}