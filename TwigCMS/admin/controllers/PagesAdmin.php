<?php
class PagesAdmin extends CoreAdmin
{
    public function fetch()
    {
        $pages = new Pages();
        $lists = new Lists();
        ///////////////////////

        $lists->enDisDel('pages');

        if(isset($_POST['del'])) {
            $lists->singleDel('pages');
        }
        
        $all_pages = $pages->getPages();

        $array_vars = array(
            'pages' => $all_pages,
            'name' => 'Страницы'
        );

        return $this->view->render('pages.html',$array_vars);
    }
}