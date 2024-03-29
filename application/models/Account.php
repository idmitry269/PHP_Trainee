<?php

namespace application\models;

use application\core\Model;

class Account extends Model
{
    public $error;

    public function validate($input, $post): bool
    {
        $rules = [
            'login' => [
                'pattern' => '#^[a-zA-Z0-9]{3,15}$#',
                'message' => 'Логин указан неверно (разрешены только латинские буквы и цифры от 3 до 15 символов',
            ],
            'email' => [
                'pattern' => '#^([a-zA-Z0-9_.-]{1,20}+)@([a-z0-9_.-]+)\.([a-z\.]{2,10})$#',
                'message' => 'E-mail адрес указан неверно',
            ],
            'password' => [
                'pattern' => '#^[a-zA-Z0-9]{10,30}$#',
                'message' => 'Пароль указан неверно (разрешены только латинские буквы и цифры от 10 до 30 символов',
            ],
            'username' => [
                'pattern' => '#^[a-zA-Z0-9]{3,15}$#',
                'message' => 'Имя указано неверно (разрешены только латинские буквы и цифры от 3 до 15 символов',
            ],
            'surname' => [
                'pattern' => '#^[a-zA-Z0-9]{3,15}$#',
                'message' => 'Фамилия указана неверно (разрешены только латинские буквы и цифры от 3 до 15 символов',
            ],
        ];
        foreach ($input as $val) {
            if (!isset($post[$val]) or !preg_match($rules[$val]['pattern'], $post[$val])) {
                $this->error = $rules[$val]['message'];
                return false;
            }
        }
        return true;
    }

    public function checkEmailExists($email)
    {
        $params = [
            'email' => $email,
        ];
        return $this->db->column('SELECT id FROM users WHERE email = :email', $params);
    }

    public function checkLoginExists($login): bool
    {
        $params = [
            'login' => $login,
        ];
        if ($this->db->column('SELECT id FROM users WHERE login = :login', $params)) {
            $this->error = 'Этот логин уже используется';
            return false;
        }
        return true;
    }

    public function register($post, $avatar)
    {
        $params = [
            'login' => $post['login'],
            'email' => $post['email'],
            'password' => password_hash($post['password'], PASSWORD_BCRYPT),
            'username' => $post['username'],
            'surname' => $post['surname'],
        ];
        if (!empty($avatar)) {
            $params['avatar'] = $avatar;
            $sqlAvaIns = ', avatar';
            $sqlAvaVal = ', :avatar';
        } else {
            $sqlAvaIns = '';
            $sqlAvaVal = '';
        }
        $this->db->query('INSERT INTO users (login, email, password, username, surname' . $sqlAvaIns . ') VALUES (:login, :email, :password, :username, :surname' . $sqlAvaVal . ')', $params);
    }

    public function checkData($login, $password): bool
    {
        $params = [
            'login' => $login,
        ];
        $hash = $this->db->column('SELECT password FROM users WHERE login = :login', $params);
        if (!$hash or !password_verify($password, $hash)) {
            return false;
        }
        return true;
    }

    public function login($login)
    {
        $params = [
            'login' => $login,
        ];
        $data = $this->db->row('SELECT * FROM users WHERE login = :login', $params);
        $_SESSION['account'] = $data[0];
    }

    public function save($post, $avatar)
    {
        $params = [
            'id' => $_SESSION['account']['id'],
            'email' => $post['email'],
            'username' => $post['username'],
            'surname' => $post['surname'],
        ];
        if (!empty($post['password'])) {
            $params['password'] = password_hash($post['password'], PASSWORD_BCRYPT);
            $sqlPass = ',password = :password';
        } else {
            $sqlPass = '';
        }
        if (!empty($avatar)) {
            $params['avatar'] = $avatar;
            $sqlAva = ', avatar = :avatar';
        } else {
            $sqlAva = '';
        }
        foreach ($params as $key => $val) {
            $_SESSION['account'][$key] = $val;
        }
        $this->db->query('UPDATE users SET email = :email, username = :username, surname = :surname' . $sqlAva . $sqlPass . ' WHERE id = :id', $params);
    }
}
