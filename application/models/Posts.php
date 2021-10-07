<?php

namespace application\models;

use application\core\Model;

class Posts extends Model
{

    public function getPosts()
    {
        $result = $this->db->row('SELECT title, content FROM posts');
        return $result;
    }
}