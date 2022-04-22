<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Account;

class AccountController extends Controller
{
    public function loginAction()
    {
        if(!empty($_POST)){
            $this->view->redirect('/');
        }
        $this->view->render('Авторизация');
    }

    public function registerAction()
    {
        if (!empty($_POST)){
            $user = new Account();
            $user->loadData($_POST);
        }
        $this->view->render('Регистрация');
    }
}