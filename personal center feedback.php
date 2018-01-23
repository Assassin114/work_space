<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/person_large.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/person_medium.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/person_small.css" />
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
        <li><a href="personal center information.php">个人资料</a></li>
        <li><a href="personal center history.php">既往病史</a></li>
        <li><a href="personal center diagnose.php">诊断记录</a></li>
        <li><a href="personal center drag information.php">开药记录</a></li>
        <li><a href="personal center doctor suggest.php">医生建议</a></li>
        <li class="selected"><a href="personal center feedback.php" style="color:#000000;font-size: 24px;">意见反馈</a></li>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	<h1 style="margin-top: 200px">正在开发中，敬请期待</h1>
	</div>
	</div>

</div>
</body>
</html>