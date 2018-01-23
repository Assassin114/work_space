<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>createsql</title>
</head>

<?php

// 连主库
	mysql_connect("localhost","root","hl1193001636");
			
	mysql_select_db("work_space");
	
	mysql_query("set character set 'utf8'");//读库   
	
	mysql_query("set names utf8");
	

// 检测连接
	if (mysqli_connect_errno())
	{
    	echo "连接失败: " . mysqli_connect_error();
	}
	else
	{
		echo "连接成功";
	}
	
	$sql = mysql_query("update second_diagnosis set low='45',high='57' where username = 'haoliang'");
	if($sql)
	{
		echo("修改成功");
	}
	
?>

<body>
</body>
</html>

