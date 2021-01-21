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
      $dsn = "mysql:host=$this->hostname;dbname=$this->db_name;charset=$this->charset";
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
    public static function getLastTransaction_id() {
      $n = "samlple output";
      return $n;
    }

    public function getAllTransactions() {
      $pdo_handler = $this->getPDO_handler();
      $result = $pdo_handler->query("SELECT * FROM transaction_table")->fetchAll();
      
      return $result;
    }

    public function getSpecificTransaction($transactionId):iterable {
      $stmt = $this->getPDO_handler()->prepare("SELECT * FROM transaction_table WHERE  transaction_id = ? ");
      $result = $stmt->execute([$transactionId]);
      $result = $stmt->fetchAll();
      return $result;
    }

    public function insertTransaction(iterable $transactionValues) {
      // The system will provide the transaction_id;
      $sql = "INSERT INTO 
              transaction_table (
                transaction_id, admin_id, customer_id , ammount, 
                transaction_status, remainder, balance)
              VALUES ?,?,?,?,?,?,?";
      $stmt = $this->getPDO_handler()->prepare($sql)->execute($transactionValues);
    }
  }

  class Customer extends DBhandler {
    
  }
?>