<?php
session_start();

  include "../includes/init.php"; 
  include "login_function.php";

  if (isset($_GET['id']) && isset($_GET['password'])) {
    if (empty($_GET['id']) && empty($_GET['password'])) {
      echo "Please input data on the fields";
    } else {
      $id = $_GET['id'];
      $password = $_GET['password'];
      
      $_login = new Login();
      $result = $_login->verify_admin_credentials($id, $password);
      if ($result) {
        echo "Success";
      } else {
        echo "Failed";
      }
    }
  }
  ?>