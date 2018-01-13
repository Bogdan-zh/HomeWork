<?php
class CategoriesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $categories = new Categories();
        $lists = new Lists();
        ///////////////////////

        $lists->enDisDel('categories');

        if(isset($_POST['del'])) {
            $lists->singleDel('categories');
        }
        
        $all_categories = $categories->getCategories();

        $array_vars = array(
            'categories' => $all_categories,
            'name' => 'Категории'
        );

        

        return $this->view->render('categories.html',$array_vars);
    }
}