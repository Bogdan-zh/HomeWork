<?php
class Catalog extends Core
{
    public function fetch() // НЕ РАБОТАЕТ
    {
        $request = new Request();
        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $catalog = new stdClass();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $products = new Products();
        $products_catalog = $products->getProducts();

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/', $uri['path']);

        //if(isset($parts[2])) {
            $catalog = $categories->getCategory($request->get('url', 'string'), 'url');
        //}
            //$catalog->name = $request->get('url', 'string');
            print_r($request->get('url', 'string'));

        $array_vars = array(
            'catalog' => $catalog,
            'categories' => $all_categories,
            'pages' => $all_pages,
            'products' => $products_catalog,
        );

        return $this->view->render('catalog.html',$array_vars);
        
    }
}