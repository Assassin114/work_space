<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>detailupload</title>
</head>
<?php
	$name = $age = $height = $weight = $idnumber = $nation = "";
	if (isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	{
		$name = $_POST["username"];
		$age = $_POST["age"];
		$height = $_POST["height"];
		$weight = $_POST["weight"];
		$idnumber = $_POST["idnumber"];
		$nation = $_POST["nation"];
		if ($name == "" || $age == "" || $height == "" || $weight == "" || $idnumber == "" || $nation == "")
		{
			echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
		}
		else
		{
			echo "<script>alert('个人信息已提交'); history.go(-1);</script>";
		}
	}
?>
<body>
</body>
</html>