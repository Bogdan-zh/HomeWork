<?php
class Main extends Core
{
    public function fetch()
    {
        $carts = new Carts();
        $request = new Request();

        $categories = new Categories();
        $all_categories = $categories->getCategories(); // список всех категорий (массив)
        $categories_catalog_tree = $categories->GetCategoriesTree(); // построение дерева категорий

        $products = new Products();
        $products_catalog = $products->getProducts(); // список всех товаров (массив)

        $pages = new Pages();
        $all_pages = $pages->getPages(); // список всех страниц (массив)


        if($request->post('to_cart')) {
            $id = $request->post('id', 'integer');
            $amount = 1;

            $carts->addToCart($id, $amount); // добавление товара в корзину с главной страницы
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        $cart = $carts->getCart();
        $amount_in_cart = $cart['amount'];
        $total = $cart['total'];

        $array_vars = array(
            'name' => 'Главная страница магазина',
            'categories' => $all_categories,
            'products' => $products_catalog,
            'pages' => $all_pages,
            'categories_tree' => $categories_catalog_tree,
            'amount_in_cart' => $amount_in_cart,
            'total' => $total,
            'cart_products' => $cart['products'],
        );

        return $this->view->render('main.html',$array_vars);
    }
}