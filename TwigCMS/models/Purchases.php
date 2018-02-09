<?php
class Purchases extends Database
{
	public function addPurchase($order_id, $cart_item)
    {
        foreach($cart_item as $product) {
            $product_id = $product['id'];
            $product_name = $product['name'];
            $product_price = $product['price'];
            $product_amount = $product['amount'];
            $query = "INSERT INTO purchases (order_id, product_id, product_name, price, amount) VALUE ($order_id, $product_id, '".$product_name."', $product_price, $product_amount)";
            $this->query($query);
        }
    }

    public function getPurchase($id)
    {
        if(empty($id)) {
            return false;
        }
        $query = "SELECT id, order_id, product_id, product_name, price, amount FROM purchases WHERE order_id = '$id'";
        $this->query($query);
        return $this->results();
    }

    public function updatePurchase($id, $amount)
    {
        $query = "UPDATE purchases SET amount = $amount WHERE id='$id'";
        $this->query($query);
        return $id;
    }

    public function deletePurchase($id)
    {
        if(empty($id)) {
            return false;
        }
        $this->query("DELETE FROM purchases WHERE id = '$id'");
    }
    
}