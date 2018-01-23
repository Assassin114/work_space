<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/person_large.css"/>
<link rel="stylesheet" type="text/css" href="css/list_effect.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<?php
error_reporting(0);
session_start();
$username = "";
$doctor = $_SESSION["doctor"];
$username = $_SESSION["patient"];
?>
<html>
<head>
<meta charset="utf-8">
<title>循环诊疗</title>
</head>
<style>
	#menu ul li.selected{
		background-color:#8C8C8C;
		font-size: 21px;
		font-color: #000000;
	}
</style>
<body>
<div class="header">
循环诊疗
</div>
<div id="container" class="container">
	<div id="allpart" class="allpart">
	<div id="up" class="up">
		<span>尊敬的&nbsp;
		<?php
		echo("<span style='color:#1935A3;opacity: 1;'>$doctor</span>");
		?> 
		&nbsp;您好！欢迎使用本系统！</span>
		<span style="float: right">患者姓名：<?php echo("<span style='color:#1935A3;opacity: 1;'>$_SESSION[name]</span>");?></span>
	</div>
	<div class="leftpart">
	<div id="menu" class="menu">
	<ul>
        <li><a href="patient diagnose first.php">第一次诊疗</a></li>
        <li><a href="patient diagnose second.php">第二次诊疗</a></li>
        <li><a href="patient diagnose third.php">第三次诊疗</a></li>
        <li style="background-color:#8C8C8C;"><a style="font-size: 21px;color: #000000;" href="patient diagnose forth.php">最终诊疗</a></li>
        <ul>
        <li class="fontpx"><a href="patient diagnose forth sign.php">各项体征</a></li>
        <li class="fontpx"><a href="patient diagnose forth result.php">最终结果</a></li>
        <li class="fontpx"><a href="patient diagnose forth drag.php">药物配给</a></li>
        <li><a class="font-blue" href="doctorgate.php">返回</a></li>
        </ul>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	<h1 style="margin-top: 200px">最终诊疗</h1>
	</div>
	</div>

</div>
</body>
</html>