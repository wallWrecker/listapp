<?php
  class DBhandler {
    private $hostname = "localhost";
    private $db_name = "listup_database";
    private $charset = 'utf8mb4';

    private $username = "root";
    private $password = "1234abe";
    private $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false
    ];

    private $pdo_handler = "";

    public function __construct() {
      $dsn = "mysql:host=$this->hostname; dbname=$this->db_name; charset=$this->charset";
      try {
        $this->pdo_handler = new PDO($dsn,$this->username, $this->password, $this->options);
      } catch (PDOException $e) {
        echo $e->getMessage(); 
      }
    }

    public function getPDO_handler() {
      return $this->pdo_handler;
    }
  }

  class Transaction extends DBhandler {
    // Transaction table entities.
    // transaction_id, admin_id, customer_id, customer_name, 
    // amount, date_bought, transaction_status, date_paid

    public function getAllTransactions() {
      $pdo_handler = $this->getPDO_handler();
      $result = $pdo_handler->query("SELECT * FROM transaction_table")->fetchAll();
      
      return $result;
    }

    public function getSpecificTransaction($transactionId):iterable {
      $stmt   = $this->getPDO_handler()->prepare("SELECT * FROM transaction_table WHERE  transaction_id = ? ");
      $result = $stmt->execute([$transactionId]);
      $result = $stmt->fetchAll();
      return $result;
    }

    public function insertTransaction(iterable $transactionValues) {
      // The system will provide the transaction_id;
      $sql = "INSERT INTO 
              transaction_table (
                transaction_id, admin_id, customer_id , customer_name, ammount, 
                date_bought, transaction_status, date_paid)
              VALUES ?,?,?,?,?,?,?";
      $stmt = $this->getPDO_handler()->prepare($sql)->execute($transactionValues);
    }

    public function updateTransaction(iterable $transactionValues) {
      // $updateSQL = "UPDATE transaction_table SET " 
    }
  }
  
  class Admin extends DBhandler {
    public function isRegistered($id, $password) {
      $sql_query = "SELECT admin_id FROM admin_table WHERE admin_id=? AND admin_password=?"; 
    
      try {
        $stmt = $this->getPDO_handler()->prepare($sql_query);
        $stmt->execute([$id, $password]);
        $result = $stmt->fetch();
        return $result;
      } catch(PDOExeception $e) {
        // echo "Error: $e->getMessage()";
        return false;
      }
    }

    public function findAdminId($id) {
      $sql = "SELECT admin_id FROM admin_table WHERE admin_id = ?";
      $stmt = $this->getPDO_handler()->prepare($sql);
      $stmt->execute();
      
      return $stmt->fetch();
    }
    public function registerAdmin(iterable $adminInputs) {
      $resgister_sql = "INSERT INTO admin_table (admin_id, admin_firstname, admin_lastname,) VALUES (admin_id = ?, admin_password = ? )";
    }

    public $testCall = "Admin called!";
  }
  
  class Customer extends DBhandler {
    
    public function getAllCustomersUnderMe() {
      $getAllCustomerSql = "SELECT * FROM customer_table";
      $stmt = $this->getPDO_handler()->prepare($getAllCustomerSql)->execute();
      $query_result = $stmt->fetchAll();
      return $query_result;
    }
  }
?>