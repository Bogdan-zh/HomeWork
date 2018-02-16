<?php
class CatalogAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products();
        $lists = new Lists();
        $request = new Request();

        $lists->enDisDel('products');

        if(isset($_POST['del'])) {
            $lists->singleDel('products');
        }
        
        $products_catalog = $products->getProducts();

        ////////////////////////////// CSV /////////////////////////////////
        $export = '';
        
        if($request->post('export_products')) {
            
            $fp = fopen('../products.csv', 'w');

            $csv_headers = array('id','Name','Price','Amount','Description','url','visible','Image','category');
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

            fclose($fp);

            $export = "Товары экспортированы в корень сайта!";
        }


        $array_vars = array(
            'name' => 'Товары',
            'products' => $products_catalog,
            'export' => $export,
        );

        return $this->view->render('catalog.html',$array_vars);
    }
}