<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>体征上传</title>
</head>
<?php
	$heat = $low = $high = $breath= $heartrate = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$heat = $_POST["heat"];
		$low = $_POST["low"];
		$high = $_POST["high"];
		$breath = $_POST["breath"];
		$heartrate = $_POST["heartrate"];
		if ($heat == "")
		{
			echo "<script>alert('请输入体温信息');history.go(-1);</script>"; 
		}
	
		if ($low == "")
		{
			echo "<script>alert('请输入血压低压信息');history.go(-1);</script>";
		}
	
		if ($high == "")
		{
			echo "<script>alert('请输入血压高压信息');history.go(-1);</script>";
		}
		if ($heartrate == "")
		{
			echo "<script>alert('请输入心率信息');history.go(-1);</script>";
		}
		if  ($heat != "" and $low != "" and $high != "" and $breath != "" and $heartrate != "")
		{
			echo "<script>alert('提交成功，请填写后续表单');history.go(-1);</script>";
			
			mysql_connect("localhost","root","hl1193001636");
			
			mysql_select_db("work_space"); 
		}
	}
	
	
?>
<body>
</body>
</html>