<?php
class Carts
{
    public function addToCart($id, $amount)
    {
        if(isset($_COOKIE['cart'])){
            $cart = unserialize($_COOKIE['cart']);
            if(isset($cart[$id])) {
                $cart[$id] += $amount;
            } else {
                $cart[$id] = $amount;
            }
        } else {
            $cart[$id] = $amount;
        }
        setcookie('cart' ,serialize($cart), time() + 86400*30, '/');
    }

    public function getCart()
    {
        $products = new Products();

        $cart_items['total'] = 0;
        $cart_items['amount'] = 0;

        if(isset($_COOKIE['cart'])) {
            $unse = unserialize($_COOKIE['cart']);
            foreach ($unse as $id => $amount) {
                $product = $products->getProduct($id);
                $product['amount'] = $amount;
                $cart_items['products'][] = $product;
                $cart_items['total'] += $product['price'] * $amount;
                $cart_items['amount'] += $amount;

            }
            return $cart_items;
        }
    }

    public function clearCart()
    {
        if(isset($_COOKIE['cart'])){
            setcookie('cart' , '', time() - 86400*30);
            header("Location:".$_SERVER['HTTP_REFERER']); // если делать перезагрузку не тут, то пойдут ошибки 
        } else {
            return false;
        }
    }

    public function updateCart($cart_item)
    {
        foreach ($cart_item as $id => $amount) {
            if (!empty($id) && !empty($amount)) {
                $id = trim(strip_tags($id));
                $amount = trim(strip_tags($amount));
                $update_cart[$id] = $amount;
            }
        }
        setcookie('cart', serialize($update_cart), time() + 86400*30);
    }

    public function delete($id)
    {
        $cart = unserialize($_COOKIE['cart']);
        unset($cart[$id]);
        setcookie('cart', serialize($cart), time() + 86400*30);
    }


}