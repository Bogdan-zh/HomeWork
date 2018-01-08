<?php
class PageAdmin extends CoreAdmin
{
    public function fetch()
    {
        $pages = new Pages(); // подключаем модель Страницы
        $request = new Request();  // подключаем модель Запрос
        ////////////////////////////
        $page = new stdClass();

        if($request->method() == 'POST') {
            
            $page->name = $request->post('name');
            $page->description = $request->post('description');
            $page->visible = $request->post('visible','integer');

            if(empty($request->post('url'))) {
                $page->url = CoreAdmin::translit($request->post('name'));
            } else {
                $page->url = $request->post('url');
            }

            if($request->post('id','integer')) {
                $id = $pages->updatePage($request->post('id','integer'),$page);

            } else {
                //Добавление страницы
                $id = $pages->addPage($page);
            }

            $page = $pages->getPage($id);
        } elseif($request->get('id', 'integer')) {
            $page = $pages->getPage($request->get('id', 'integer'));
        }

        $array_vars = array(
            'page' => $page,
        );

        return $this->view->render('page.html',$array_vars);
    }
}