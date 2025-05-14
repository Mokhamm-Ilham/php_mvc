<?php
require 'core/database.php';
class UserModel
{
  private $db;
  public function __construct()
  {
    $database = new database();
    $this->db = $database->getConnection();
  }

  public function getAllUsers(): array
  {
    $query = "select * from user";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createUser($nama, $email, $password, $role)
  {
    $query = $this->db->prepare("insert into user (nama, email, password, role) values (:nama, :email, :password, :role)");
    return $query->execute(["nama" => $nama, "email" => $email, "password" => $password, "role" => $role]);
  }
}
