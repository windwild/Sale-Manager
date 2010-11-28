<?php
 
 require "dbservice.php";
 
 session_start();
 $id = $_SESSION["userId"];
 $lock_num = $_POST["lock"];
 $stock_num = $_POST["stock"];
 $barrel_num = $_POST["barrel"];
 $city = $_POST["city"];
 if($lock_num == -1)
 {
    setState($id);
 }
 else
 {
    $t = getTime();
    submitSale($id,$lock_num,$stock_num,$barrel_num,$t->getyear(),$t->getmonth(),$city);
 }
 header("Location: ./Success.html");
 exit;
?>