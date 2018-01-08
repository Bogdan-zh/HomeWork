<?php
class Main extends Core
{
    public function fetch()
    {
    	$categories = new Categories();
		$all_categories = $categories->getCategories();

		$products = new Products();
		$products_catalog = $products->getProducts();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $array_vars = array(
            'name' => 'Главная страница магазина',
            'categories' => $all_categories,
            'products' => $products_catalog,
            'pages' => $all_pages,
        );

        return $this->view->render('main.html',$array_vars);
    }
}