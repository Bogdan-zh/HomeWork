<?php
class Contact extends Core
{
    public function fetch()
    {

        $array_vars = array(
            'title' => 'Контакты',
        );

        $res = $this->view->render('contact.html', $array_vars);

        return $res;
    }
}