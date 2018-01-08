<?php
class Error404 extends Core
{
    public function fetch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI']);
        $parts = explode('/',$uri['path']);
        $pages = new Pages();
        if ($parts[1])
        {
            $page = $pages->getPage($parts[1],'url');
            if (empty($page))
            {
                $array_vars = array(
                    'errors' => 404,
                    'title' => 'Ошибка 404. Эта страница не существует',
                );
                header("http/1.0 404 not found");
                return $this->view->render('error404.html', $array_vars);
            }
            else
            {
                $array_vars = array(
                    'page' => $page,
                );
                return $this->view->render('pages.html', $array_vars);
            }
        }
        $array_vars = array(

            'errors' => 404,
        );
        return $this->view->render('error404.html', $array_vars);
    }
}