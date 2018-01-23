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
        <li style="background-color:#8C8C8C;"><a style="font-size: 21px;color: #000000;" href="patient diagnose second.php">第二次诊疗</a></li>
        <ul>
        <li style="background-color:#8C8C8C;" class="fontpx"><a style="color: #000000" href="patient diagnose second sign.php">各项体征</a></li>
        <li class="fontpx"><a href="patient diagnose second result.php">诊断结果</a></li>
        <li class="fontpx"><a href="patient diagnose second drag.php">药物配给</a></li>
        </ul>
        <li><a href="patient diagnose third.php">第三次诊疗</a></li>
        <li><a href="patient diagnose forth.php">最终诊疗</a></li>
        <li><a class="font-blue" href="doctorgate.php">返回</a></li>
    </ul>
    </div>
	</div>
	<div class="rightpart">
	
	<form action="patient diagnose second sign.php" method="post">
	<br>
	<h3 style="text-align: left;margin-left: 30px;">基本体征</h3>
	<br>
	<p class="pleft">体温：<input class="text_input" type="number" name="heat" min="34" max="43" step="0.1">℃</p>
	<p class="pright">呼吸频次：
	<select class="xuanze" name="breath" id="breath">
	<option value="12-16">12-16</option>
	<option value="16-20">16-20</option>
	<option value="20-24">20-24</option>
	<option value="24-28">24-28</option>
	<option value="28-32">28-32</option>
	</select> 次/分</p>
	<p class="pleft">血压：<input class="text_input_short" name="low" type="number" min="20" max="120" step="5">/<input  class="text_input_short" type="number" name="high" min="40" max="220" step="5"> mmHg</p>
	<p class="pright">心<span class="span">姓名</span>率： <input class="xuanze" type="number" name="heartrate" min="50" max="150" step="2"> 次/分</p>
	
	
	<h3 style="text-align: left;margin-left: 30px;margin-top: 140px">舌苔特征</h3>
	<p class="pleft">舌苔颜色：
	<select class="xuanze" name="color" id="color">
	<option value="白">白</option>
	<option value="黄">黄</option>
	<option value="灰">灰</option>
	<option value="黑">黑</option>
	</select> 苔</p>
	<p class="pright">舌苔厚度：
	<select class="xuanze" name="thick" id="thick">
	<option value="较薄">较薄</option>
	<option value="中等">中等</option>
	<option value="较厚">较厚</option>
	</select></p>
	<p class="pleft">舌苔燥润：
	<select class="xuanze" name="wet" id="wet">
	<option value="干燥">干燥</option>
	<option value="中等">中等</option>
	<option value="湿润">湿润</option>
	</select></p>
	<p class="pright">有无苔根：
	<select class="xuanze" name="yesorno" id="yesorno">
	<option value="有">有</option>
	<option value="无">无</option>
	</select></p>
	<p class="pleft">全、偏苔：
	<select class="xuanze" name="allorpart" id="allorpart">
	<option value="全苔">全苔</option>
	<option value="偏苔">偏苔</option>
	</select></p>
	<p class="pright">是否剥落：
	<select class="xuanze" name="fall" id="fall">
	<option value="无剥落">无剥落</option>
	<option value="部分剥落">部分剥落</option>
	<option value="全部剥落">全部剥落</option>
	</select></p>
	
	<h3 style="text-align: left;margin-left: 25px;margin-top: 200px">脉象特征</h3>
	<p class="plong">脉位：部位 <select class="xuanze" name="location" id="location">
	<option value="浮脉">浮脉</option>
	<option value="沉脉">沉脉</option>
	</select>
	长度 <select class="xuanze" name="len" id="len">
	<option value="长脉">长脉</option>
	<option value="短脉">短脉</option>
	</select></p>
	<p class="plong">脉数：至数 <select class="xuanze" name="zhishu" id="zhishu">
	<option value="数脉">数脉</option>
	<option value="迟脉">迟脉</option>
	</select>
	节律 <select class="xuanze" name="jielv" id="jielv">
	<option value="正常">正常</option>
	<option value="促脉">促脉</option>
	<option value="结脉">结脉</option>
	<option value="代脉">代脉</option>
	<option value="散脉">散脉</option>
	<option value="涩脉">涩脉</option>
	</select></p>	
	<p class="plong">脉型：脉管 <select class="xuanze" name="maiguan" id="maiguan">
	<option value="充盈">充盈</option>
	<option value="较充盈">较充盈</option>
	<option value="正常">正常</option>
	<option value="较空虚">较空虚</option>
	<option value="空虚">空虚</option>
	</select>	
	脉搏幅度 <select class="xuanze" name="maifu" id="maifu">
	<option value="大">大</option>
	<option value="较大">较大</option>
	<option value="正常">正常</option>
	<option value="较小">较小</option>
	<option value="小">小</option>
	</select></p>
	<p class="plong">脉势： 寸&nbsp;<select class="xuanze" name="cun" id="cun">
	<option value="浮脉">浮脉</option>
	<option value="沉脉">沉脉</option>
	<option value="迟脉">迟脉</option>
	<option value="数脉">数脉</option>
	<option value="虚脉">虚脉</option>
	<option value="实脉">实脉</option>
	<option value="滑脉">滑脉</option>
	<option value="洪脉">洪脉</option>
	<option value="细脉">细脉</option>
	<option value="弦脉">弦脉</option>
	<option value="结脉">结脉</option>
	<option value="代脉">代脉</option>
	<option value="散脉">散脉</option>
	<option value="涩脉">涩脉</option>
	</select>&nbsp;关&nbsp;<select class="xuanze" name="guan" id="guan">
	<option value="浮脉">浮脉</option>
	<option value="沉脉">沉脉</option>
	<option value="迟脉">迟脉</option>
	<option value="数脉">数脉</option>
	<option value="虚脉">虚脉</option>
	<option value="实脉">实脉</option>
	<option value="滑脉">滑脉</option>
	<option value="洪脉">洪脉</option>
	<option value="细脉">细脉</option>
	<option value="弦脉">弦脉</option>
	<option value="结脉">结脉</option>
	<option value="代脉">代脉</option>
	<option value="散脉">散脉</option>
	<option value="涩脉">涩脉</option>
	</select>&nbsp;尺&nbsp;<select class="xuanze" name="chi" id="chi">
	<option value="浮脉">浮脉</option>
	<option value="沉脉">沉脉</option>
	<option value="迟脉">迟脉</option>
	<option value="数脉">数脉</option>
	<option value="虚脉">虚脉</option>
	<option value="实脉">实脉</option>
	<option value="滑脉">滑脉</option>
	<option value="洪脉">洪脉</option>
	<option value="细脉">细脉</option>
	<option value="弦脉">弦脉</option>
	<option value="结脉">结脉</option>
	<option value="代脉">代脉</option>
	<option value="散脉">散脉</option>
	<option value="涩脉">涩脉</option>
	</select></p>
	<p class="pright"><input type="submit" name="submit" class="button green" value="保存并提交"></p>
	</form>
	</div>
	</div>

</div>
</body>
<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "保存并提交")
	{
		$heat = $_POST["heat"];
		$breath = $_POST["breath"];
		$low = $_POST["low"];
		$high = $_POST["high"];
		$heartrate = $_POST["heartrate"];
		$color = $_POST["color"];
		$thick = $_POST["thick"];
		$wet = $_POST["wet"];
		$yesorno = $_POST["yesorno"];
		$allorpart = $_POST["allorpart"];
		$fall = $_POST["fall"];
		$location = $_POST["location"];
		$len = $_POST["len"];
		$zhishu = $_POST["zhishu"];
		$jielv = $_POST["jielv"];
		$maiguan = $_POST["maiguan"];
		$maifu = $_POST["maifu"];
		$cun = $_POST["cun"];
		$guan = $_POST["guan"];
		$chi = $_POST["chi"];
		if($heat == "" || $low == "" || $high == "" || $heartrate == "")
		{
			echo("<script>alert('请确认信息完整');history.go(-1);</script>");
		}
		else
		{
			mysql_connect("localhost","root","hl1193001636");
			mysql_select_db("work_space");
			mysql_query("set character set 'utf8'");//读库
			mysql_query("set names utf8");
			$sql = mysql_query("update second_diagnosis set heat='$heat', breath='$breath', low='$low', high='$high', heartrate='$heartrate', color='$color', thick='$thick', wet='$wet', yesorno='$yesorno', allorpart='$allorpart', fall='$fall', location='$location', len='$len', zhishu='$zhishu', jielv='$jielv', maiguan='$maiguan', maifu='$maifu', cun='$cun', guan='$guan', chi='$chi' where username='$username' and number = '$_SESSION[time]'");
			//
			if(sql)
			{
				echo("<script>alert('提交成功！');window.location.href='patient diagnose second result.php';</script>");
			}
			else
			{
				echo("<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>");
			}
		}
	}
?>
</html>