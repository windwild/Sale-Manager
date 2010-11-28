<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Accomplishable
Description: A two-column, fixed-width design.
Version    : 1.0
Released   : 20090731

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
   require "dbservice.php";
   session_start();
   $userId = $_SESSION["userId"];
   $year = $_POST["year"];
   $month = $_POST["month"];
   $t = getTime();
   $state = getState($userId);
   $alist = getSaleNum($userId,$year,$month);
   $lock_num = $alist->getlock_num();
   $stock_num = $alist->getstock_num();
   $barrel_num = $alist->getbarrel_num();
   $sale = $alist->gettot_sale();
   $salary = $alist->getsalary();
?>
<!-- start header -->
<div id="header">
	<h1 align="center">销售信息管理系统</h1>
  <p align="right"> Design By Group 25</p>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<!-- start content -->
				<div id="content">
				  <div class="post">
					  <h2 class="title">以下是您<?php echo "{$year}年{$month}月"?>的工资单</h2>
						<div class="entry">
		<div align="center"></div>
        <?php
           if(($lock_num==0&&$stock_num==0&&$barrel_num==0)||($t->getyear()==$year&&$month >= $t->getmonth()&&$state == 1))
              print "您该时间点尚无销售记录";
           elseif ($lock_num == 0 || $stock_num == 0 || $barrel_num == 0)
              print "您该时间点未卖足一杆枪，故无工资记录";
           else
           {
        ?>
		<table width="550" height="125" border="1" align="center">
			<tr>
				<td width="111" align="center">售出lock数</td>
				<td width="88" align="center">售出stock数</td>
				<td width="110"> <div align="center">售出barrel数</div></td>
				<td width="95"><div align="center">总销售额</div></td>
				<td width="112"><div align="center">收入</div></td>
			</tr>
			<tr>
				<td align="center"><?php echo "{$lock_num}"?></td>
				<td align="center"><?php echo "{$stock_num}"?></td>
			    <td align="center"><?php echo "{$barrel_num}"?></td>
			    <td align="center"><?php echo "{$sale}"?></td>
			    <td align="center"><?php echo "{$salary}"?></td>
			</tr>
		</table>
        <?php
           }
        ?>
						</div>
				  </div>
				</div>
				<!-- end content -->
				<!-- start sidebar -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Menus</h2>
							<ul>
								<li><a href="ModifyPassword.php">修改密码</a></li>
								<li><a href="Submit.php">提交数据</a></li>
								<li><a href="LateInfo.php">查看过去工资单</a></li>
                                <li><a href="index.php">返回主页</a></li>
                                <li><a href="login.html">退出</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end sidebar -->
				<div style="clear:both">&nbsp;</div>
			</div>
		</div>
	</div>
<div id="footer">
	<p>&copy;2010 All Rights Reserved &nbsp;&bull;&nbsp; Design by PeiWenzhe &nbsp;&bull;&nbsp; Icons by PeiWenzhe.</p>
</div>
</body>
</html>
