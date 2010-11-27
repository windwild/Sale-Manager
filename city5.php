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
   $ret = getCitySale();
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
					  <h2 class="title">城市销售Top5</h2>
						<div class="entry">
		<div align="center"></div>
		<table width="550" height="87" border="1" align="center">
			<tr>
				<td width="161" height="39" align="center">城市</td>
				<td width="373"><div align="center">总销售额</div></td>
			</tr>
            <?php
            $cnt = 0;
            foreach($ret as $city)
            {
                if($city->name==NULL)
                   break;
            ?>
			<tr>
				<td height="40" align="center"><?php echo "{$city->name}"?></td>
			    <td align="center"><?php echo "{$city->sale}"?></td>
			</tr>
        <?php
           }
        ?>
        </table>
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
                                <li><a href="city5.php">城市销售Top5</a></li>
                                <li><a href="FiveSale.php" target="_blank">五年销售状况表</a></li>
                                <li><a href="index2.php">返回主页</a></li>
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
