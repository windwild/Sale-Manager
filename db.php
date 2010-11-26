<?php
   function db_Connect()
   {
       $connect = mysql_connect("localhost","root","root");
       mysql_select_db("salary_manage",$connect);
       return $connect;
   }
   function db_Query($connect,$query)
   {
       mysql_query("set names 'gb2312'");
       $result = mysql_query($query,$connect);
       return $result;
   }
   function db_Update($connect,$query)
   {
       mysql_query($query,$connect);
       return;
   }
   function db_Close($connect)
   {
       mysql_close($connect);
       return;
   }
   function mysqlclean($word,$maxlength,$connection)
   {
       $input = substr($word,0,$maxlength);
       $input = mysql_real_escape_string($input,$connection);
       return $input;
   }
?>