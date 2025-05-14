<?php
require 'models/UserModel.php';
class UserController{
  private $userModel;
  public function __construct(){
    $this->userModel = new UserModel();
  }
  public function showAllUsers(): void{
    $users = $this->userModel->getAllUsers();
    require 'views/user.php';
  }
}