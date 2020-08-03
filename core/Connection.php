<?php
  class Connection
  {
    private static $connection;
    private $mysqli;

    private function __construct(string $server, string $username, string $password,  string $database)
    {
      $this->mysqli = mysqli_connect($server, $username, $password, $database)
          or die('set your database configuration : ' . __DIR__ . "/bootstrap.php");
    }

    public static function getInstance(string $server, string $username, string $password,  string $database)
    {
      if (!isset($connection)) 
        $connection = new Connection($server, $username, $password, $database);

      return $connection;
    }

    public function login(string $username, string $password)
    {
      $query = "SELECT *
        FROM `user`
        WHERE `username` = '$username'
        AND `password` = '$password'";

      $result = $this->mysqli->query($query);

      $user = null;
      if ($result->num_rows !== 0) {
        $user = mysqli_fetch_object($result);
      }

      return $user;
    }

    public function getUser(string $id) {
      $query = "SELECT *
        FROM `user`
        WHERE `id` = $id";

      $result = $this->mysqli->query($query);

      $user = null;
      if ($result->num_rows !== 0) {
        $user = mysqli_fetch_object($result);
      }

      return $user;
    }

    public function register(string $username, string $password, string $confirm_pass)
    {
      if($password !== $confirm_pass) {
        exit(header("Location: /register?err=1"));
        return;
      }

      $query = "SELECT * FROM `user` WHERE `username` = '$username'";
      $result = $this->mysqli->query($query);

      if($result->num_rows !== 0) {
        exit(header("Location: /register?err=3"));
        return;
      }
      
      $query = "INSERT INTO `User` (`username`, `password`) VALUES (
        '$username', '$password'
      )";

      $result = $this->mysqli->query($query);
      if($result) {
        exit(header("Location: /login"));
      } else {
        exit(header("Location: /register?err=2"));
      }
    }

    public function addPost(string $content, string $userId) {
      $query = "SELECT * FROM `user` WHERE `id` = '$userId'";
      $result = $this->mysqli->query($query);

      if($result->num_rows === 0) {
        return json_encode([ 'status' => 'fail', 'message' => 'user does not exist' ]);
      }

      $timestamp = date("d-m-Y h:i");
      $query = "INSERT INTO `post` (`content`, `user_id`, `timestamp`) VALUES ('$content', '$userId', '$timestamp')";

      $res = $this->mysqli->query($query);

      if($res) {
        return json_encode([ 'status' => 'success' ]);
      } else {
        return json_encode([ 'status' => 'fail' ]);
      }
    }

    public function getPosts() {
      $query = "SELECT `username`, `content`, `timestamp` FROM `post` p JOIN `user` u ON u.id = p.user_id";
      $result = $this->mysqli->query($query);

      $posts = [];
      while($row = mysqli_fetch_object($result)) {
        array_push($posts, $row);
      }

      return array_reverse($posts);
    }
  }
  
