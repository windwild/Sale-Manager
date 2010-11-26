<%@ page language="java" import="java.util.*,cn.edu.hit.*,java.sql.*" pageEncoding="gb2312"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

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
   
   $year = $_POST["year"];
   $month = $_POST["month"];
   $t = getTime();
   $alist = getSale($year,$month);
   $lock_num = $alist->getlock_num();
   $stock_num = $alist->getstock_num();
   $barrel_num = $alist->getbarrel_num();
   $sale = $alist->gettot_sale();
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
					  <h2 class="title">以下是您查询的销售情况表</h2>
						<div class="entry">
		<div align="center"></div>
        <?php
           if(($lock_num==0&&$stock_num==0&&$barrel_num==0)||($t->getyear()==$year&&$month > $t->getmonth()&&$state == 1))
              print "您该时间点尚无销售记录";
           else
           {
        ?>
		<table width="550" height="125" border="1" align="center">
			<tr>
				<td width="111" align="center">售出lock数</td>
				<td width="88" align="center">售出stock数</td>
				<td width="110"> <div align="center">售出barrel数</div></td>
				<td width="95"><div align="center">总销售额</div></td>
			</tr>
			<tr>
				<td align="center"><?php echo "{$lock_num}"?></td>
				<td align="center"><?php echo "{$stock_num}"?></td>
			    <td align="center"><?php echo "{$barrel_num}"?></td>
			    <td align="center"><?php echo "{$sale}"?></td>
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
								<li><a href="addUser.html">增加员工</a></li>
								<li><a href="top10.php">员工销售Top10</a></li>
                                <li><a href="LateSale.php">历史销售情况查询</a></li>
                                <li><a href="FiveSale.php" target="_blank">五年销售状况表</a></li>
                                <li><a href="index2.php">返回主页</a></li>
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
