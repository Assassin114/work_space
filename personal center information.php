<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/person_large.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/person_medium.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/person_small.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />
<link rel="stylesheet" type="text/css" href="css/list_effect.css" />
<?php
error_reporting(0);
session_start();
$username = "";
$username = $_SESSION["username"];
?>
<html>
<head>
<meta charset="utf-8">
<title>个人中心</title>
</head>
<style>
	#menu ul li.selected{
		background-color:#8C8C8C;
		font-size: 24px;
		font-color: #000000;
	}
</style>
<body>
<div class="header">
个人中心
</div>
<div id="container" class="container">
	<div id="allpart" class="allpart">
	<div id="up" class="up">
		尊敬的&nbsp;
		<?php
		echo("<span style='color:#1935A3;opacity: 1;'>$username</span>");
		?> 
		&nbsp;您好！欢迎使用本系统！
	</div>
	<div class="leftpart">
	<div id="menu">
	<ul>
        <li class="selected"><a href="personal center information.php" style="color:#000000;font-size: 24px;">个人资料</a></li>
        <li><a href="personal center history.php">既往病史</a></li>
        <li><a href="personal center diagnose.php">诊断记录</a></li>
        <li><a href="personal center drag information.php">开药记录</a></li>
        <li><a href="personal center doctor suggest.php">医生建议</a></li>
        <li><a href="personal center feedback.php">意见反馈</a></li>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	<?php
		mysql_connect("localhost","root","hl1193001636");
		mysql_select_db("work_space"); 
		mysql_query("set character set 'utf8'");//读库
		mysql_query("set names utf8");
		$sql = mysql_query("select * from patient_information where username = '$username'");
		$sql_arr = mysql_fetch_assoc($sql);
		if ($sql_arr['name'] == "")
		{		
			echo("<style>.xianshi{display:none;} .yincang{display:inline}</style>");
			echo("<p class='center'>您还没有填写过个人信息，请填写个人信息。</p>");
	
		}
		else
		{
			$name = $sql_arr['name'];
			$sex = $sql_arr['sex'];
			$age = $sql_arr['age'];
			$height = $sql_arr['height'];
			$weight = $sql_arr['weight'];
			$nation = $sql_arr['nation'];
			$phone = $sql_arr['phone'];
			$email = $sql_arr['email'];
			$year = $sql_arr['year'];
			$month = $sql_arr['month'];
			$day = $sql_arr['day'];
			$province = $sql_arr['province'];
			$city = $sql_arr['city'];
			$dist = $sql_arr['dist'];
			$address = $sql_arr['address'];
			echo("<style>.yincang{display:none} .xianshi{display:inline;}</style>");
			echo("<p class='center'>您的个人信息已填写完整</p>");
		}
	?>
	<div class="content">
	<div style="height: 40px"></div>
	<form action="personal center information.php" method="post">
	<p class="pleft">姓<span class="span">姓名</span>名：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$name")?></span><input name="name" type="text" class="text_input yincang" value="真实姓名"></p>
	<p class="pright">性<span class="span">姓名</span>别：<span class='xianshi' style='color:#1935A3;opacity: 1;'><?php echo("$sex<")?>/span><input type="radio" name="sex" class="yincang dot" value="男"><span class="yincang">男</span><span class="span">ha</span><input type="radio" name="sex" value="女" class="yincang dot"><span class="yincang">女</span></p>
	<p class="pleft">年<span class="span">姓名</span>龄：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$age 周岁")?></span><input name="age" type="text" class="text_input yincang" max="120" min="0" value="周岁"></p>
	<p class="pright">身<span class="span">姓名</span>高：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$height 厘米/cm")?></span><input name="height" type="text" class="text_input yincang" max="220" min="0" value="厘米/cm"></p>
	<p class="pleft">体<span class="span">姓名</span>重：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$weight 公斤/kg")?></span><input name="weight" type="text" class="text_input yincang" max="220" min="0" value="千克/kg"></p>
	<p class="pright">民<span class="span">姓名</span>族：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$nation")?></span><input class="text_input yincang" type="text" name="nation" value="民族"></p>
	<p class="plong">手机号码：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$phone")?></span><input class="text_input_long yincang" type="text" name="phone"></p>
	<p class="plong">个人邮箱：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$email")?></span><input class="text_input_long yincang" type="text" name="email"></p>
	<p class="plong">出生年月：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$year")?></span><input type="text" class="xuanze yincang" name="year"> 年 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$month")?></span><input type="text" class="xuanze yincang" name="month"> 月 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$day")?></span><input type="text" class="xuanze yincang" name="day"> 日</p>
    <p class="plong">家庭住址：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$province")?></span><input type="text" class="xuanze yincang" name="province"> 省 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$city")?></span><input type="text" class="xuanze yincang" name="city"> 市 <span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$dist")?></span><input type="text" class="xuanze yincang" name="dist"> 区/县
    </p>
    <p class="plong">详细住址：<span class="xianshi" style='color:#1935A3;opacity: 1;'><?php echo("$address")?></span><input name="address" type="text" class="text_input_long yincang" style="width: 420px"></p>
    <p class="pright" style="text-align: center;"><input type="submit" class="button green yincang" name="submit" value="确认提交"><input type="submit" class="button blue xianshi" name="submit" value="修改个人信息"></p>
    </form>
    <?php 
	if (isset($_POST["submit"]) && $_POST["submit"] == "修改个人信息")
	{
		echo("<style>.yincang{display:inline} .xianshi{display:none}</style>");
	}
	?>
	</div>
	</div>
	</div>
</div>
</body>
<?php
session_start();
error_reporting(0);
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
				echo "<script>alert('个人数据写入成功！');window.location.href='personal center.php';</script>";

			}
			else
			{
				echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
			}
		}
	}
?>
</html>