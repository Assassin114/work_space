<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/large_scale.css"/>
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/patient_table.css" />
<?php
session_start();
error_reporting(0);
$username = $_SESSION['patient'];
?>
<html>
<head>

<title>患者资料</title>
</head>

<body style="text-align: center;height: 1120px">
<h1 class="header">患者详细信息</h1>
<div class="table">
<div style="width: 80%;margin-left: 10%;margin-top: 80px; height: 800px">
<?php
	mysql_connect("localhost","root","hl1193001636");
	mysql_select_db("work_space"); 
	mysql_query("set character set 'utf8'");//读库
	mysql_query("set names utf8");
	$sql1 = mysql_query("select * from patient_information where username = '$username'");
	$sql2 = mysql_query("select * from anamnesis where username = '$username'");
	$sql_arr1 = mysql_fetch_assoc($sql1);
	$sql_arr2 = mysql_fetch_assoc($sql2);
	$name = $sql_arr1['name'];
	$sex = $sql_arr1['sex'];
	$age = $sql_arr1['age'];
	$height = $sql_arr1['height'];
	$weight = $sql_arr1['weight'];
	$nation = $sql_arr1['nation'];
	$phone = $sql_arr1['phone'];
	$email = $sql_arr1['email'];
	$year = $sql_arr1['year'];
	$month = $sql_arr1['month'];
	$day = $sql_arr1['day'];
	$province = $sql_arr1['province'];
	$city = $sql_arr1['city'];
	$dist = $sql_arr1['dist'];
	$address = $sql_arr1['address'];
	echo("<style>.yincang{display:none} .xianshi{display:inline;}</style>");
?>
<hr style="border:3 double #987cb9" width="100%" color="#987cb9" SIZE="3">
<h2 style="font-size: 30px;height: 80px;line-height: 80px">个人信息</h2>
<form action="patient detail.php" method="post">
<p class="pleft">姓<span class="span">姓名</span>名：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$name")?></span><input name="name" type="text" class="text_input yincang" value="真实姓名"></p>
<p class="pright">性<span class="span">姓名</span>别：<span class='xianshi' style='color:#1935A3;opacity: 1;'><?php echo("$sex")?></span><input type="radio" name="sex" class="yincang dot" value="男"><span class="yincang">男</span><span class="span">ha</span><input type="radio" name="sex" value="女" class="yincang dot"><span class="yincang">女</span></p>
<p class="pleft">年<span class="span">姓名</span>龄：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$age 周岁")?></span><input name="age" type="text" class="text_input yincang" max="120" min="0" value="周岁"></p>
<p class="pright">身<span class="span">姓名</span>高：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$height 厘米/cm")?></span><input name="height" type="text" class="text_input yincang" max="220" min="0" value="厘米/cm"></p>
<p class="pleft">体<span class="span">姓名</span>重：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$weight 公斤/kg")?></span><input name="weight" type="text" class="text_input yincang" max="220" min="0" value="千克/kg"></p>
<p class="pright">民<span class="span">姓名</span>族：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$nation")?></span><input class="text_input yincang" type="text" name="nation" value="民族"></p>
<p class="plong1">手机号码：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$phone")?></span><input class="text_input_long yincang" type="text" name="phone"></p>
<p class="plong1">个人邮箱：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$email")?></span><input class="text_input_long yincang" type="text" name="email"></p>
<p class="plong1">出生年月：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$year")?></span><input type="text" class="xuanze yincang" name="year"> 年 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$month")?></span><input type="text" class="xuanze yincang" name="month"> 月 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$day")?></span><input type="text" class="xuanze yincang" name="day"> 日</p>
<p class="plong1">家庭住址：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$province")?></span><input type="text" class="xuanze yincang" name="province"> 省 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$city")?></span><input type="text" class="xuanze yincang" name="city"> 市 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$dist")?></span><input type="text" class="xuanze yincang" name="dist"> 区/县</p>
<p class="plong1">详细住址：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$address")?></span><input name="address" type="text" class="text_input_long yincang" style="width: 420px"></p>
<p class="pright" style="text-align: center;"><input type="submit" class="button green yincang medium" name="submit" value="确认提交"><input type="submit" class="button blue medium xianshi" name="submit" value="修改个人信息"></p>
</form>
<div style="clear: both;height: 30px"></div>
<hr style="border:3 double #987cb9;" width="100%" color="#987cb9" SIZE="3">
<?php 
	if (isset($_POST["submit"]) && $_POST["submit"] == "修改个人信息")
	{
		echo("<style>.yincang{display:inline} .xianshi{display:none}</style>");
	}
	if (isset($_POST["submit"]) && $_POST["submit"] == "确认提交")
	{
		$username = $_SESSION["username"];
		$name = $_POST["name"];
		$age = $_POST["age"];
		$height = $_POST["height"];
		$weight = $_POST["weight"];
		$nation = $_POST["nation"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$sex = $_POST["sex"];
		$year = $_POST["year"];
		$month = $_POST["month"];
		$day = $_POST["day"];
		$province = $_POST["province"];
		$city = $_POST["city"];
		$dist = $_POST["dist"];
		$address = $_POST["address"];
		
		if ($name == "" || $age == "" || $height == "" || $weight == "" || $nation == "" || $email == "" || $phone == "" || $sex == "" || $year == "" || $month == "" || $day == "" || $province == "" || $city == "" || $dist == "" || $address == "")
		{
			echo "<script>alert('请完善个人信息');history.go(-1);</script>";
		}
		
		else
			
		{
			mysql_connect("localhost","root","hl1193001636");
			
			mysql_select_db("work_space");
	
			mysql_query("set character set 'utf8'");//读库
	
			mysql_query("set names utf8");
			
			$sql = mysql_query("UPDATE patient_information SET name = '$name',sex = '$sex', age = '$age', nation = '$nation',height = '$height', weight = '$weight' , phone = '$phone',email = '$email',year = '$year',month = '$month',day = '$day',province = '$province',city = '$city',dist = '$dist',address = '$address' WHERE username ='$username'");
			
			if ($sql)
			{				
				echo("<style>.yincang{display:inline;} .xianshi{display:none}</style>");
				echo "<script>alert('个人数据写入成功！');window.location.href='personal detail.php';</script>";

			}
			else
			{
				echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
			}
		}
	}
?>
<h2 style="font-size: 30px;height: 80px;line-height: 80px">既往病史</h2>
<?php
	$illness1 = $sql_arr2['illness1'];
	$illness2 = $sql_arr2['illness2'];
	$illness3 = $sql_arr2['illness3'];
	$illness4 = $sql_arr2['illness4'];
	if ( $illness1 == "" and $illness2 == "" and $illness3 == "" and $illness4 == "" )
	{
		$stage = 0;
		echo("该患者尚未添加既往病史。");
	}
	elseif($illness1 != "" and $illness2 == "" and $illness3 == "" and $illness4 == "")
	{
		$stage = 1;
	}
	elseif($illness1 != "" and $illness2 != "" and $illness3 == "" and $illness4 == "")
	{
		$stage = 2;
	}
	elseif($illness1 != "" and $illness2 != "" and $illness3 != "" and $illness4 == "")
	{
		$stage = 3;
	}
	elseif($illness1 != "" and $illness2 != "" and $illness3 != "" and $illness4 != "")
	{
		$stage = 4;
	}
	if($stage == 0)
	{
		echo("<style>.yincang1,.yincang2,.yincang3,.yincang4{display:none}</style>");
	}
	elseif($stage == 1)
	{
		echo("<style>.yincang2,.yincang3,.yincang4{display:none}.yincang1{display:inline}</style>");
	}
	elseif($stage == 2)
	{
		echo("<style>.yincang3,.yincang4{display:none}.yincang1,.yincang2{display:inline}</style>");
	}
	elseif($stage == 3)
	{
		echo("<style>.yincang4{display:none}.yincang1,.yincang2,.yincang3{display:inline}</style>");
	}
	elseif($stage == 4)
	{
		echo(".yincang1,.yincang2,.yincang3,.yincang4{display:inline}");
	}
?>
<form action="patient detail.php" method="post">
<p class="plong yincang1" style="width: 650px">既往病史 1：<span class="font-blue"><?php echo("$sql_arr2[illness_outlin1]");?></span> 纲 <span class="font-blue"><?php echo("$sql_arr2[illness1]");?></span> 症&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-blue"><?php echo("$sql_arr2[begin_year1]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[begin_month1]");?></span>月 至 <span class="font-blue"><?php echo("$sql_arr2[end_year1]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[end_month1]");?></span>月</p>
<p class="plong yincang2" style="width: 650px">既往病史 2：<span class="font-blue"><?php echo("$sql_arr2[illness_outlin2]");?></span> 纲 <span class="font-blue"><?php echo("$sql_arr2[illness2]");?></span> 症&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-blue"><?php echo("$sql_arr2[begin_year2]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[begin_month2]");?></span>月 至 <span class="font-blue"><?php echo("$sql_arr2[end_year2]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[end_month2]");?></span>月</p>
<p class="plong yincang3" style="width: 650px">既往病史 3：<span class="font-blue"><?php echo("$sql_arr2[illness_outlin3]");?></span> 纲 <span class="font-blue"><?php echo("$sql_arr2[illness3]");?></span> 症&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-blue"><?php echo("$sql_arr2[begin_year3]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[begin_month3]");?></span>月 至 <span class="font-blue"><?php echo("$sql_arr2[end_year3]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[end_month3]");?></span>月</p>
<p class="plong yincang4" style="width: 650px">既往病史 4：<span class="font-blue"><?php echo("$sql_arr2[illness_outlin4]");?></span> 纲 <span class="font-blue"><?php echo("$sql_arr2[illness4]");?></span> 症&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-blue"><?php echo("$sql_arr2[begin_year4]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[begin_month4]");?></span>月 至 <span class="font-blue"><?php echo("$sql_arr2[end_year4]");?></span>年<span class="font-blue"><?php echo("$sql_arr2[end_month4]");?></span>月</p>
</form>
</div>
<div style="height: 5px"></div>
<hr style="border:3 double #987cb9;margin-left: 10%" width="80%" color="#987cb9" SIZE="3">
</div>
</body>
</html>