<?php
  
  require "dbservice.php";
   
  $name = $_POST["username"];
  $email = $_POST["email"];
  $sex = $_POST["sex"];
  $user = new User();
  $user->username = $name;
  $user->sex = $sex;
  $user->email = $email;
  addUser($user);
  header("Location: ./Success2.html");
  exit;
?>