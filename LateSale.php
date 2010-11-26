<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=gb2312" />
	<meta name="author" content="william" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	<title>信息选择</title>
</head>
	<body>
    <?php
       require "dbservice.php";
       
       $t = getTime();
       $cur_year = $t->getyear();
    ?>
    <div id="header">
	<h1 align="center">销售信息管理系统</h1>
  <p align="right"> Design By Group 25</p>
  </div>
		<!-- start header -->
		<form name="form1" method="POST" action="ShowSale.php">
			<div align="center">
				<table width="317" height="98" border="1">
					<tr>
						<td width="64">
							<span class="STYLE5">年</span>
						</td>
						<td width="237">
							<label>
								<select name="year">
                                <option value="">不限</option>
								<?php
                                  for($i = 2000;$i<$cur_year;$i++)
                                  {
                                      print "<option value=\"{$i}\">{$i}</option>\n";
                                  }
                                  print "<option selected value=\"{$cur_year}\">{$cur_year}</option>\n";
                                ?>
								</select>
							</label>
						</td>
					</tr>
					<tr>
						<td>
							<span class="STYLE5">月</span>
						</td>
						<td>
							<label>
								<select name="month">
                                <option value="">不限</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
								</select>
							</label>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<label>
								<input type="submit" name="button" id="button" value="查询">
							</label>
						</td>
					</tr>
				</table>
			</div>
		</form>
	</body>
</html>