<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $lists = new Lists();
        $feed = new Feed();
        $request = new Request();

        $lists->enDisDel('products');

        if(isset($_POST['del'])) {
            $lists->singleDel('products');
        }
        
        $products_catalog = $products->getProducts();

        ////////////////////////////// CSV /////////////////////////////////
        $export = '';
        //$request->post('export_products')
        if(isset($_POST['export_products'])) {
            
            $fp = fopen('../products.csv', 'w');

            $csv_headers = array('id','Name','Price','Amount','Description','url','visible','Image','category',);
            $arr = [];
            fputcsv($fp, $csv_headers, ';');
            foreach ($products_catalog as $fields) {
                $id = $fields['id'];
                array_push($fields, $products->getCategoryCurrentProduct($id));
                foreach ($fields as $key => $val) {
                    $v = iconv('UTF-8', 'WINDOWS-1251', $val);
                    $arr[$key] = $v;
                }
                unset($arr['bestseller']);
                fputcsv($fp, $arr, ';');
            }



            // $arr = [];
            // $arr_headers = ["name", "price", "amount", "visible", "image", "description"];
            // fputcsv($fp, $arr_headers, ';');
            // foreach ($products_catalog as $fields) {
            //     $id = $fields['id'];
            //     array_push($fields, $products->getCategoryCurrentProduct($id));
            //     foreach ($fields as $key => $val) {
            //         $v = iconv('UTF-8', 'WINDOWS-1251', $val);
            //         $arr[$key] = $v;
            //     }
                
            //     $keys_end = array_flip($arr_headers); // ключи для итогового массива
            //     $ooo = array_intersect_key($arr, $keys_end);
            //     //unset($arr['bestseller']);
            //     //fputcsv($fp, $ooo, ';');
            //     //print_r($ooo);
            // }



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