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
$sql1 = mysql_query("select * from first_diagnosis where username = '$username'");
$sql_arr1 = mysql_fetch_assoc($sql1);
$illnes_outline1 = $sql_arr1['illness_outline'];
$illness1 = $sql_arr1['illness'];
$sql2 = mysql_query("select * from second_diagnosis where username = '$username'");
$sql_arr2 = mysql_fetch_assoc($sql2);
$illnes_outline2 = $sql_arr2['illness_outline'];
$illness2 = $sql_arr2['illness'];
$sql3 = mysql_query("select * from third_diagnosis where username = '$username'");
$sql_arr3 = mysql_fetch_assoc($sql3);
$illnes_outline3 = $sql_arr3['illness_outline'];
$illness3 = $sql_arr3['illness'];
$sql4 = mysql_query("select * from forth_diagnosis where username = '$username'");
$sql_arr4 = mysql_fetch_assoc($sql4);
$illnes_outline4 = $sql_arr4['illness_outline'];
$illness4 = $sql_arr4['illness'];
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
        <li class="selected"><a href="personal center diagnose.php" style="color:#000000;font-size: 24px;">诊断记录</a></li>
        <li><a href="personal center drag information.php">开药记录</a></li>
        <li><a href="personal center doctor suggest.php">医生建议</a></li>
        <li><a href="personal center feedback.php">意见反馈</a></li>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	<div style="height: 50px"></div>
	<form action="personal center diagnose.php" method="post">
	<h2 class="font-blue yincang">第一次循环诊疗</h2>
	<p class="plong yincang">第一次诊疗：<?php echo("<span class='font-blue font-width'> $illnes_outline1</span> 纲 <span class='font-blue font-width'> $illness1</span> 症");?></p>
	<br><br>
	<p class="plong yincang">第二次诊疗：<?php echo("<span class='font-blue font-width'> $illnes_outline2</span> 纲 <span class='font-blue font-width'> $illness2</span> 症");?></p>
	<br><br>
	<p class="plong yincang">第三次诊疗：<?php echo("<span class='font-blue font-width'> $illnes_outline3</span> 纲 <span class='font-blue font-width'> $illness3</span> 症");?></p>
	<br><br>
	<p class="plong yincang">最终次诊疗：<?php echo("<span class='font-blue font-width'> $illnes_outline4</span> 纲 <span class='font-blue font-width'> $illness4</span> 症");?></p>
	</form>
	</div>
	</div>

</div>
</body>
</html>