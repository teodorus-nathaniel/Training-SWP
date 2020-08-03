<?php
  require_once('core/Connection.php');
  require_once('core/Router.php');
  require_once('core/Request.php');
  require_once('core/utilities.php');

  $_server_   = 'localhost:3306';
  $_username_ = 'root';
  $_password_ = '';
  $_database_ = 'prk';


  $connection = Connection::getInstance(
    $_server_, 
    $_username_, 
    $_password_, 
    $_database_);