<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>

<!-- start header -->
<div id="header">
	<h1 align="center">������Ϣ����ϵͳ</h1>
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
						<h2 class="title">���þ���,����������˾����Ϣ</h2>
						<div class="entry">
                        <table width="640" height="352" border="1">
                            <tr>
                              <td width="83">����</td>
                              <td width="541">Group 25�ɷ����޹�˾</td>
                            </tr>
                            
                            <tr>
                              <td>��ַ</td>
                              <td>williampei1988@126.com</td>
                            </tr>
                            <tr>
                              <td>Ա����</td>
                              <td><?php echo "{$num}" ?></td>
                            </tr>
                            <tr>
                              <td>��ǰʱ��</td>
                              <td><?php echo "{$year}��{$month}��"?></td>
                            </tr>
                            <tr>
                              <td colspan="2">
                              <form name="form1" method="POST" action="addYear.php">
                                <label>
                                  <div align="center">
                                    <input type="submit" name="button" id="button" value="�����¸���">
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
								<li><a href="addUser.html">����Ա��</a></li>
								<li><a href="top10.php">Ա������Top10</a></li>
                                <li><a href="LateSale.php">��ʷ���������ѯ</a></li>
                                <li><a href="city5.php">��������Top5</a></li>
                                <li><a href="FiveSale.php" target="_blank">��������״����</a></li>
                                <li><a href="login.html">�˳�</a></li>
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
