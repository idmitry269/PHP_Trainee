<?php

namespace application\core;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = require 'application/views/posts/posts.php';
    }
}