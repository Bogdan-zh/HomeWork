<?php
class Carts
{
    public function addToCart()
    {
        $id = trim(strip_tags($_POST['id']));
        $amount = trim(strip_tags($_POST['amount']));

        if(isset($_COOKIE['cart'])){
            $cart = unserialize($_COOKIE['cart']);
            $cart[$id] = $amount; // убрать плюс, если надо убрать возможность добавлять по каждому нажатию
        } else {
            $cart[$id] = $amount;
        }
        setcookie('cart' ,serialize($cart), time() + 86400*30, '/');
        header("Location:".$_SERVER['HTTP_REFERER']);
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
            setcookie('cart' , '');
            header("Location:".$_SERVER['HTTP_REFERER']);
        } else {
            return false;
        }
    }

    public function updateCart()
    {
        foreach ($_POST['cart_item'] as $id => $amount) {
            if (!empty($id) && !empty($amount)) {
                $id = trim(strip_tags($id));
                $amount = trim(strip_tags($amount));
                $update_cart[$id] = $amount;
            }
        }
        setcookie('cart', serialize($update_cart), time() + 86400*30);
        header("Location:".$_SERVER['HTTP_REFERER']);
        
        
    }

    public function delete()
    {
        $id = $_POST['delete'];
        $refresh = unserialize($_COOKIE['cart']);
        unset($refresh[$id]);
        setcookie('cart', serialize($refresh), time() + 86400*30);
        header("Location:".$_SERVER['HTTP_REFERER']);
    }

    public function cart_count()
    {
        if($this->getCart()['amount'] > 0) {
            return $this->getCart()['amount'];
        } else {
            return 0;
        }
        
    }

    public function cart_total()
    {
        if($this->getCart()['total'] > 0) {
            return $this->getCart()['total'];
        } else {
            return 0;
        }
    }

    
}