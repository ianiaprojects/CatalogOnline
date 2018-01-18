<?php
class DBConnect{
  protected $connection;
  private $user =     "root";
  private $password = "";
  private $host =     "localhost";
  private $db_name =  "project";

  function __construct() {
    $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db_name);
    if($this->connection->connect_error){
      die("<b>Database could not be reached</b>.<br>". $this->connection->connect_error);
    }
   }

  function getConnection(){
    return $this->connection;

  }
}

?>
