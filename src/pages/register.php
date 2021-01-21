
<?php 
  require "../includes/init.php";
  require "../includes/header.php";
?>
  <main class="container p-2">  
    <header class="d-flex align-items-center justify-content-between mb-3">
      <h3 class="h3 text-primary">Listup.io</h3>
      
      <div class="lead text-primary ml-auto">About</div>
    </header>

    <form>
      <div id="alert-notification">
        <p class="alert alert-secondary">Please Fill the form correctly.</p>
      </div>
      <div class="form-row">
        <div class="col">
          <label for="">First name</label>
          <input class="form-control" type="text" placeholder="Juan">
        </div>
        <div class="col">
          <label for="">Last name</label>
          <input class="form-control" type="text" placeholder="Dela Cruz">
        </div>
        <div class="col">
          <label for="">Middle name</label>
          <input class="form-control" type="text" placeholder="Santon">
        </div>

           <!-- <div class="col col-auto">
            <button class="btn btn-primary">REGISTER</button>
          </div> -->
      </div>
    </form>
  </main>

<?php 
  require "../includes/footer.php";
?>