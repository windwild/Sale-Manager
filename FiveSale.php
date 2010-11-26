<?php

  require "dbservice.php";
  require "DrawTable.php";
  
  $res = array();
  $date = array();
  $t = getTime();
  $cur_year = $t->getyear();
  for($i = $cur_year-4;$i<=$cur_year;$i++)
  {
     $ret = getYearSale($i);
     $res[] = $ret;
     $date[] = $i;
  }
  $bar = new Bar(1000, 600, $res,$date);
  $str = "Sale Condition in 5 years";
  $bar->setTitle($str);
  $bar->stroke();
?>