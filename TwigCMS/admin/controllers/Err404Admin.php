<?php
class Err404 extends CoreAdmin
{
    public function fetch()
    {

        $array_vars = array(
            'title' => 'Ошибка 404. Такой страницы не существует, либо еще не создана',
        );

        $res = $this->view->render('404.html', $array_vars);

        return $res;
    }
}