<?php

session_destroy();
setcookie('id', '', time() - 3600);
header('Location: /');