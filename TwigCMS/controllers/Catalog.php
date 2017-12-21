<?php
class Catalog extends Core
{
    public function fetch()
    {


        $array_vars = array(
            'title' => 'Тут вывод всех товаров',
        );

        $res = $this->view->render('catalog.html', $array_vars);

        return $res;
    }
}