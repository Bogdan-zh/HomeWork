<?php
class Product extends Core
{
    public function fetch() // НЕ РАБОТАЕТ
    {
        $categories = new Categories();
        $all_categories = $categories->getCategories();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();
        $products_catalog = $products->getProducts();
        $product = new stdClass();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if(isset($parts[1])) {
            $product = $products->getProduct($request->get('url', 'string'), 'url');
        }

        $array_vars = array(
            //'page' => $page,
            'categories' => $all_categories,
            'pages' => $all_pages,
            'products' => $products_catalog,
            'product' => $product,
        );

        return $this->view->render('product.html',$array_vars);
        
    }
}