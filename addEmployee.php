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
  $t=getTime();
  $year = $t->getyear();
  addemployee($email,$name,$year,$sex);
  header("Location: ./Success2.html");
  exit;
?>