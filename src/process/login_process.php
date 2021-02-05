<?php
session_start();

  include "../includes/init.php"; 
  include "login_function.php";

  if (isset($_POST['id']) && isset($_POST['password'])) {
    if (empty($_POST['id']) && empty($_POST['password'])) {
      echo "Please input data on the fields";
    } else {
      $id = $_POST['id'];
      $password = $_POST['password'];
      
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