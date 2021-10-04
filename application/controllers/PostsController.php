<?php

namespace application\controllers;

use application\core\Controller;

class PostsController extends Controller
{
    public function allAction()
    {
        $result = $this->model->getPosts();
        $vars = [
            'all' => $result,
        ];
        $this->view->render('Все посты', $vars);
    }
}