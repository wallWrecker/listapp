<?php 
  if (isset($_REQUEST["keyword"]) && isset($_REQUEST["status"])) {
    echo $_REQUEST["keyword"] ." is ". $_REQUEST["status"];
    for ($counter = 0; $counter <=10; $counter++) {
      echo "<p class=\"text-primary\">" . $_REQUEST["keyword"] . " and " . $_REQUEST["status"] . "</p>";
    }
  }

  class FETCH {
    private $admin_table = "";
    function __construct($table) {
      $admin_table = $table;
    }
    
    public function output_table() {
      echo $this->$admin_table;
    }
    
    public function fetch_all_upaid($name, $status) {  
      
    }
  }

?>