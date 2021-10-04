<?php

namespace application\models;

use application\core\Model;

class Posts extends Model
{

    public function getPosts()
    {
        $result = $this->db;
        return $result;
    }
}