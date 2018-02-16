<?php
class Purchases extends Database
{
	public function addPurchase($order_id, $cart_products)
    {
        foreach($cart_products as $product) {
            $product_id = $product['id'];
            $product_name = $product['name'];
            $product_price = $product['price'];
            $product_amount = $product['amount'];
            $product_url = $product['url'];

            $query = "INSERT INTO purchases (order_id, product_id, product_name, price, amount, product_url) VALUE ($order_id, $product_id, '".$product_name."', $product_price, $product_amount, '".$product_url."')";
            $this->query($query);
        }
    }

    public function getPurchase($id)
    {
        if(empty($id)) {
            return false;
        }
        $query = "SELECT id, order_id, product_id, product_name, price, amount, product_url FROM purchases WHERE order_id = '$id'";
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

    public function addProductInOrder($order_id, $cart_products, $amount)
    {
        
        $product_id = $cart_products['id'];
        $product_name = $cart_products['name'];
        $product_price = $cart_products['price'];
        $product_url = $cart_products['url'];

        $query = "INSERT INTO purchases (order_id, product_id, product_name, price, amount, product_url) VALUE ($order_id, $product_id, '".$product_name."', $product_price, $amount, '".$product_url."')";
        $this->query($query);
        return $product_id;
    }
    
}