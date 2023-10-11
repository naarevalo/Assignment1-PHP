<?php
  
  class Database{
    
    private $connection;
    function __construct(){
  
      $this->connect_db();
    }
  
    public function connect_db(){
        $this->connection = mysqli_connect('localhost', 'root', '', 'employee');

     
        if(!$this->connection){
            die("Database Connection Failed: " . mysqli_connect_error());
      }
    }
    public function getData($query){
      $result = $this->connection->query($query);
      if ($result == false){
        return false;
      }
      $rows = array();
      while ($row = $result->fetch_assoc()){
        $rows[] = $row;
      }
      return $rows;
    }
    public function execute($query){
        if ($this->connection->query($query)) {
          return true;
        } else {
          echo 'Error: ' . $this->connection->error;
          return false;
        }
      }
      
    
  }
  $database = new Database();
?>
