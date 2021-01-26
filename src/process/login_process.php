<?php
  include "login_function.php";

  $_login = new Login();
  
  if (isset($_POST['id']) && isset($_POST['password'])) {
    echo "Hello there welcome!, your're logged as to " . $_POST['id'];
  } else {
    echo "Failed!";
  }
  ?>