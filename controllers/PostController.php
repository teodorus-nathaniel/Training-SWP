<?php

if(Request::isMethod("POST")) {
    header('content-type: application/json');
    $postData = json_decode(file_get_contents('php://input'), true);
    $content = $postData['post'];
    $userId = $postData['userId'];
    echo $connection->addPost($content, $userId);
} else if(Request::isMethod("GET")) {
    header('content-type: application/json');
    echo $connection->getPosts();
} else {
    abort(405);
}