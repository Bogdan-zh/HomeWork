<?php
class Page extends Core
{
    public function fetch()
    {
        $categories = new Categories();
        $all_categories = $categories->getCategories();

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
            //'products' => $products_catalog,
        );

        //print_r($page);

        if(($page['url'])) {
            return $this->view->render('page.html',$array_vars);
        } else {
            //header("http/1.0 404 not found");
            return $this->view->render('error404.html',$array_vars);
        }
    }
}