<?php
  class Router
  {
    public $routes = [
      'GET' => [],
      'POST' => [],
      'PUT' => [],
      'PATCH' => [],
      'DELETE' => []
    ];

    public static function load($file)
    {
      $router = new self;
      require_once($file);
      return $router;
    }

    public function get($uri, $controller)
    {
      
      $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
      $this->routes['POST'][$uri] = $controller;
    }

    public function put($uri, $controller)
    {
      $this->routes['PUT'][$uri] = $controller;
    }

    public function patch($uri, $controller)
    {
      $this->routes['PATCH'][$uri] = $controller;
    }

    public function delete($uri, $controller)
    {
      $this->routes['DELETE'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
      if(array_key_exists($uri, $this->routes[$method]))
      {
        return $this->routes[$method][$uri];
      }
      
      return 'controllers/PageNotFoundController.php';
    }
  }