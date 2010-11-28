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
		<script language="javascript">
			function check(form)
			{
				var newpassword = form.newpassword.value;
				var confirmpassword = form.confirmpassword.value;
				if(newpassword == "" || confirmpassword == "")   
				{
					alert("密码不能为空！");					
					return;
				}
				else if(newpassword != confirmpassword)
				{
				    alert("两次输入的新密码不一致！");
				    return;
				}
				form.submit();
			}
	</script>
	</head>

	<body>
		<!-- start header -->
		<div id="header">
			<h1 align="center">
				销售信息管理系统
			</h1>
			<p align="right">
				Design By Group 25
			</p>
		</div>
		<form name="form1" method="post" action="Password.php">
			<input type="hidden" name="username" value='<%=StudentID%>'>
			<table width="282" height="140" border="1" align="center">
				<tr>
					<td>
						<span class="STYLE5">新密码</span>					</td>
					<td>
						<label>
							<input type="password" name="newpassword">
						</label>					</td>
				</tr>
				<tr>
                  <td><span class="STYLE5">新密码确认</span> </td>
				  <td><label>
                    <input type="password" name="confirmpassword" />
                    </label>
                  </td>
			  </tr>
				<tr>
					<td colspan="2" align="center">
						<label>
							<input type="button" onclick="check(this.form)" value="提交" />
						</label>					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
