<?php
  
  require "dbservice.php";
  
  $username = $_POST["username"];
  $password = $_POST["password"];
  $statu = $_POST["statu"];
  if(isUser($username,$password,$statu))
  {
      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      $_SESSION["statu"] = $statu;
      $userId = getUserID($username);
      $_SESSION["userId"] = $userId;
      if($statu == 0)
      {
          header("Location: ./index.php");
          exit;
      }
      else
      {
          header("Location: ./index2.php");
          exit;
      }
  }
  else
  {
      header("Location: ./error_user.html");
      exit;
  }
?>