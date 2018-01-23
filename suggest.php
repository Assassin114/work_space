<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>医生建议</title>
</head>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ($_POST['suggest'] == "")
		{
			echo "<script>alert('医生请填写建议');history.go(-1);</script>";
		}
		else
		{
			echo "<script>alert('提交成功，请填写后续表单');history.go(-1);</script>";
		}
	}
?>
<body>
</body>
</html>