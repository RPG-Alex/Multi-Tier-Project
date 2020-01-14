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
  public function insertCartItems($cookieID,$itemID){
      $this->db->query('INSERT INTO cartItems(cookieid, item) VALUE(:cookie, :item)');
      $this->db->bind(':cookie',$cookieID);
      $this->db->bind(':item',$itemID);
      if ($this->db->execute()) {
        return true;
      } else {
        false;
      }
    }
  public function retrieveCartItems($cookieID){
    $this->db->query('SELECT cartItems.cookieid, services.sid, services.service,services.description,services.price FROM cartItems, services WHERE cartItems.item = services.sid AND cartItems.cookieid = :cookieID');
    $this->db->bind(':cookieID', $cookieID);
    $cartItemsReturned = $this->db->resultSet();
    return $cartItemsReturned;
  }
  public function removeFromCart($cookieID,$itemID){
    $this->db->query('DELETE FROM cartItems WHERE cookieID = :cookieID AND item = :itemID');
    $this->db->bind(':cookieID',$cookieID);
    $this->db->bind(':itemID',$itemID);
      if ($this->db->execute()) {
        return true;
      } else {
        return false;
      }
  }
}
