<?php

$title = 'Register';
$page_css = 'card-form.css';

if(Request::isMethod("GET")) {
    include_once('./views/layouts/header.php');
    include_once('./views/register.php');
    include_once('./views/layouts/footer.php');
} else if(Request::isMethod("POST")) {
    $connection->register($_POST['username'], $_POST['password'], $_POST['conf-pass']);
} else {
    abort(405);
}