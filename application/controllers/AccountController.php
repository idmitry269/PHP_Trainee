<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Account;

class AccountController extends Controller
{

    public $avaName;

    public function loginAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->validate(['login', 'password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }
            elseif (!$this->model->checkData($_POST['login'], $_POST['password'])) {
                $this->view->message('error', 'Логин или пароль указан неверно');
            }
            $this->model->login($_POST['login']);
            $this->view->location('/');
        }
        $this->view->render('Вход');
    }

    public function registerAction()
    {
        if (!empty($_POST)){
                if (!$this->model->validate(['email', 'login', 'password', 'username', 'surname'], $_POST)) {
                    $this->view->message('error', $this->model->error);
                }
                elseif ($this->model->checkEmailExists($_POST['email'])) {
                    $this->view->message('error', 'Этот E-mail уже используется');
                }
                elseif (!$this->model->checkLoginExists($_POST['login'])) {
                    $this->view->message('error', $this->model->error);
                }
                if ($_FILES['avatar']['name'] !== '') {
                    $avatar = $_FILES['avatar'];
                    $this->avaName = $_POST['login'].'_avatar.jpg';
                    if (!move_uploaded_file($avatar['tmp_name'], 'public/avatars/'.$this->avaName)) {
                        $this->view->message('error', 'Не удалось загрузить изображение');
                    }
                }
                $this->model->register($_POST, $this->avaName);
                $this->view->message('success', 'Регистрация завершена');

        }
        $this->view->render('Регистрация');
    }

    public function logoutAction()
    {
        unset($_SESSION['account']);
        $this->view->redirect('/');
    }

    public function profileAction()
    {
        if (!empty($_POST)) {
            if (!$this->model->validate(['email', 'username', 'surname'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $id = $this->model->checkEmailExists($_POST['email']);
            if ($id and $id != $_SESSION['account']['id']) {
                $this->view->message('error', 'Этот E-mail уже используется');
            }
            if (!empty($_POST['password']) and !$this->model->validate(['password'], $_POST)) {
                $this->view->message('error', $this->model->error);
            }
            if ($_FILES['avatar']['name'] !== '') {
                $avatar = $_FILES['avatar'];
                $this->avaName = $_SESSION['account']['login'].'_avatar.jpg';
                if (!move_uploaded_file($avatar['tmp_name'], 'public/avatars/'.$this->avaName)) {
                    $this->view->message('error', 'Не удалось загрузить изображение');
                }
            }
            $this->model->save($_POST, $this->avaName);
            $this->view->message('success', 'Изменения сохранены');
        }
        $this->view->render('Профиль');
    }

}