<?php

$router->get('/', 'controllers/IndexController.php');
$router->get('/register', 'controllers/RegisterController.php');
$router->get('/login', 'controllers/LoginController.php');
$router->get('/posts', 'controllers/PostController.php');

$router->post('/register', 'controllers/RegisterController.php');
$router->post('/login', 'controllers/LoginController.php');
$router->post('/posts', 'controllers/PostController.php');