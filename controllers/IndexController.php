<?php

if(isset($_SESSION['user'])) {
    $title = "Posts";
    $page_css = 'post.css';
    
    include_once("./views/layouts/header.php");
    include_once("./views/post.php");
    include_once("./views/layouts/footer.php");
} else {
    $title = 'Home';
    $page_css = 'home.css';
    
    include_once('./views/layouts/header.php');
    include_once('./views/index.php');
    include_once('./views/layouts/footer.php');
}
