<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,DELETE,PUT');
header('Access-Control-Allow-Headers: *');
include_once('core/bootstrap.php');

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());