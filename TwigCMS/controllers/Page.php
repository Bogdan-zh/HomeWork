<?php
class Page extends Core
{
    public function fetch()
    {
        $request = new Request();
        $carts = new Carts();
        
        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $categories_catalog_tree = $categories->GetCategoriesTree();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();
        $products_catalog = $products->getProducts();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if(isset($parts[1])) {
            $page = $pages->getPage($parts[1], 'url');
        }

        $cart = $carts->getCart();
        $amount_in_cart = $cart['amount'];
        $total = $cart['total'];

        $array_vars = array(
            'page' => $page,
            'categories' => $all_categories,
            'pages' => $all_pages,
            'categories_tree' => $categories_catalog_tree,
            'amount_in_cart' => $amount_in_cart,
            'total' => $total,
        );

        if($page) {
            return $this->view->render('page.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
    }
}