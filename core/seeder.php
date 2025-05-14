<?php
require 'models/UserModel.php';
class DatabaseSeeder
{
  private $userModel ;
  public function __construct() {
    $this->userModel = new UserModel();
  }
  public function run() {
    $this->userModel->createUser('Admin','admin@email.com','password','admin');
    $this->userModel->createUser('User','user@email.com','password','User');
    echo'Database Succesfully. \n';
  }
}
$seeder = new DatabaseSeeder();
$seeder->run();