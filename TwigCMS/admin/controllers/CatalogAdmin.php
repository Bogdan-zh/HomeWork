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
        $export = '';
        if(isset($_POST['export_products'])) {
            
            $fp = fopen('../products.csv', 'w');

            // НАВЕРНОЕ ИЗВРАЩЕНСКИЙ СПОСОБ, НО ТОЛЬКО ОН РАБОТАЕТ
            $csv_headers = array('id','Name','Price','Amount','Description','url','visible','Image');
            $arr = [];
            fputcsv($fp, $csv_headers, ';');
            foreach ($products_catalog as $fields) {
                foreach ($fields as $key => $val) {
                    $v = iconv('UTF-8', 'WINDOWS-1251', $val);
                    $arr[$key] = $v;
                }
                unset($arr['bestseller']);
                fputcsv($fp, $arr, ';');
            }

            fclose($fp);

            $export = "Товары экспортированы в корень сайта!";
        }

        ////////////////////////////// XML /////////////////////////////////

        $feed_link = '';
        if(isset($_POST['feed'])) {
            $feed->createFeed();
            $feed_link = "../feed.xml";
        }



        $array_vars = array(
            'name' => 'Товары',
            'products' => $products_catalog,
            'export' => $export,
            'feed' => $feed_link,

        );

        return $this->view->render('catalog.html',$array_vars);
    }
}