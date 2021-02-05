<?php
  require "../includes/init.php";
  require "../includes/header.php";
  require "../process/admin_function.php";
?>
<script src="../jquery/jquery_production.js"></script>

  <div class="container">
    <div class="row vh-100 ">
      <main class="col py-3 ">
        <header class="d-flex justify-content-between align-items-center">
          <h3 class="h5">
            <span class="text-primary">Listup.io</span> - Dashboard
          </h3>
          <button class="btn btn-text">Add Contact</button>
        </header>

        <hr>

        <section class="">
          <!-- Summary Count -->
          <div class="row align-items-center justify-content-center counter-div">
            <div class="col-sm-auto border border-warning rounded py-3 mx-3 my-3">
              <p id="dashboard-count" class="h3 text-center text-dark">21</p>
              <p class="lead text-center">Current Unpaid</p>
            </div>

            <div class="col-sm-auto border border-success rounded py-3 mx-3 my-3 counter-div">
              <p id="dashboard-count" class="h3 text-center text-black">21</p>
              <p class="lead text-center">Current Paid</p>
            </div>
            
            <div class="col-sm-auto border border-info rounded py-3 mx-3 my-3 counter-div">
              <p id="dashboard-count" class="h3 text-center text-dark">21</p>
              <p class="lead text-center">Transactions Made</p>
            </div>
          </div>
        </section>

        <section class="py-4 px-3 bg-light">
          <!-- Search section -->
          <div class="input-group">
            <input 
              id="search-input"
              class="form-control" 
              type="text"
              name="basic_search"
              placeholder="Enter name or Id"
              autocomplete="off" 
              >
            <div class="input-group-append">
              <!-- Type button dropdown (html:select) -->
              <select name="type-status" id="type-select" class="custom-select form-control form-control-lg">
                <option value="">Please select status</option>
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
              </select>
              <button id="button-submit" type="button" class="btn btn-primary">Search</button>
            </div>
          </div>
          <!-- Record Section -->
          <div></div>
        </section>

      <!-- Record Sections -->
        <section>
          <!--  -->
          <div></div>
        </section>
      </main>
    </div>
  </div>

<script src="../js/admin.js"></script>
<?php
  require "../includes/footer.php";
?>