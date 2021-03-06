<?php

require 'data/data_pages.php';
require 'data/data_categories.php';
require 'data/data_products.php';

/*--------------------------------------------------------------------*/

function getPages($data_pages) {
  if (file_exists('data/data_pages.php')) {
    return unserialize($data_pages);
  }
}
$pages = getPages($data_pages);
//print_r($pages);

/*--------------------------------------------------------------------*/

function getCat($data_categories) {
  if (file_exists('data/data_categories.php')) {
    return unserialize($data_categories);
  }
}
$categories = getCat($data_categories);
//print_r($categories);

/*--------------------------------------------------------------------*/

function getProducts($data_products) {
  if (file_exists('data/data_products.php')) {
    return unserialize($data_products);
  }
}
$products = getProducts($data_products);
//print_r($categories);

/*--------------------------------------------------------------------*/


// функция меню (переделать ниже)
function makeMenu($pages, $type = true) {
  if(is_array($pages)) {
    foreach ($pages as $page){ 
      if(($page->visible) && ($page->menu_id == 1)) {
        if($type) {
          if($page->id == 1) {
            echo "<a href='/'> $page->name </a>";
          } else {
            echo "<a href=?route=page&id=$page->id> $page->name </a>";
            }
        } else {
          if($page->id == 1) {
            echo "<a href='/'> $page->name </a><br>";
          } else {
            echo "<a href=?route=page&id=$page->id> $page->name </a><br>";
            }
        }
      }
    }
  }
}

/*--------------------------------------------------------------------*/

function getPage($pages, $id) {
  if(is_array($pages)) {
    return $pages[$id];
  }
}

/*--------------------------------------------------------------------*/

function getProduct($products,$id) {
    if(is_array($products)) {
        return $products[$id];
    }
}

/*--------------------------------------------------------------------*/


//построение дерева категорий
function GetCategoriesTree($categories,$parent_id=0) {

    $results=array();

    if ($categories) {
        foreach ($categories as $key => $category) {
            if ($category->parent_id==$parent_id) {
                if ($category->id!=$parent_id) {
                    $subcategories = GetCategoriesTree($categories,$category->id);
                    if(!empty($subcategories))
                        $category->subcategories = $subcategories;
                }
                $results[]=$category;
                unset($category);
            }
        }
    }
    return $results;
}



/*--------------------------------------------------------------------*/

// вывод на экран меню с подкатегориями
function getCategories($categories) {
    echo "<ul>";
        foreach ($categories as $category) {
            if($category->visible) {
                echo "<li><a href=\"$category->url\"> $category->name </a>";
                    if(!empty($category->subcategories)) {
                    getCategories($category->subcategories); 
              }
            echo "</li>";
        }
    }
    echo "</ul>";
}

/*--------------------------------------------------------------------*/

// Корзина на куках

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['cart'])) {
  if(!empty($_POST['id']) && !empty($_POST['amount'])) {
    $id = trim(strip_tags($_POST['id']));
    $amount = trim(strip_tags($_POST['amount']));

    addCart($id, $amount);
  }
}

function addCart($id, $amount) {
    if(isset($_COOKIE['cart'])){
        $cart = unserialize($_COOKIE['cart']);
        $cart[$id] = $amount;
    } else {
        $cart[$id] = $amount;
    }
    setcookie('cart',serialize($cart), time() + 86400*30);
    header("Location:".$_SERVER['HTTP_REFERER']);
}

function getCart($products) {

        $cart_items['total'] = 0;
        $cart_items['amount'] = 0;

    if(isset($_COOKIE['cart'])) {
        $unse = unserialize($_COOKIE['cart']);
        foreach ($unse as $id => $amount) {
            $product = getProduct($products, $id);
            $product->cart_amount = $amount;
            $cart_items['products'][] = $product;
            $cart_items['total'] += $product->variant->price * $amount;
            $cart_items['amount'] += $amount;

        }
        return $cart_items;
    }
}
// количство товаров в корзине для главной страницы
function cart_count() {
    if(!empty($_COOKIE['cart'])) {
        $unn = unserialize($_COOKIE['cart']);
        echo array_sum($unn);
    } else {
        echo "0";
    }
}


/*--------------------------------------------------------------------*/

//Товар в избранном

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])) {
    if (!empty($_POST['id']) ) {
        $id = trim(strip_tags($_POST['id']));
        addFavor($id);
    }
}

// function addFavor($id) {
//     setcookie("wishlist[$id]", $id, time() + 86400*30);
//     header("Location:".$_SERVER['HTTP_REFERER']);
// }


// function getFavorProduct($products) {
//     if(isset($_COOKIE['wishlist'])) {
//         $favor_items['total'] = 0;
//         foreach ($_COOKIE['wishlist'] as $id) {
//             $product = getProduct($products, $id);
//             $favor_items['products'][] = $product;
//             $favor_items['total'] = count($_COOKIE['wishlist']);

//         }
//         return $favor_items;
//     }
// }
    

function addFavor($id) {
    if(isset($_COOKIE['wishlist'])){
        $wishlist = unserialize($_COOKIE['wishlist']);
        $wishlist[$id] = $id;
    } else {
        $wishlist[$id] = $id;
    }
    setcookie('wishlist',serialize($wishlist), time() + 86400*30);
    header("Location:".$_SERVER['HTTP_REFERER']);
}


function getFavorProduct($products) {
    if(isset($_COOKIE['wishlist'])) {
        $favor_items['total'] = 0;
        $unse = unserialize($_COOKIE['wishlist']);
        foreach ($unse as $id => $value) {
            $product = getProduct($products, $id);
            $favor_items['products'][] = $product;
            $favor_items['total'] = count($_COOKIE['wishlist']);

        }
        return $favor_items;
    }
}

// показывает число избранного в верстке
function wishlist_count() {
    if(!empty($_COOKIE['wishlist'])) {
        $unse = unserialize($_COOKIE['wishlist']);
        echo count($unse);
    } else {
        echo "0";
    }
}


/*--------------------------------------------------------------------*/

// обновляем форму с заказом

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['refresh'])) {

    foreach ($_POST['cart_item'] as $id => $amount) {
        if (!empty($id) && !empty($amount)) {
            $id = trim(strip_tags($id));
            $amount = trim(strip_tags($amount));
            $refresh[$id] = $amount;
        }
    }
     setcookie('cart', serialize($refresh), time() + 86400*30);
     header("Location:".$_SERVER['HTTP_REFERER']);
    //refreshCard($id, $amount);
}

function refreshCard($id, $amount) {
    $refresh = unserialize($_COOKIE['cart']);
    $refresh[$id] = $amount;
    
    setcookie('cart', serialize($refresh), time() + 86400*30);
    header("Location:".$_SERVER['HTTP_REFERER']);
}


/*--------------------------------------------------------------------*/

// оформление заказа, покупка

function buy($products) {
    $cart_item = $_POST['cart_item'];
    foreach ($cart_item as $id => $amount) {
        if (!empty($id) && !empty($amount)) {
            $product = getProduct($products, $id);
            $name[] = $product->name;
            $price[] = $product->variant->price;
            $total[] = $product->variant->price * $amount;

            $separated_total = array_sum($total);
            $separated_name = implode("<hr>", $name);
            $separated_price = implode("<hr>", $price);

            $date = date("d-m-Y H:i:s");
            if(!is_dir("files/")) {
                mkdir("files/");
            }
            file_put_contents("files/cart.txt", "$date-|-$separated_name-|-Кол-во: $amount шт-|-Цена за штуку: $separated_price грн-|-Общая стоимость: $separated_total грн\n", FILE_APPEND);
            $_SESSION['order'] = $_POST['cart_item'];

        }
    }
}


function getOrder($products) {

        $cart_items['total'] = 0;
        $cart_items['amount'] = 0;

    if(isset($_SESSION['order'])) {
        $order = $_SESSION['order'];
        foreach ($order as $id => $amount) {
            $product = getProduct($products, $id);
            $product->cart_amount = $amount;
            $cart_items['products'][] = $product;
            $cart_items['total'] += $product->variant->price * $amount;
            $cart_items['amount'] += $amount;

        }
        return $cart_items;
    }
}

/*--------------------------------------------------------------------*/

// Функция транслита

function translit($str) {
    $rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $lat = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    return str_replace($rus, $lat, $str);
  }

/*--------------------------------------------------------------------*/
?>