<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/large_scale.css"/>
<link rel="stylesheet" type="text/css" href="css/patient_table.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<?php
error_reporting(0);
session_start();
$doctor = $_SESSION["doctor"];
$username = $_SESSION["patient"];
mysql_connect("localhost","root","hl1193001636");
mysql_select_db("work_space");
// 设定字符集
mysql_query("set character set 'utf8'");//读库   
mysql_query("set names utf8");
$sql1 = mysql_query("select * from first_diagnosis where username = '$username'");
$sql_arr1 = mysql_fetch_assoc($sql1);
$illnes_outline1 = $sql_arr1['illness_outline'];
$illness1 = $sql_arr1['illness'];
if($illness1 == "" or $illnes_outline1 == "")
{
	echo("<style>.yincang{display:none}</style>");
}
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
<title>就诊历史</title>
</head>

<body style="text-align: center;height: 1120px">
<h1 class="header">就诊历史</h1>
<div class="table">
<div style="width: 80%;margin-left: 10%;margin-top: 80px;height: 830px">
<form action="diagnosis history.php" method="post">
<h2 class="font-blue yincang">第一次循环诊疗过程</h2>
<p class="plong yincang">第一次诊疗：<?php echo("<span class='font-blue'>$illnes_outline1</span> 纲 <span class='font-blue'>$illness1</span> 症");?></p>
<br><br>
<p class="plong yincang">第二次诊疗：<?php echo("<span class='font-blue'>$illnes_outline2</span> 纲 <span class='font-blue'>$illness2</span> 症");?></p>
<br><br>
<p class="plong yincang">第三次诊疗：<?php echo("<span class='font-blue'>$illnes_outline3</span> 纲 <span class='font-blue'>$illness3</span> 症");?></p>
<br><br>
<p class="plong yincang">最终次诊疗：<?php echo("<span class='font-blue'>$illnes_outline4</span> 纲 <span class='font-blue'>$illness4</span> 症");?></p>
<p class="pright"><input type="submit" name="submit" class="button green" value="删除该记录"></p>
</form>
<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "删除该记录")
	{
		mysql_connect("localhost","root","hl1193001636");
		mysql_select_db("work_space");
		// 设定字符集
		mysql_query("set character set 'utf8'");//读库   
		mysql_query("set names utf8");
		//$sql = "delete from first_diagnosis where username = '$username';delete from second_diagnosis where username = '$username';delete from 			yhird_diagnosis where username = '$username';delete from forth_diagnosis where username = '$username';";
		//$res = mysql_query($sql);
		//if($res)
		//{
		echo("<style>.yincang{display:none}</style>");
		echo("<script>alert('删除记录成功');</script>");
		//}
	}
		//else
		//{
			//echo("<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>");
		//}
	
?>
</div>
</div>
</body>
</html>