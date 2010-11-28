<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=gb2312" />
	<meta name="author" content="william" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<title>信息选择</title>
    <style type="text/css">
<!--
.STYLE1 {
	font-size: 18px
}
-->
    </style>
</head>
<body>
<div id="header">
	<h1 align="center">销售信息管理系统</h1>
  <p align="right"> Design By Group 25</p>
  </div>
    <?php
        require "dbservice.php";
        session_start();
        $userId = $_SESSION["userId"];
        $state = getState($userId);
        if($state == 0)
        {
            header("Location: ./Forbid.html");
            exit;
        }
        else
        {
            $t = getTime();
            if(!legal($userId,$t->getyear(),$t->getmonth()))
            {
                $lock_num = -1;
                $stock_num = -1;
                $barrel_num = -1;
            }
            else
            {
                $alist = getSaleNum($userId,$t->getyear(),$t->getmonth());
                $lock_num = $alist->getlock_num();
                $stock_num = $alist->getstock_num();
                $barrel_num = $alist->getbarrel_num();
                $lock_num = 70-$lock_num;
                $stock_num = 80-$stock_num;
                $barrel_num = 90-$barrel_num;
            }
        }
        
    ?>
		<!-- start header -->
		<form name="form2" method="POST" action="SaveSubmit.php">
		  <div align="center">
           <table width="277" height="128" border="1">
          <tr>
            <td><div align="center" class="STYLE1">lock数</div></td>
            <td><div align="center" class="STYLE1">stock数</div></td>
            <td><div align="center" class="STYLE1">barrel数</div></td>
          </tr>
          <tr>
            <td><label>
              <select name="lock" id="lock">
              <option selected value="-1">-1</option>
              <?php
                  for($i = 0;$i<=$lock_num;$i++)
                  {
                      print "<option value=\"{$i}\">{$i}</option>\n";
                  }
              ?>
              </select>
            </label></td>
            <td><label>
              <select name="stock" id="stock">
              <?php
                  for($i = 0;$i<=$stock_num;$i++)
                  {
                      print "<option value=\"{$i}\">{$i}</option>\n";
                  }
              ?>
              </select>
            </label></td>
            <td><label>
              <select name="barrel" id="barrel">
              <?php
                  for($i = 0;$i<=$barrel_num;$i++)
                  {
                      print "<option value=\"{$i}\">{$i}</option>\n";
                  }
              ?>
              </select>
            </label></td>
          </tr>
          <tr>
            <td colspan="3"><span class="STYLE1">城市
              <label>
              <select name="city" id="select">
              <option selected value="哈尔滨">哈尔滨</option>
              <option value="长春">长春</option>
              <option  value="大连">大连</option>
              <option  value="深圳">深圳</option>
              <option  value="上海">上海</option>
              <option  value="广州">广州</option>
              <option  value="沈阳">沈阳</option>
              <option  value="北京">北京</option>
              </select>
              </label>
            </span></td>
          </tr>
          <tr>
            <td colspan="3"><label>
              <div align="center">
                <input type="submit" name="button" id="button" value="提交" />
                </div>
            </label></td>
            </tr>
        </table>
          </div>
		</form>  
</body>
</html>