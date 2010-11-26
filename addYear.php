<?php
  
  require "dbservice.php";
  
  addTime();
  resetState();
  header("Location: ./index2.php");
  exit;
?>