<?php

namespace application\models;

use application\core\Model;

class Account extends Model
{

    public function loadData($data)
    {
            $this->db->query('INSERT INTO users (login, email, password, username, surname) VALUES (:login, :email, :password, :username, :surname)', $data);
    }
}

