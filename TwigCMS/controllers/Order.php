<?php
class Order extends Core
{
    public function fetch()
    {   
        $orders = new Orders();
        $purchases = new Purchases();


        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if(isset($parts[2])) {
            $order = $orders->getOrder($parts[2]);
        }

        $order['purchases'] = $purchases->getPurchase($order['id']);
        
        $array_vars = array(
            'order' => $order,
        );

        if($order) {
            return $this->view->render('order.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}