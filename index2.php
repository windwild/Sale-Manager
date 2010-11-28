<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>

<!-- start header -->
<div id="header">
	<h1 align="center">销售信息管理系统</h1>
  <p align="right"> Design By Group 25</p>
</div>
<!-- end header -->
<!-- start page -->
<?php
   require "dbservice.php";
   session_start();
   $username = $_SESSION["username"];
   if($username == NULL)
   {
       header("Location: ./login.html");
       exit;
   }
   $t = getTime();
   $year = $t->getyear();
   $month = $t->getmonth();
   $num = getUserNum();
?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<!-- start content -->
				<div id="content">
					<div class="post">
						<h2 class="title">您好经理,以下是您公司的信息</h2>
						<div class="entry">
                        <table width="640" height="352" border="1">
                            <tr>
                              <td width="83">名称</td>
                              <td width="541">Group 25股份有限公司</td>
                            </tr>
                            
                            <tr>
                              <td>网址</td>
                              <td>williampei1988@126.com</td>
                            </tr>
                            <tr>
                              <td>员工数</td>
                              <td><?php echo "{$num}" ?></td>
                            </tr>
                            <tr>
                              <td>当前时间</td>
                              <td><?php echo "{$year}年{$month}月"?></td>
                            </tr>
                            <tr>
                              <td colspan="2">
                              <form name="form1" method="POST" action="addYear.php">
                                <label>
                                  <div align="center">
                                    <input type="submit" name="button" id="button" value="进入下个月">
                                    </div>
                                </label>
                              </form>                              </td>
                            </tr>
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
	<p>&copy;2010 All Rights Reserved &nbsp;&bull;&nbsp; Design by Group 25 &nbsp;&bull;&nbsp; Icons by Group 25</p>
</div>
</body>
</html>
