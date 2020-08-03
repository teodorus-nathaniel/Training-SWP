<?php

$title = 'Login';
$page_css = 'card-form.css';

if(isset($_SESSION['user'])) {
    header('Location: /');
    return;
}

if(Request::isMethod("GET")) {
    include_once('./views/layouts/header.php');
    include_once('./views/login.php');
    include_once('./views/layouts/footer.php');
} else if(Request::isMethod("POST")) {
    $user = $connection->login($_POST['username'], $_POST['password']);
    if ($user !== null) {
        $_SESSION['user'] = $user;
        setcookie('id', $user->id, time()+3600*24);
        exit(header('Location: /'));
    }
    exit(header('Location: /login?err=1'));
} else {
    abort(405);
}