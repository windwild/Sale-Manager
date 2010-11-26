<?php
  
  require "db.php";
  require "classes.php";
  
  /*
     func:Judge if a user exist
     para:username && password
  */
  function isUser($username,$password,$statu)
  {
      $connect = db_Connect();
      $username = mysqlclean($username,100,$connect);
      $password = mysqlclean($password,100,$connect);
      $query = "select count(*) from user where email='".$username."' and password='".$password."' and statu='".$statu."'";
      $result = db_Query($connect,$query);
      $row = mysql_fetch_array($result);
      db_Close($connect);
      if($row[0] != 0)
         return true;
      else
         return false;
  }
  /*
     fuc:Get a user's userId
     para:username
  */
  function getUserID($username)
  {
      $connect = db_Connect();
      $query = "select userId from user where email='".$username."'";
      $result = db_Query($connect,$query);
      $row = mysql_fetch_array($result);
      db_Close($connect);
      return $row[0];
  }
  function getEnterYear($userId)
  {
      $connect = db_Connect();
      $query = "select enter_year from employee where userId='".$userId."'";
      $result = db_Query($connect,$query);
      $row = mysql_fetch_array($result);
      db_Close($connect);
      return $row[0];
  }
  /*
      fuc:Get a user's Info
      para:username
  */
  function getUserInfo($username)
  {
      $connect = db_Connect();
      $query = "select name,sex,cur_state,enter_year from user,employee where user.userId=employee.userId and email='".$username."'";
      $result = db_Query($connect,$query);
      $row = mysql_fetch_array($result);
      $user = new User();
      $user->name = $row["name"];
      if($row["sex"] == 0)
         $user->sex = "��";
      else
         $user->sex = "Ů";
      $user->email = $username;
      if($row["cur_state"] == 0)
         $user->cur_state = "�ѽ�������";
      else
         $user->cur_state = "������";
      $user->enter_year = $row["enter_year"];   
      db_Close($connect);
      return $user;
  }
  /*
     func:Set all employees to be activity
  */
  function resetState()
  {
      $connect = db_Connect();
      $query = "update employee set cur_state=1";
      db_Update($connect,$query);
      db_Close();
  }
  /*
     func:Set a user's state to be not working
  */
  function setState($userId)
  {
      $connect = db_Connect();
      $query = "update employee set cur_state=0 where userId='".$userId."'";
      db_Update($connect,$query);
      db_Close();
  }
  /*
      func:Get current SystemTime
  */
  function getTime()
  {
      $t = new Date();
      $connect = db_Connect();
      $query = "select year,month from time";
      $result = db_Query($connect,$query);
      $row = mysql_fetch_array($result);
      db_Close($connect);
      $t->setyear($row[0]);
      $t->setmonth($row[1]);
      return $t;
  }
  /*
      func:Set current SystemTime
  */
  function addTime()
  {
      $t = new Date();
      $t = getTime();
      $t->setmonth($t->getmonth()+1);
      if($t->getmonth()>12)
      {
         $t->setmonth(1);
         $t->setyear($t->getyear()+1);
      }
      $connect = db_Connect();
      $query = "update time set year='".$t->getyear()."',month='".$t->getmonth()."'";
      db_Update($connect,$query);
      db_Close($connect);
  }
  /*
      func:Get a employee's sale of a certain year and month
      para:EmployeeId
  */
  function getSaleNum($employeeId,$year,$month)
  {
      $connect = db_Connect();
      $query = "select sum(lock_num),sum(stock_num),sum(barrel_num) from sale where employeeId='".$employeeId.
               "' and year like '".$year."' and month like '".$month."'";
      $result = db_Query($connect,$query);
      if(($row = mysql_fetch_array($result)))
      {
         $alist = new sale_list();
         $alist->setlock_num($row["sum(lock_num)"]);
         $alist->setstock_num($row["sum(stock_num)"]);
         $alist->setbarrel_num($row["sum(barrel_num)"]);
         db_Close($connect);
         return $alist;
      }
      else
      {
         db_Close($connect);
         return NULL;
      }
  }
  /*
      func:Get a employee's state
      para:EmployeeId
  */
  function getState($employeeId)
  {
      $connect = db_Connect();
      $query = "select cur_state from employee where userId='".$employeeId."'";
      $result = db_Query($connect,$query);
      $row = mysql_fetch_array($result);
      db_Close($connect);
      return $row[0];
  }
  /*
      func:Judge if a employee can submit a sale
  */
  function legal($employeeId,$year,$month)
  {
      $alist = getSaleNum($employeeId,$year,$month);
      if($alist == NULL)
         return true;
      if($alist->getlock_num() >= 70)
         return false;
      if($alist->getstock_num() >= 80)
         return false;
      if($alist->getbarrel_num() >= 90)
         return false;
      return true;
  }
  /*
      func:submit a sale list
      para:employee's ID,lock_num,stock_num,barrel_num
  */
  function submitSale($employeeId,$lock,$stock,$barrel,$year,$month)
  {
      $connect = db_Connect();
      $query = "Insert into sale(year,month,employeeId,lock_num,stock_num,barrel_num) values('".$year."','"
               .$month."','".$employeeId."','".$lock."','".$stock."','".$barrel."')";
      db_Update($connect,$query);
      db_Close();
  }
?>