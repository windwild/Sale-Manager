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
   $id = $_SESSION["userId"];
   if($username == NULL)
   {
       header("Location: ./login.html");
       exit;
   }
   $user = getUserInfo($username);
   $t = getTime();
   $alist = getSaleNum($id,$t->getyear(),$t->getmonth());
   $lock_num = 70 - $alist->getlock_num();
   $stock_num = 80 - $alist->getstock_num();
   $barrel_num = 90 - $alist->getbarrel_num();
?>
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<!-- start content -->
				<div id="content">
					<div class="post">
						<h2 class="title">����,<?php echo "{$user->name}" ?>,������������Ϣ</h2>
						<div class="entry">
                        <table width="640" height="352" border="1">
                            <tr>
                              <td>����</td>
                              <td><?php echo "{$user->name}" ?></td>
                            </tr>
                            <tr>
                              <td>�Ա�</td>
                              <td><?php echo "{$user->sex}" ?></td>
                            </tr>
                            <tr>
                              <td>����</td>
                              <td><?php echo "{$user->email}" ?></td>
                            </tr>
                            <tr>
                              <td>���빫˾���</td>
                              <td><?php echo "{$user->enter_year}" ?></td>
                            </tr>
                            <tr>
                              <td>����״̬</td>
                              <td><?php echo "{$user->cur_state}"?></td>
                            </tr>
                            <tr>
                              <td>ʣ��lock</td>
                              <td><?php echo "{$lock_num}" ?></td>
                            </tr>
                            <tr>
                              <td>ʣ��stock</td>
                              <td><?php echo "{$stock_num}" ?></td>
                            </tr>
                           <tr>
                              <td>ʣ��barrel</td>
                              <td><?php echo "{$barrel_num}" ?></td>
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
								<li><a href="ModifyPassword.php">�޸�����</a></li>
								<li><a href="Submit.php">�ύ����</a></li>
								<li><a href="LateInfo.php">�鿴��ȥ���ʵ�</a></li>
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
