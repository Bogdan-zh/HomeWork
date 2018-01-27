<?php
class Page extends Core
{
    public function fetch()
    {
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

        $array_vars = array(
            'page' => $page,
            'categories' => $all_categories,
            'pages' => $all_pages,
            'categories_tree' => $categories_catalog_tree,
        );

        if($page) {
            return $this->view->render('page.html',$array_vars);
        } else {
            header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
    }
}