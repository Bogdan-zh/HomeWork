<?php
class CategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories();
        $lists = new Lists();
        ///////////////////////
        $all_categories = $categories->getCategories();

        if(isset($_POST['del'])) {
            Lists::singleDel('categories');
        }

        Lists::enDisDel('categories');

        $array_vars = array(
            'categories' => $all_categories,
            'name' => 'Категории'
        );

        

        return $this->view->render('categories.html',$array_vars);
    }
}