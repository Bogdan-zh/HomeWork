<?php
class About extends Core
{
    public function fetch()
    {

        $array_vars = array(
            'title' => 'О нас',
        );

        $res = $this->view->render('about.html', $array_vars);

        return $res;
    }
}