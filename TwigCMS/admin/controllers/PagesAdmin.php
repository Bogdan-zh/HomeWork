<?php
class PagesAdmin extends CoreAdmin
{
	public function fetch()
	{
		$pages = new Pages();
		$lists = new Lists();
		///////////////////////
		$all_pages = $pages->getPages();

		if(isset($_POST['del'])) {
            Lists::singleDel('pages');
        }

		Lists::enDisDel('pages');

		$array_vars = array(
            'pages' => $all_pages,
            'name' => 'Страницы'
        );

        return $this->view->render('pages.html',$array_vars);
	}
}