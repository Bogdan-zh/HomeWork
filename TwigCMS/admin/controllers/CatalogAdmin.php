<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $lists = new Lists();

        $lists->enDisDel('products');

        if(isset($_POST['del'])) {
            $lists->singleDel('products');
        }
        
        $products_catalog = $products->getProducts();

        $array_vars = array(
            'name' => 'Товары',
            'products' => $products_catalog,
        );

        return $this->view->render('catalog.html',$array_vars);
    }
}