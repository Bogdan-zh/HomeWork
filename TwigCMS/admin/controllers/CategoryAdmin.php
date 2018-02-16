<?php
class CategoryAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories(); // подключаем модель Категории
        $request = new Request();  // подключаем модель Запрос
        $images = new Images();

        $categories = new Categories();
        $all_categories = $categories->getCategories();
        
        $category = new stdClass();

        if($request->method() == 'POST') {
            
            $category->name = $request->post('name');
            $category->description = $request->post('description');
            $category->visible = $request->post('visible','integer');
            $category->parent_id = $request->post('parent_id');

            if(empty($request->post('url'))) {
                $category->url = CoreAdmin::translit($request->post('name'));
            } else {
                $category->url = CoreAdmin::translit($request->post('url'));
            }

            if($request->post('id','integer')) {
                $id = $categories->updateCategory($request->post('id','integer'),$category);

            } else {
                //Добавление страницы
                $id = $categories->addCategory($category);
            }

            $images->uploadImage($id, 'categories'); // загружается картинка

            if($request->post('del')) { // удаляем картинку
                $images->delImages($id, 'categories');
            }

            $category = $categories->getCategory($id);
        } elseif($request->get('id', 'integer')) {
            $category = $categories->getCategory($request->get('id', 'integer'));
        }

        $array_vars = array(
            'category' => $category,
            'categories' => $all_categories,
        );

        return $this->view->render('category.html',$array_vars);
    }
}