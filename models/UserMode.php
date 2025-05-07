<?php
require 'core/database.php';
class UserMode {
  private $db;
  public function __construct(){
    $database = new database();
    $this->db = $database->getConnection();
  }

  public function getAllUsers():array{
    $query = "select * from user";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}