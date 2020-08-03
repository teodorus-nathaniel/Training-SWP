<?php

$title = 'Form';
$page_css = 'post.css';

if(!isset($_SESSION['user'])) {
    header('Location: /login');
    return;
}

if(Request::isMethod("GET")) {
    $posts = $connection->getPosts();
    $userId = $_SESSION["user"]->id;
    include_once('./views/layouts/header.php');
    include_once('./views/form.php');
    include_once('./views/layouts/footer.php');
} else if(Request::isMethod("POST")) {
    $content = $_POST['post'];
    $userId = $_POST['userId'];
    $connection->addPost($content, $userId);
    exit(header('Location: /form'));
} else {
    abort(405);
}