<?php
//I created this class seperately from the Store class, even though they access the same DB, to keep associated functions seperate. This is for CRUD related use for the site, not the store
class SiteDetails extends Database {
  private $db;
  public function __construct(){
    $this->db = new Database;
  }
  public function getAllServices(){
    $this->db->query('SELECT * FROM services ORDER BY sid ASC');
    $returnedServices = $this->db->resultSet();
    return $returnedServices;
  }
  public function getAllQandA(){
    $this->db->query('SELECT * FROM qanda ORDER BY qid ASC');
    $returnedServices = $this->db->resultSet();
    return $returnedServices;
  }
  public function SubmitMessage($message){
    //This function would be for submitting a message to the database, to be read later by the site admin
    $this->db->query('INSERT INTO ')
  }
}
