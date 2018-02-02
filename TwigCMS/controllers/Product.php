<?php
class Product extends Core
{
    public function fetch()
    {
        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $categories_catalog_tree = $categories->GetCategoriesTree();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();

        $carts = new Carts();
        $request = new Request();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if(isset($parts[2])) {
            $product = $products->getProduct($parts[2], 'url'); // получаем текущий товар
        }

        if($request->post('to_cart')) {
            $id = $request->post('id', 'integer');
            $amount = $request->post('amount', 'integer');

            $carts->addToCart($id, $amount); // добавление товара в корзину с главной страницы
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        $cart = $carts->getCart();
        $amount_in_cart = $cart['amount'];
        $total = $cart['total'];

        $array_vars = array(
            'categories' => $all_categories,
            'pages' => $all_pages,
            'product' => $product,
            'categories_tree' => $categories_catalog_tree,
            'amount_in_cart' => $amount_in_cart,
            'total' => $total,
        );

        if($product) {
            return $this->view->render('product.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}