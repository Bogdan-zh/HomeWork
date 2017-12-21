<?php
class Login extends Core
{
    public function fetch()
    {

        $array_vars = array(
            'title' => 'Авторизация',
        );

        $res = $this->view->render('login.html', $array_vars);

        return $res;
    }
}