<?php 
  include "src/includes/init.php";
  include "src/includes/header.php";
?>
  <script src="src/jquery/jquery_production.js"></script>

  <main class="container-fluid">
    <nav class="bg-info nav justify-content-end">
      <li class="nav-item">
        <a 
          class="nav-link lead text-light" 
          href="src/pages/about.php">
          About
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link lead text-light" 
          href="src/pages/login.php" 
          title="frequently asked questions.">
          FAQ's
        </a>
      </li>
    </nav>
    
    <!-- Article Section Intro and FAQ's -->
    <article class="row justify-content-center p-2 mb-3">
      <div class="col-sm-auto col-md-5 px-3 mt-3">
      <!-- Section Introduction -->
      <section class="py-3">
        <h3 class="display-4">Listup.io</h3>
        <p class="lead">
          A side project for saving up phone numbers and 
          other information related to digital 
          identifications.
        </p>
        <p class="lead">
          Anyways, if you wish to get started just click <a id="focus-to-login" class="text-link" href="#username-admin-field">login</a>.
        </p>
      </section>

        <!-- Section FAQ's -->
        <section class="py-3">
          <h3 class="display-4">FAQ's <small class="lead">frequently asked question</small></h3>
          <!-- Collection of Faq's in accordion style -->
          <div>
            <!-- Faq's Container -->
            <p 
              id="under-construction-information" 
              class="h4 text-secondary mt-5"
              >This section is underconstruction</p> 
          </div>
        </section>
      </div>

    <!-- Login section -->
    <!-- Login Form -->
      <div class="col-sm-auto col-md-4">
        <form 
          id="login-form" 
          class="border border-info rounded my-3 p-3">

          <div id="alert-notification">
            <p class="alert alert-secondary">Please fill the form. </p>
          </div>
          <div class="form-group">
            <label id="label-admin-id" for="username-admin-field">Admin id</label>
            <input 
              id="username-admin-field" 
              class="form-control" 
              type="text"  
              name="username" 
              autocomplete="off"
              required
              >
              <small class="form-text text-muted">User id is your cellphone number ex: 936 441 7890</small>
          </div>
          <div class="form-group">
            <label id="labelpassword" for="mypassword">Password</label>
            <input
              id="password-admin-field"
              class="form-control" 
              type="password" 
              name="password" 
              autocomplete="off"
              required
              >
          </div>
          <div class="form-group form-check">
            <input type="checkbox" id="seepasswordcheckbox" class="form-check-input" >
            <label class="form-check-label" for="seepasswordcheckbox">Show password</label>
          </div>
          <!-- Submit button -->
          <div class="form-group">
            <button 
              id="login-submit-button"
              class="form-control btn btn-info"
              type="button">
              Log in
            </button>
            
            <hr> <!-- <hr> : horizontal line -->
            
            <p class="text-muted">
              ..Or maybe you aren't yet a member so please 
              <span class="text-link small">
                <a id="register-link" href="#admin-id">Register here.</a>
              </span>
            </p>
          </div>
        </form>   
      </div>
    </article>

    <!-- By default registration form is hide. -->
    <section id="register-form-section" class="row justify-content-center p-2">
      <div class="col-sm-auto col-md-5 px-3 mt-3">
        <!-- Registration Form -->
        <form class="my-3 p-3">
          <div id="alert-notification">
            <p class="alert alert-info">Please <a href="#admin-id" class="text-link"> register </a> here the form. </p>
          </div>
          <div class="form-group">
            <label id="labelusername" for="admin-id">Register your Admin Id</label>
            <input 
              id="admin-id" 
              class="form-control" 
              type="text"  
              name="username" 
              autocomplete="off" 
              placeholder="LX ID | Loader Simcard number"
              required
              >
          </div>
          <div class="form-group">
            <label id="labelpassword" for="admin-password">Password</label>
            <input  
              class="form-control" 
              id="admin-password" 
              type="password" 
              name="password" 
              autocomplete="off"
              placeholder="Password"
              required
              >
          </div>

        <hr>

          <div class="form-group">
            <label id="labelpassword" for="admin-first-name">First Name</label>
            <input  
              class="form-control" 
              id="admin-first-name" 
              type="text" 
              name="admin_name" 
              autocomplete="off"
              placeholder="Enter your First name"
              required
              >
          </div>
          <div class="form-group">
            <label id="labelpassword" for="admin-last-name">Last Name</label>
            <input  
              class="form-control" 
              id="admin-last-name" 
              type="text" 
              name="admin_name" 
              autocomplete="off"
              placeholder="Enter your Last name"
              required>
          </div>
          <div class="form-group">
            <label id="labelpassword" for="admin-contact">Contact Number</label>
            <input  
              class="form-control"
              id="admin-contact" 
              type="text" 
              name="admin-contact" 
              autocomplete="off"
              placeholder="Enter your contact number"
              required>
              <small class="form-text text-muted">example: 0912345678</small>
          </div>
          <!-- Register button -->
          <div class="form-group">
            <button 
              id="register-button"
              class="form-control btn btn-primary"
              type="button"> 
              Register
            </button>
          </div>
        </form>
      </div>
    </section>
  </main>
  
  <!-- Footer will be here soon. -->

  <!-- My Javascript scripts -->
  <script src="node_modules/cleave.js/dist/cleave.min.js"></script>
  <!-- including cleave js phone country source code. -->
  <script src="node_modules\cleave.js\src\addons\phone-type-formatter.ph.js"></script>
  <script type="module" src="src/js/index.js"></script>
  <script type="module" src="src/js/login_cleave.js"></script>
<?php 
  include "src/includes/footer.php";
?>