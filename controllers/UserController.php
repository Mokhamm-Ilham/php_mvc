<?php
require 'models/UserMode.php';
class UserController{
  private $userModel;
  public function __construct(){
    $this->userModel = new UserMode();
  }
  public function showAllUsers(): void{
    $users = $this->userModel->getAllUsers();
    require 'views/user.php';
  }
}