<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $lists = new Lists();
        $database = new Database();
        
        $products_catalog = $products->getProducts();

        if(isset($_POST['del'])) {
            Lists::singleDel('products');
        }

        Lists::enDisDel('products');


        $array_vars = array(
            'name' => 'Товары',
            'products' => $products_catalog,
        );

        return $this->view->render('catalog.html',$array_vars);
    }
}