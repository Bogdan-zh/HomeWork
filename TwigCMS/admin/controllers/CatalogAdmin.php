<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $lists = new Lists();
        $feed = new Feed();

        $lists->enDisDel('products');

        if(isset($_POST['del'])) {
            $lists->singleDel('products');
        }
        
        $products_catalog = $products->getProducts();

        ////////////////////////////// CSV /////////////////////////////////
        // $f = serialize($products_catalog);
        // var_dump(iconv('UTF-8', 'WINDOWS-1251', $f));
        // $products_catalog1 = unserialize($f);
        
        $export = '';
        if(isset($_POST['export_products'])) {
            
            $fp = fopen('../products.csv', 'w');
            fputcsv($fp, array('id','Name','Price','Amount','Description','url','Visible','Bestseller','Image'), ';', '"');
            foreach ($products_catalog as $fields) {
                fputcsv($fp, $fields, ';', '"');
            }
            fclose($fp);
            $export = "Товары экспортированы в корень сайта!";
        }
        
        // $t = file_get_contents('../file.csv');
        // echo mb_detect_encoding($t);


        ////////////////////////////// XML /////////////////////////////////

        $feed1 = '';
        if(isset($_POST['feed'])) {
            $feed->createFeed();
            $feed1 = "../feed.xml";
        }



        $array_vars = array(
            'name' => 'Товары',
            'products' => $products_catalog,
            'export' => $export,
            'feed' => $feed1,

        );

        return $this->view->render('catalog.html',$array_vars);
    }
}