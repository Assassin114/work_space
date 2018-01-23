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
?>
<html>
<head>
<title>select patient</title>
</head>

<body style="text-align: center;height: 1120px">
<h1 class="header">患者列表</h1>
<div style="height: 1000px">
<form action="selectpatient.php" method="post" class="table">
<p style="height: 40px"></p>
<table align="center" border="1px" cellspacing="0">
<tr><th width="60px">序号</th><th width="100px">姓名</th><th width="50px">性别</th><th width="50px">年龄</th><th width="90px">就诊次数</th><th>服务选择</th></tr>

<?php
// 连接数据库
mysql_connect("localhost","root","hl1193001636");
mysql_select_db("work_space");
// 设定字符集
mysql_query("set character set 'utf8'");//读库   
mysql_query("set names utf8");
// 查询patient表中有用户名的数据
$sql = mysql_query("select * from patient_information where name != ''");
$datarow = mysql_num_rows($sql); //长度
// 遍历数据
$id = 1;
for($i=0;$i<$datarow;$i++){
	$sql_arr = mysql_fetch_assoc($sql);
	mysql_connect("localhost","root","hl1193001636");
	mysql_select_db("work_space");
	// 设定字符集
	mysql_query("set character set 'utf8'");//读库   
	mysql_query("set names utf8");
	$username[$i] = $sql_arr['username'];
	$match = mysql_query("select * from patient_information where username = '$username[$i]'");
	$match_arr = mysql_fetch_assoc($match);
	$time[$i] = $match_arr['time'];
	$name[$i] = $sql_arr['name'];
	$age[$i] = $sql_arr['age'];
	$sex[$i] = $sql_arr['sex'];
	echo "<tr height = '30px'><th>$id</th><th><input type='submit' style='width:80px;' value='$name[$i]' name='xiangxi$i' class='button blue small'></th><th>$sex[$i]</th><th>$age[$i]</th><th>$time[$i]</th>
	<th style='line-height = 40px'><input type='submit' class='button white small'  name='xinzeng$i' value='新增就诊'>
	<span style='opacity: 0;'>a</span>
	<input type = 'submit' name='lishi$i' class='button white small' value='就诊历史'>
	<span style='opacity: 0;'>a</span>
	<input type = 'submit' name='shanchu$i' class='button white small' value='删除患者'>
	</th></tr>";
	$id = $id + 1;
}
?>

</table>

<br><br>
</form>
<?php
	for($a=0;$a<$datarow;$a++)
	{
		if(isset($_POST["xinzeng$a"]) && $_POST["xinzeng$a"] == "新增就诊")
		{
			$_SESSION['patient'] = $username[$a];
			$_SESSION['name'] = $name[$a];
			$number = $time[$a] + 1;
			$_SESSION["time"] = $number;
			mysql_connect("localhost","root","hl1193001636");
			mysql_select_db("work_space");
			// 设定字符集
			mysql_query("set character set 'utf8'");//读库   
			mysql_query("set names utf8");
			$res = mysql_query("update patient_information set time = '$number' where username = '$username[$a]'");
			$insert = mysql_query("insert into first_diagnosis (number,username) values ('$number','$username[$a]')");
			mysql_query("insert into second_diagnosis (number,username) values ('$number','$username[$a]')");
			mysql_query("insert into third_diagnosis (number,username) values ('$number','$username[$a]')");
			mysql_query("insert into forth_diagnosis (number,username) values ('$number','$username[$a]')");
			if($res != "" and $insert != "")
			{
				echo("<script>alert('新增就诊成功！');window.location.href='patient diagnose.php';</script>");
			}
			else
			{
				echo("<script>alert('系统繁忙，请稍后重试')</script>");
			}
		}
	}
	for($a=0;$a<$datarow;$a++)
	{
		if(isset($_POST["xiangxi$a"]) && $_POST["xiangxi$a"] == "$name[$a]")
		{
			$_SESSION['patient'] = $username[$a];
			echo("<script>window.location.href='patient detail.php';</script>");
		}
	}
	for($a=0;$a<$datarow;$a++)
	{
		if(isset($_POST["lishi$a"]) && $_POST["lishi$a"] == "就诊历史")
		{
			$_SESSION['patient'] = $username[$a];
			echo("<script>window.location.href='diagnosis history.php';</script>");
		}
	}
	for($a=0;$a<$datarow;$a++)
	{
		if(isset($_POST["shanchu$a"]) && $_POST["shanchu$a"] == "删除患者")
		{
			$_SESSION['patient'] = $username[$a];
			$delete1 = "DELETE FROM patient_information WHERE username ='$_SESSION[patient]'";
			$delete2 = "DELETE FROM anamnesis WHERE username ='$_SESSION[patient]'";
			$res1 = mysql_query($delete1);
			$res2 = mysql_query($delete2);
			if(res1 != "" and res2 != "")
			{
				echo("<script>alert('患者 $name[$a] 已删除');window.location.href='selectpatient.php'</script>");
			}
			else
			{
				echo("<script>alert('系统繁忙，请稍后重试')</script>");
			}
		}
	}
?>
</div>
<div style="clear: both;height: 50px">
</div>
<div style="text-align: center;color: #6E6E6E;font: 13px 'Microsoft yahei',Arial,Helvetica, sans-serif;">
<p>&copy;北京大学信息科学技术学院卫星通信研究所开发</p>
</div>
</body>
</html>