<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="stylesheet" href="/public/css/<?= $page_css ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a class="logo" href="/">
            <img src="/public/img/logo.svg" alt="logo">
            <span class="bold">Posting</span>
        </a>
        <div class="links">
            <?php if(!isset($_SESSION['user'])) { ?>
                <a href="/register" class="alt">Join Us</a>
                <a href="/login">Login</a>
            <?php } else { ?>
                <a href="/logout">Logout</a>
            <?php } ?>
        </div>
    </nav>