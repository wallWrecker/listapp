
<?php 
  include "../includes/init.php";
  include "../includes/header.php";
?>

  <!-- For development purposes only -->
  <!-- easy links -->
  <nav class="nav justify-content-center bg-white py-2">
    <li class="nav-item">
      <a href="../../index.php" class="nav-link active lead">Home Page</a>
    </li>
    <li class="nav-item">
      <a href="contact.php" class="nav-link active lead">Contact Page</a>
    </li>
    <li class="nav-item">
      <a href="admin.php" class="nav-link active lead">Admin Page</a>
    </li>
  </nav>
  <!-- easy links ended -->

  <div class="container-fluid bg-light vh-100">
    <!-- Page Introduction -->
    <section class="py-2 text-center">
      <h3 class="display-4 text-info">Welcome to Login</h3>
      <p id="welcome" class="lead">Please make a login</p>
    </section>

    <main class="row justify-content-center py-3">
      <div class="col-4 py-3 shadow rounded">
        <div id="alert-notification">
          <p class="alert alert-secondary">Please fill the form. </p>
        </div>
        <form>
          <div class="form-group">
            <label id="labelusername" for="myusername">Username</label>
            <input 
              id="myusername" 
              class="form-control" 
              type="text"  
              name="username" 
              autocomplete="off" 
              value="Incredible Blue" 
              required
              >
          </div>
          <div class="form-group">
            <label id="labelpassword" for="mypassword">Password</label>
            <input  
              class="form-control" 
              id="mypassword" 
              type="password" 
              name="password" 
              autocomplete="off"
              required
              >
          </div>
          <div class="form-group form-check">
            <input type="checkbox" id="seepassword" class="form-check-input" >
            <label class="form-check-label" for="seepassword">Show password</label>
          </div>
          <!-- Submit button -->
          <div class="form-group">
            <input type="hidden" name="form-submitted" value="1">
            <button 
              id="buttonsubmit"
              class="form-control btn btn-success"
              type="button"> 
              Log in
            </button>
            
            <hr> <!-- <hr> : horizontal line -->
            
            <p class="text-muted">
              ..Or maybe you aren't yet a member so please 
              <span class="text-link small">
                <a href="register.php">Register here.</a>
              </span>
            </p>
          </div>
        </form>
      </div>
    </main>
  </div>
<script src="../js/login.js?n"></script>


<?php include "../includes/footer.php";?>