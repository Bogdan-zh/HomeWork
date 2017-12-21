<?php
class Register extends Core
{
    public function fetch()
    {

        $array_vars = array(
            'title' => 'Регистрация',
        );

        $res = $this->view->render('register.html', $array_vars);

        return $res;
    }
}