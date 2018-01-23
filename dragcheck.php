<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用药上传</title>
</head>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ($_POST['drag0'] == "")
		{
			echo "<script>alert('请至少开一种药')；history.go(-1);</script>";
		}
		else
		{
			echo "<script>alert('开药成功！')；history.go(-1);</script>";
		}
		
	}
?>
<body>
</body>
</html>