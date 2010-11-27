<?php
require "dbservice.php";

$newpassword = $_POST["newpassword"];
session_start();
$username = $_SESSION["username"];
ModifyPassword($username,$newpassword);
header("Location: ./Success3.html");
exit;
?>