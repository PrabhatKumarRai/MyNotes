<?php

class Db{

      protected $conn;
      protected $server = "localhost";
      protected $username = "root";
      protected $password = "";
      protected $dbname = "mynotes";

      public function __construct(){
          $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
          if($this->conn->connect_error){
              die("Database Connection Failed, Error : " . $this->conn->connect_error);
          }
      }

}
?>
