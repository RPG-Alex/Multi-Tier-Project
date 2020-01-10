<?php
class Store extends Database {
  private $db;
  public function __construct(){
    $this->db = new Database;
  }
  public function getAllServices(){
    $this->db->query('SELECT * FROM services ORDER BY sid ASC');
    $returnedServices = $this->db->resultSet();
    return $returnedServices;
  }
}
