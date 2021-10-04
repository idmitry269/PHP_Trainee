<?php

namespace application\controllers;


use application\core\Controller;

class UserController extends Controller
{
    public function profileAction()
    {
        $this->view->render('Профиль');
    }
}