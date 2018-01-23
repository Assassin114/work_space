<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/person_large.css"/>
<link rel="stylesheet" type="text/css" href="css/list_effect.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />
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
        <li style="background-color:#8C8C8C;" class="fontpx"><a style="color: #000000" href="patient diagnose forth drag.php">药物配给</a></li>
        </ul>
        <li><a class="font-blue" href="doctorgate.php">返回</a></li>
    </ul>
    
    </div>
    
	</div>
	<div class="rightpart">
	<div style="height: 20px"></div>
	<h2>药物配给</h2>
	<form action="patient diagnose forth drag.php" method="post">
	<p class="pleft1">药物名称：<input type="text" name="drag1" class="text_input"></p>
	<p class="pright1">重<span class="span">哈哈</span>量：<input type="text" name="weight1" class="text_input">克</p>
	<p class="pleft1">服用方式：<select class="text_input" name="style1"><option value="口服">口服</option><option value="吞服">吞服</option><option value="含服">含服</option></select></p>
	<p class="pright1">其它方式：<input type="text" name="other1" class="text_input"></p>
	<p class="plong1">备<span class="span">哈哈</span>注：<input type="text" name="remark1" class="text_input_long1"></p>
	<br><br><br><br><br><br><br>
	<p class="pleft1">药物名称：<input type="text" name="drag2" class="text_input"></p>
	<p class="pright1">重<span class="span">哈哈</span>量：<input type="text" name="weight2" class="text_input">克</p>
	<p class="pleft1">服用方式：<select class="text_input" name="style2"><option value="口服">口服</option><option value="吞服">吞服</option><option value="含服">含服</option></select></p>
	<p class="pright1">其它方式：<input type="text" name="other2" class="text_input"></p>
	<p class="plong1">备<span class="span">哈哈</span>注：<input type="text" name="remark2" class="text_input_long1"></p>
	<br><br><br><br><br><br><br>
	<p class="pleft1">药物名称：<input type="text" name="drag3" class="text_input"></p>
	<p class="pright1">重<span class="span">哈哈</span>量：<input type="text" name="weight3" class="text_input">克</p>
	<p class="pleft1">服用方式：<select class="text_input" name="style3"><option value="口服">口服</option><option value="吞服">吞服</option><option value="含服">含服</option></select></p>
	<p class="pright1">其它方式：<input type="text" name="other3" class="text_input"></p>
	<p class="plong1">备<span class="span">哈哈</span>注：<input type="text" name="remark3" class="text_input_long1"></p>
	<br><br><br><br><br><br><br>
	<p class="pleft1">药物名称：<input type="text" name="drag4" class="text_input"></p>
	<p class="pright1">重<span class="span">哈哈</span>量：<input type="text" name="weight4" class="text_input">克</p>
	<p class="pleft1">服用方式：<select class="text_input" name="style4"><option value="口服">口服</option><option value="吞服">吞服</option><option value="含服">含服</option></select></p>
	<p class="pright1">其它方式：<input type="text" name="other4" class="text_input"></p>
	<p class="plong1">备<span class="span">哈哈</span>注：<input type="text" name="remark4" class="text_input_long1"></p>
	<br><br><br><br><br><br><br>
	<p class="pleft1">药物名称：<input type="text" name="drag5" class="text_input"></p>
	<p class="pright1">重<span class="span">哈哈</span>量：<input type="text" name="weight5" class="text_input">克</p>
	<p class="pleft1">服用方式：<select class="text_input" name="style5"><option value="口服">口服</option><option value="吞服">吞服</option><option value="含服">含服</option></select></p>
	<p class="pright1">其它方式：<input type="text" name="other5" class="text_input"></p>
	<p class="plong1">备<span class="span">哈哈</span>注：<input type="text" name="remark5" class="text_input_long1"></p>
	<p class="pright"><input type="submit" name="submit" class="button green" value="保存并提交"></p>
	</form>
	</div>
	</div>

</div>
</body>
<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "保存并提交")
	{
		$drag1 = $_POST["drag1"];$weight1 = $_POST["weight1"];$style1 = $_POST["style1"];
		$drag2 = $_POST["drag2"];$weight2 = $_POST["weight2"];$style2 = $_POST["style2"];
		$drag3 = $_POST["drag3"];$weight3 = $_POST["weight3"];$style3 = $_POST["style3"];
		$drag4 = $_POST["drag4"];$weight4 = $_POST["weight4"];$style4 = $_POST["style4"];
		$drag5 = $_POST["drag5"];$weight5 = $_POST["weight5"];$style5 = $_POST["style5"];
		$other1 = $_POST["other1"];$remark1 = $_POST["remark1"];
		$other2 = $_POST["other2"];$remark2 = $_POST["remark2"];
		$other3 = $_POST["other3"];$remark3 = $_POST["remark3"];
		$other4 = $_POST["other4"];$remark4 = $_POST["remark4"];
		$other5 = $_POST["other5"];$remark5 = $_POST["remark5"];
		if($drag1 == "" or $weight1 == "")
		{
			echo("<script>alert('请至少开出一种药物');history.go(-1);</script>");
		}
		else
		{
			mysql_connect("localhost","root","hl1193001636");
			mysql_select_db("work_space");
			mysql_query("set character set 'utf8'");//读库
			mysql_query("set names utf8");
			$sql = mysql_query("update forth_diagnosis set drag1='$drag1',drag2='$drag2',drag3='$drag3',drag4='$drag4',drag5='$drag5',weight1 = '$weight1',weight2 = '$weight2',weight3 = '$weight3',weight4 = '$weight4',weight5 = '$weight5', style1 = '$style1' , style2 = '$style2' , style3='$style3',style4='$style4',style5='$style5', other1='$other1', other2='$other2', other3='$other3', other4='$other4', other5='$other5', remark1='$remark1', remark2='$remark2', remark3='$remark3', remark4='$remark4', remark5='$remark5' where username = '$username' and number = '$_SESSION[time]'");
			if($sql)
			{
				echo("<script>alert('提交成功！')</script>");
			}
			else
			{
			 echo("<script>alert('系统繁忙，请稍后再试')</script>");
			}
		}
	}
?>
</html>