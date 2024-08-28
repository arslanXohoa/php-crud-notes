<?php

namespace App\database;

class Database {

  // properties
  public $servername = "localhost";
  public $username = "root";
  public $password = "password";
  public $db_name = 'arslan';
  public $conn;
  
  // methods
  public function __construct(){
    $this->conn = new \mysqli($this->servername, $this->username, $this->password, $this->db_name);

    // Check connection
      if ($this->conn->connect_error) {
     die("Connection failed: " . $this->conn->connect_error);
     } 
  }

  public function query($sql){
    return $this->conn->query($sql);
  }

  public function close(){
    $this->conn->close();
  }

  
}

?>
