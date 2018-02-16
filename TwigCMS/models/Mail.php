<?php
class Mail
{
    public function mailTo($data)
    {
        mail($data->to, $data->subject, $data->html);
    }

    public function orderEmail($id)
    {
        $data = new stdClass();

        $orders = new Orders();
        $purchases = new Purchases();
        $order = $orders->getOrder($id);
        $order['purchases'] = $purchases->getPurchase($order['id']);

        ob_start();
        extract($order);
        require('/theme/email/order.php');
        $data->html = ob_get_clean();

        $data->to = $order['email'];
        $data->subject = 'Заказ №'.$order['id'];
       

        $this->mailTo($data);
    }
}