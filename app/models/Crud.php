<?php 

class Crud {
    private $conn;
    private $config;

    function __construct($db_config=null) {
  
      if(is_null($db_config)){
        //require_once __DIR__ .'app/config/config.php';
         global $db_config;      
         $this->config = $db_config;   
      }else{
           
         $this->config = $db_config;  

      }

      $this->connect();

    }

    private function connect() {
        $dsn = $this->config['db_type'] . ':host=' . $this->config['db_host'] . ';dbname=' . $this->config['db_name'] . ';charset=' . $this->config['db_charset'];

        try {
            $this->conn = new PDO($dsn, $this->config['db_user'], $this->config['db_pass']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function checkConnection() {
        try {
            $this->conn->query("SELECT 1");
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function close() {
        $this->conn = null;
    }

    public function create($table, $data) {
        $fields = array_keys($data);
        $values = array_values($data);
        $placeholders = implode(',', array_fill(0, count($values), '?'));

        $sql = "INSERT INTO $table (" . implode(',', $fields) . ") VALUES ($placeholders)";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($values);
            return $this->conn->lastInsertId();
        } catch (PDOException $e) {
            die("Create failed: " . $e->getMessage());
        }
    }

    public function read($table, $id) {
        $sql = "SELECT * FROM $table WHERE id = ?";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
           // $stmt->close();
            return $res;
        } catch (PDOException $e) {
            die("Read failed: " . $e->getMessage());
        }
    }

    public function readAll($table,$condition='') {
        $sql = "SELECT * FROM $table $condition";
        //print_r($sql);    
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //$stmt->close();
            return $res;
        } catch (PDOException $e) {
            die("Read all failed: " . $e->getMessage());
        }
    }

    public function update($table, $id, $data) {
        $fields = array();
        $values = array();

        foreach ($data as $field => $value) {
            $fields[] = "$field = ?";
            $values[] = $value;
        }

        $values[] = $id;

        $sql = "UPDATE $table SET " . implode(',', $fields) . " WHERE id = ?";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($values);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Update failed: " . $e->getMessage());
        }
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id = ?";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Delete failed: " . $e->getMessage());
        }
    }
}

?>