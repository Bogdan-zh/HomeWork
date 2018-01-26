<?php
class ProductAdmin extends CoreAdmin
{
    public function fetch()
    {
        $products = new Products(); // подключаем модель Товары
        $request = new Request();  // подключаем модель Запрос
        $images = new Images();
        
        $product = new stdClass();

        $categories = new Categories();
        $all_categories = $categories->getCategories();

        if($request->method() == 'POST') {
            if($request->post('name')) {
                $product->name = $request->post('name');
                $product->price = $request->post('price');
                $product->amount = $request->post('amount');
                $product->description = $request->post('description');
                $product->visible = $request->post('visible','integer');
                $product->bestseller = $request->post('bestseller','integer');

                if(empty($request->post('url'))) {
                    $product->url = CoreAdmin::translit($request->post('name'));
                } else {
                    $product->url = $request->post('url');
                }

                if($request->post('id','integer')) {
                    $id = $products->updateProduct($request->post('id','integer'),$product); // обновляем изменения товара
                } else {
                    $id = $products->addProduct($product); //Добавление нового товара
                    $products->productsCategories($id, 'set'); // устанавливаем категорию для нового товара
                }
                $products->productsCategories($id, 'update'); // обновляем категорию товара

                $images->uploadImage($id, 'products'); // загружается картинка товара

                if($request->post('del')) { 
                    $images->delImages($id, 'products'); // удаляем картинку товара
                }

                $product = $products->getProduct($id);
            } else { 
                echo 'Введите название товара';
            }
        } elseif($request->get('id', 'integer')) {
            $product = $products->getProduct($request->get('id', 'integer')); // просто заходим в настройки товара
            $id = $request->get('id');
        }

        $selected_category = $products->getProductCategories($request->get('id', 'integer'));

        $array_vars = array(
            'product' => $product,
            'categories' => $all_categories,
            'selected_category' => reset($selected_category),
        );

        return $this->view->render('product.html',$array_vars);
    }


}