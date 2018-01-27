<?php
class Main extends Core
{
    public function fetch()
    {
        $categories = new Categories();
        $all_categories = $categories->getCategories();
        $categories_catalog_tree = $categories->GetCategoriesTree();

        $products = new Products();
        $products_catalog = $products->getProducts();

        $pages = new Pages();
        $all_pages = $pages->getPages();

        $array_vars = array(
            'name' => 'Главная страница магазина',
            'categories' => $all_categories,
            'products' => $products_catalog,
            'pages' => $all_pages,
            'categories_tree' => $categories_catalog_tree,
        );

        return $this->view->render('main.html',$array_vars);
    }
}