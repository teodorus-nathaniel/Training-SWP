<?php
  if ( !function_exists('dd') ):
    function dd ($mix)
    {
      return die(json_encode(var_dump($mix)));
    }
  endif;

  if ( !function_exists('str_random') ):
    function str_random (int $length)
    {
      return bin2hex(openssl_random_pseudo_bytes($length/2));
    }
  endif;

  if ( !function_exists('abort') ):
    function abort (int $code)
    {
      return require_once("views/errors/$code.php");
    }
  endif;

  if ( !function_exists('bcrypt') ):
    function bcrypt (string $plain)
    {
      return password_hash($plain, PASSWORD_DEFAULT);
    }
  endif;