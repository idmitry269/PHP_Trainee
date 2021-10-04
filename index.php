<?php

declare(strict_types=1);

require 'application/lib/Dev.php';

use application\core\Router;


spl_autoload_register(function ($class) {
    $file_path = str_replace('\\', '/', $class.'.php');
    if (file_exists($file_path)) {
        require $file_path;
    };
});

session_start();

$router = new Router();
$router->run();
