<?php

if(!isset($_SESSION['user'])) {
    http_response_code(401);
    echo json_encode([ 'status' => 'fail', 'message' => 'Login first' ]);
    return;
}

if(Request::isMethod("POST")) {
    header('content-type: application/json');
    $postData = json_decode(file_get_contents('php://input'), true);
    $content = $postData['post'];
    echo $connection->addPost($content, $_SESSION['user']->id);
} else if(Request::isMethod("GET")) {
    header('content-type: application/json');
    echo json_encode($connection->getPosts());
} else {
    abort(405);
}