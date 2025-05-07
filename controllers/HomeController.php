<?php
class HomeController {
  public function index(): void{
    require 'views/home.php';
  }
  public function about(): void{
    $nama = "Aing sia";
    require 'views/about.php';
  }
}