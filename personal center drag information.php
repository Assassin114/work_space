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
$sql2 = mysql_query("select * from second_diagnosis where username = '$username'");
$sql3 = mysql_query("select * from third_diagnosis where username = '$username'");
$sql4 = mysql_query("select * from forth_diagnosis where username = '$username'");
$sql_arr1 = mysql_fetch_assoc($sql1);
$sql_arr2 = mysql_fetch_assoc($sql2);
$sql_arr3 = mysql_fetch_assoc($sql3);
$sql_arr4 = mysql_fetch_assoc($sql4);
$drag1_1 = $sql_arr1['drag1'];$weight1_1 = $sql_arr1['weight1'];
$drag1_2 = $sql_arr1['drag2'];$weight1_2 = $sql_arr1['weight2'];
$drag1_3 = $sql_arr1['drag3'];$weight1_3 = $sql_arr1['weight3'];
$drag1_4 = $sql_arr1['drag4'];$weight1_4 = $sql_arr1['weight4'];
$drag1_5 = $sql_arr1['drag5'];$weight1_5 = $sql_arr1['weight5'];
$drag2_1 = $sql_arr2['drag1'];$weight2_1 = $sql_arr2['weight1'];
$drag2_2 = $sql_arr2['drag2'];$weight2_2 = $sql_arr2['weight2'];
$drag2_3 = $sql_arr2['drag3'];$weight2_3 = $sql_arr2['weight3'];
$drag2_4 = $sql_arr2['drag4'];$weight2_4 = $sql_arr2['weight4'];
$drag2_5 = $sql_arr2['drag5'];$weight2_5 = $sql_arr2['weight5'];
$drag3_1 = $sql_arr3['drag1'];$weight3_1 = $sql_arr3['weight1'];
$drag3_2 = $sql_arr3['drag2'];$weight3_2 = $sql_arr3['weight2'];
$drag3_3 = $sql_arr3['drag3'];$weight3_3 = $sql_arr3['weight3'];
$drag3_4 = $sql_arr3['drag4'];$weight3_4 = $sql_arr3['weight4'];
$drag3_5 = $sql_arr3['drag5'];$weight3_5 = $sql_arr3['weight5'];
$drag4_1 = $sql_arr4['drag1'];$weight4_1 = $sql_arr4['weight1'];
$drag4_2 = $sql_arr4['drag2'];$weight4_2 = $sql_arr4['weight2'];
$drag4_3 = $sql_arr4['drag3'];$weight4_3 = $sql_arr4['weight3'];
$drag4_4 = $sql_arr4['drag4'];$weight4_4 = $sql_arr4['weight4'];
$drag4_5 = $sql_arr4['drag5'];$weight4_5 = $sql_arr4['weight5'];
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
        <li class="selected"><a href="personal center drag information.php" style="color:#000000;font-size: 24px;">开药记录</a></li>
        <li><a href="personal center doctor suggest.php">医生建议</a></li>
        <li><a href="personal center feedback.php">意见反馈</a></li>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	<div style="height: 50px"></div>
	<h1 class="font-blue">第一次循环诊疗过程</h1>
	<div style="height: 20px"></div>
	<table align="center" border="1px" cellspacing="0" style="width: 80%;margin-left: 10%">
	<tr><th></th><th>药品1</th><th>药品2</th><th>药品3</th><th>药品4</th><th>药品5</th></tr>
	<tr><th>第一次诊疗</th><th><?php echo("$drag1_1 $weight1_1 克");?></th><th><?php echo("$drag1_2 $weight1_2 克");?></th><th><?php echo("$drag1_3 $weight1_3 克");?></th><th><?php echo("$drag1_4 $weight1_4 克");?></th><th><?php echo("$drag1_5 $weight1_5 克");?></th></tr>
	<tr><th>第二次诊疗</th><th><?php echo("$drag2_1 $weight2_1 克");?></th><th><?php echo("$drag2_2 $weight2_2 克");?></th><th><?php echo("$drag2_3 $weight2_3 克");?></th><th><?php echo("$drag2_4 $weight2_4 克");?></th><th><?php echo("$drag2_5 $weight2_5 克");?></th></tr>
	<tr><th>第三次诊疗</th><th><?php echo("$drag3_1 $weight3_1 克");?></th><th><?php echo("$drag3_2 $weight3_2 克");?></th><th><?php echo("$drag3_3 $weight3_3 克");?></th><th><?php echo("$drag3_4 $weight3_4 克");?></th><th><?php echo("$drag3_5 $weight3_5 克");?></th></tr>
	<tr><th>最终次诊疗</th><th><?php echo("$drag4_1 $weight4_1 克");?></th><th><?php echo("$drag4_2 $weight4_2 克");?></th><th><?php echo("$drag4_3 $weight4_3 克");?></th><th><?php echo("$drag4_4 $weight4_4 克");?></th><th><?php echo("$drag4_5 $weight4_5 克");?></th></tr>
	</table>
	</div>
	</div>

</div>
</body>
</html>