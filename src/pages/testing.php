<?php 
  include "../includes/database_config.php";
  // $dbh = new DBhandler();
  $transaction_instance = new Transaction();
  // $allTransactionRecords = $transaction->getAllTransactions();

  $host_name =  'localhost';
  $database_name = 'listup_database';
  $username = 'root';
  $password = '1234abe';
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$host_name;dbname=$database_name;charset=$charset";
  
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
  ];
  
  try {
    $pdo_handler = new PDO($dsn, $username, $password, $options);
    // print_r(get_class_methods($pdo_handler));
  } catch (PDOException $e) {
    echo "<b>" . $e->getMessage() . "</b>";
  }
  
  // Fetching the last id inserted on the record.
  $lastIdStmt = $pdo_handler->prepare("SELECT test_id FROM testing_table ORDER BY test_id DESC LIMIT 1");
  $lastIdStmt->execute();
  $lastid = $lastIdStmt->fetch();
  $lastidresult =  $lastid['test_id'];
  
  if (isset($_GET['testId']) && isset($_GET['testname']) && isset($_GET['result'])) {
    $test_id    = (int)$lastidresult + 1;
    $test_name  = $_GET['testname'];
    $result     = $_GET['result'];

    if ($test_name != "" && $result != "") {
      try {
        $insertSQL  = "INSERT INTO testing_table (test_id, test_name, test_result) VALUES (?,?,?)";
        $insertStmt = $pdo_handler->prepare($insertSQL);
        $insertStmt->execute([$test_id, $test_name, $result]);
        echo "Record Inserted";

        $insertStmt = null;
      } catch (PDOException $e) {
        echo "<b". $e->getMessage() . "</b>";
      }
      
      $lastidresult = $test_id;
      header('Location: ' . $_SERVER['PHP_SELF']);
    }
  } else {
    echo "Not working";
  }
?>

<section>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
    <div>
      <label for="">Last inserted test Id</label>
      <input name="testId" type="text" value=<?php echo $lastidresult ?? 'please insert a data';?> readonly>
    </div>
    <div>
      <label for="">Test name</label>
      <input name="testname" type="text" placeholder="Input test name here">
    </div>
    <div>
      <label for="">Result</label>
      <input name="result" type="text" placeholder="Input result here">
    </div>
    <button type="submit2">Submit</button>
  </form>

  <!-- Query from awesome testing table -->
  <?php 
    $selectAllRecordSql = "SELECT * FROM testing_table";
    $selectAllStmt = $pdo_handler->prepare($selectAllRecordSql);
    $selectAllStmt->execute();
    $result = $selectAllStmt->fetchAll();
  ?>
  <table >
    <!-- Columns are: test_id, test_name, test_result, date_tested -->
  <tr>
    <th>test id</th>
    <th>test name</th>
    <th>test result</th>
    <th>date tested</th>
    <label for=""><input type="radio" name="radio1" value="Radio 1"> Radio one</label>
  </tr>

  <?php 
    foreach($result as $record) {
      echo "<tr>";
        echo "<td>". $record['test_id'] ."<td>";
        echo "<td>". $record['test_name'] ."<td>";
        echo "<td>". $record['test_result'] ."<td>";
        echo "<td>". $record['date_tested'] ."<td>";
      echo "</tr>";
    }
  ?>
  
  </table>

  <?php 
      try {
        $uid = '639364417890';
        $upswrd = 'agpuon05';

        $stmt = $pdo_handler->prepare(
          'SELECT COUNT(*)
          FROM admin_table 
          WHERE admin_id = ? AND admin_password = ?');
        
      $stmt->execute([$uid, $upswrd]);

      $nRow = $stmt->fetchColumn();
          echo $nRow;
      } catch(PDOExeception $e) {
        echo $e->getMessage();
      }
  ?>
  
  
</section>

