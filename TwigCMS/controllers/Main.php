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
            $carts->addToCart('cart'); // добавление товара в корзину с главной страницы
        }

        $cart = $carts->getCart();

        $amount_in_cart = $carts->cart_count();
        $total = $carts->cart_total();

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