<?php
  include "../includes/init.php"; 
  include "login_function.php";

  $_login = new Login();
  
  if (isset($_POST['id']) && isset($_POST['password'])) {
    if (!empty($_POST['id']) && !empty($_POST['password'])) {
      $id = $_POST['id'];
      $password = $_POST['password'];

      echo $_login->verify_admin_credentials($id, $password);
    }
  }
  ?>