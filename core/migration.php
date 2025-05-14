<?php

require('database.php');
$database = new Database();
$db = $database->getConnection();

$db->exec('drop table if exists user');

$db->exec('create table user (
  id int AUTO_INCREMENT primary key,
  nama varchar(100) not null,
  email varchar(100) not null,
  password varchar(255) not null,
  role varchar(20) default "user"
)');
echo 'database berhasil di migrasi';
?>
