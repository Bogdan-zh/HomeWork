<?php
class Product extends Core
{
    public function fetch() // НЕ РАБОТАЕТ
    {
        $categories = new Categories();
        $all_categories = $categories->getCategories();

        $categories_catalog_tree = $categories->GetCategoriesTree();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        if(isset($parts[2])) {
            $product = $products->getProduct($parts[2], 'url');
        }

        $array_vars = array(
            'categories' => $all_categories,
            'pages' => $all_pages,
            'product' => $product,
            'categories_tree' => $categories_catalog_tree,
        );

        if($product) {
            return $this->view->render('product.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
        
    }
}