<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/person_large.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/person_medium.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/person_small.css" />
<link rel="stylesheet" type="text/css" href="css/list_effect.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<?php
error_reporting(0);
session_start();
$username = "";
$username = $_SESSION["username"];
mysql_connect("localhost","root","hl1193001636");
mysql_select_db("work_space");
// 设定字符集
mysql_query("set character set 'utf8'");//读库   
mysql_query("set names utf8");
$sql = mysql_query("select * from forth_diagnosis where username = '$username'");
$sql_arr = mysql_fetch_assoc($sql);
$suggest1 = $sql_arr['suggest1'];
$suggest2 = $sql_arr['suggest2'];
$suggest3 = $sql_arr['suggest3'];
$suggest4 = $sql_arr['suggest4'];
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
        <li><a href="personal center information.php">个人资料</a></li>
        <li><a href="personal center history.php">既往病史</a></li>
        <li><a href="personal center diagnose.php">诊断记录</a></li>
        <li><a href="personal center drag information.php">开药记录</a></li>
        <li class="selected"><a href="personal center doctor suggest.php" style="color:#000000;font-size: 24px;">医生建议</a></li>
        <li><a href="personal center feedback.php">意见反馈</a></li>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	<div style="height: 50px"></div>
	<p class="plong">医生建议一：<span class="font-blue"><?php echo("$suggest1");?></span></p>
	<p class="plong">医生建议二：<span class="font-blue"><?php echo("$suggest2");?></span></p>
	<p class="plong">医生建议三：<span class="font-blue"><?php echo("$suggest3");?></span></p>
	<p class="plong">医生建议四：<span class="font-blue"><?php echo("$suggest4");?></span></p>
	</div>
	</div>

</div>
</body>
</html>