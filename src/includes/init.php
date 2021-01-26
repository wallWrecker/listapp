<?php 
  $_SESSION['session_id'] = ""; //session_id is the admin id.
  $_SESSION['permission'] = "";

  class Lookup_Directories {

    public static function generatePath($type = "javascript", $path, $level = 1) {
      $types = ["javascript","css","vendor"];
      foreach($types as $items) {
        if ($type == $items) {
          // generatePath
          return realpath(dirname(__FILE__, $level) . $path);
        }
      }
    }

    public function sayHi() {
      echo "Hello There!!";
    }
  }
  
  $_SESSION['username'] = $username ?? "";
  
  class Session {
    public $usernames = ["sara", "sora", "tiagra", "claris", "tourney"];
    public $current_session = "";
    public $role = "";

    public function check_session_if_active() {
      if ($this->current_session === "") {
        // Redirect to login page (login.php)
        header("location:src/pages/login.php");
        return;
      }
      return true;
    }

    public function setSession($session_token, $type = "admin") {
      // check if a given token_name(token)n is present on database
      
    }
  }

  class Message {
    public function danger_message($message) {
        return "<p class=\"alert alert-danger\">" . $message . "</p>";
    }
    public function success_message($message) {
        return "<p class=\"alert alert-success\">" . $message . "</p>";
    }
  }

  class FormatString {
    public function sanitize_data($data) {
      $data = htmlspecialchars($data);
      $data = trim($data);
      return $data;
    }
  }
  
  defined("PATH_TO_JAVASCRIPT") or define("PATH_TO_JAVASCRIPT", realpath(dirname(__FILE__)) . "/js");
  
  // define lookup_directories class.
  $lookup = "Lookup_Directories";
  $lookup::generatePath("javascript","/js/index.js", 2);

  // Instantiate Session class
  $session = new Session;
?>