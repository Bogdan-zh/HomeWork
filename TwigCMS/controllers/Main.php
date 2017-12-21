<?php
class Main extends Core
{
    public function fetch()
    {


        $array_vars = array(
            'title' => 'Главная страница интернет магазина',
        );

        $res = $this->view->render('main.html', $array_vars);

        return $res;
    }
}