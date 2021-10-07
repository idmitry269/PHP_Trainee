<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class PostsController extends Controller
{
    public function allAction()
    {
        $result = $this->model->getPosts();
        $vars = [
            'posts' => $result,
        ];
        $this->view->render('Все посты', $vars);
    }
}