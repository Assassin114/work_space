<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/person_large.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/person_medium.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/person_small.css" />
<link rel="stylesheet" type="text/css" href="css/list_effect.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />
<?php
error_reporting(0);
session_start();
$username = "";
$username = $_SESSION["username"];
mysql_connect("localhost","root","hl1193001636");
mysql_select_db("work_space"); 
mysql_query("set character set 'utf8'");//读库
mysql_query("set names utf8");
$sql = mysql_query("select * from anamnesis where username = '$username'");
$sql_arr = mysql_fetch_assoc($sql);
$illness1 = $sql_arr['illness1'];
$illness2 = $sql_arr['illness2'];
$illness3 = $sql_arr['illness3'];
$illness4 = $sql_arr['illness4'];
if ( $illness1 == "" and $illness2 == "" and $illness3 == "" and $illness4 == "" )
{
	$stage = 0;
}
elseif($illness1 != "" and $illness2 == "" and $illness3 == "" and $illness4 == "")
{
	$stage = 1;
}
elseif($illness1 != "" and $illness2 != "" and $illness3 == "" and $illness4 == "")
{
	$stage = 2;
}
elseif($illness1 != "" and $illness2 != "" and $illness3 != "" and $illness4 == "")
{
	$stage = 3;
}
elseif($illness1 != "" and $illness2 != "" and $illness3 != "" and $illness4 != "")
{
	$stage = 4;
}
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
        <li class="selected"><a href="personal center history.php" style="color:#000000;font-size: 24px;">既往病史</a></li>
        <li><a href="personal center diagnose.php">诊断记录</a></li>
        <li><a href="personal center drag information.php">开药记录</a></li>
        <li><a href="personal center doctor suggest.php">医生建议</a></li>
        <li><a href="personal center feedback.php">意见反馈</a></li>
    </ul>
    </div>
	</div>
	
	<div class="rightpart">
	<div style="width: 100%;height: 20px">
	</div>
	
	<form action="personal center history.php" class="content" method="post">
	<?php
		if($stage == 0)
		{
			echo("<style>.yincang2{display:none}</style>");
			echo("<p>您还为添加既往病史记录，请点击“添加记录进行添加”</p>");
		}
		if($stage == 1)
		{
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 1</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin1]</span> 纲 <span class='font-blue'>$illness1</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year1]</span> 年 <span class='font-blue'>$sql_arr[begin_month1]</span> 月 至 <span class='font-blue'>$sql_arr[end_year1]</span> 年 <span class='font-blue'>$sql_arr[end_month1]</span> 月</p>");
			echo("<style>.yincang2{display:none}</style>");
		}
		elseif($stage == 2)
		{
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 1</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin1]</span> 纲 <span class='font-blue'>$illness1</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year1]</span> 年 <span class='font-blue'>$sql_arr[begin_month1]</span> 月 至 <span class='font-blue'>$sql_arr[end_year1]</span> 年 <span class='font-blue'>$sql_arr[end_month1]</span> 月</p>");
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 2</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin2]</span> 纲 <span class='font-blue'>$illness2</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year2]</span> 年 <span class='font-blue'>$sql_arr[begin_month2]</span> 月 至 <span class='font-blue'>$sql_arr[end_year2]</span> 年 <span class='font-blue'>$sql_arr[end_month2]</span> 月</p>");
			echo("<style>.yincang2{display:none}</style>");
		}
		elseif($stage == 3)
		{
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 1</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin1]</span> 纲 <span class='font-blue'>$illness1</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year1]</span> 年 <span class='font-blue'>$sql_arr[begin_month1]</span> 月 至 <span class='font-blue'>$sql_arr[end_year1]</span> 年 <span class='font-blue'>$sql_arr[end_month1]</span> 月</p>");
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 2</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin2]</span> 纲 <span class='font-blue'>$illness2</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year2]</span> 年 <span class='font-blue'>$sql_arr[begin_month2]</span> 月 至 <span class='font-blue'>$sql_arr[end_year2]</span> 年 <span class='font-blue'>$sql_arr[end_month2]</span> 月</p>");
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 3</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin3]</span> 纲 <span class='font-blue'>$illness3</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year3]</span> 年 <span class='font-blue'>$sql_arr[begin_month3]</span> 月 至 <span class='font-blue'>$sql_arr[end_year3]</span> 年 <span class='font-blue'>$sql_arr[end_month3]</span> 月</p>");
			echo("<style>.yincang2{display:none}</style>");
		}
		elseif($stage == 4)
		{
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 1</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin1]</span> 纲 <span class='font-blue'>$illness1</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year1]</span> 年 <span class='font-blue'>$sql_arr[begin_month1]</span> 月 至 <span class='font-blue'>$sql_arr[end_year1]</span> 年 <span class='font-blue'>$sql_arr[end_month1]</span> 月</p>");
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 2</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin2]</span> 纲 <span class='font-blue'>$illness2</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year2]</span> 年 <span class='font-blue'>$sql_arr[begin_month2]</span> 月 至 <span class='font-blue'>$sql_arr[end_year2]</span> 年 <span class='font-blue'>$sql_arr[end_month2]</span> 月</p>");
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 3</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin3]</span> 纲 <span class='font-blue'>$illness3</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year3]</span> 年 <span class='font-blue'>$sql_arr[begin_month3]</span> 月 至 <span class='font-blue'>$sql_arr[end_year3]</span> 年 <span class='font-blue'>$sql_arr[end_month3]</span> 月</p>");
			echo("<p class='plong' style='height: 80px'><span class='font-blue'>既往病史 4</span><br>");
			echo("所患疾病： <span class='font-blue'>$sql_arr[illness_outlin4]</span> 纲 <span class='font-blue'>$illness4</span> 症<br>持续时间： <span class='font-blue'>$sql_arr[begin_year4]</span> 年 <span class='font-blue'>$sql_arr[begin_month4]</span> 月 至 <span class='font-blue'>$sql_arr[end_year4]</span> 年 <span class='font-blue'>$sql_arr[end_month4]</span> 月</p>");
			echo("<style>.yincang2{display:none}</style>");
			echo("<style>.yincang{display:none}</style>");
			echo("<style>.yincang3{display:none}</style>");
		}
		
	?>
	<!--病史1-->
	<p class='plong yincang2' style='height: 80px'><span class='font-blue'>既往病史</span><br>
	所患疾病：
   	<select class="xuanze yincang" style="width: 170px" name="illness_outline1" id="illness_outline1" onChange="change1()">
    	<option selected="selected">请选择疾病纲目</option>
    	<option value="传染性病证">传染性病证</option>
    	<option value="内科病证">内科病证</option>
    	<option value="妇科病证">妇科病证</option>
    	<option value="小儿科病证">小儿科病证</option>
    	<option value="外科病证">外科病证</option>
    	<option value="皮肤科病证">皮肤科病证</option>
    	<option value="伤科病证">伤科病证</option>
    	<option value="五官科病证">五官科病证</option>
    </select>
    纲<span class="span">abc</span>
	<select class="xuanze yincang" style="width: 170px" name="illness1" id="illness1">
  		<option selected="selected">请选择疾病科目</option>
  		<option>伤寒</option>     		 
	</select>
   症
    <br>
	持续时间：
	<select class="xuanze yincang" style="width: 70px" name="begin_year1" id="begin_year1">
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	</select> 年
	<select class="xuanze yincang" style="width: 60px" name="begin_month1" id="begin_month1">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select> 月 至
	<select class="xuanze yincang" style="width: 70px" name="end_year1" id="end_year1">
	<option value="至今">至今</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	</select> 年
	<select class="xuanze yincang" style="width: 60px" name="end_month1" id="end_month1">
	<option value="至今">至今</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select> 月
	</p>
	<?php
		if(isset($_POST["tianjia"]) && $_POST["tianjia"] == "添加记录")
		{
			echo("<style>.yincang2{display:inline}</style>");
		}
		echo("<input type='submit' name='tianjia' class='button blue medium yincang3 atleft' style='margin-top: 80px' value='添加记录'>");
		echo("<input type='submit' name='shanchu' class='button blue medium yincang4 atleft' style='margin-top: 80px' value='删除记录'>");
	?>
	<input type="submit" name="submit" class="button green medium atleft yincang" style="margin-top: 80px" value="确认添加">
	</form>
	</div>
	</div>
<?php
	if(isset($_POST["submit"]) && $_POST["submit"] == "确认添加")
	{
		$illness_outline = $_POST["illness_outline1"];
		$illness = $_POST["illness1"];
		$begin_year = $_POST["begin_year1"];
		$begin_month = $_POST["begin_month1"];
		$end_year = $_POST["end_year1"];
		$end_month = $_POST["end_month1"];
		if($illness == "请选择疾病科目")
		{
			echo("<script>alert('请填写具体病证');history.go(-1);</script>");
		}
		else
		{
			if( $stage == 0)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin1 = '$illness_outline',illness1 = '$illness',begin_year1 = '$begin_year',begin_month1 = '$begin_month',end_year1 = '$end_year',end_month1 = '$end_month' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('既往病史添加成功');window.location.href='personal center history.php';</script>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 1)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin2 = '$illness_outline',illness2 = '$illness',begin_year2 = '$begin_year',begin_month2 = '$begin_month',end_year2 = '$end_year',end_month2 = '$end_month' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('既往病史添加成功');window.location.href='personal center history.php';</script>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 2)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin3 = '$illness_outline',illness3 = '$illness',begin_year3 = '$begin_year',begin_month3 = '$begin_month',end_year3 = '$end_year',end_month3 = '$end_month' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('既往病史添加成功');window.location.href='personal center history.php';</script>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 3)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin4 = '$illness_outline',illness4 = '$illness',begin_year4 = '$begin_year',begin_month4 = '$begin_month',end_year4 = '$end_year',end_month4 = '$end_month' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('既往病史添加成功');window.location.href='personal center history.php';</script>");
					echo("<style>.yincang1{display:none}</style>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 4)
			{
				echo("<style>.yincang{display:none}</style>");
				echo("<style>.yincang3{display:none}</style>");
			}
		}
	}
	if(isset($_POST["shanchu"]) && $_POST["shanchu"] == "删除记录")
	{
		if( $stage == 1)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin1 = '',illness1 = '' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('删除成功');window.location.href='personal center history.php';</script>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 2)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin2 = '',illness2 = '' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('删除成功');window.location.href='personal center history.php';</script>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 3)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin3 = '',illness3 = '' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('删除成功');window.location.href='personal center history.php';</script>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
			elseif($stage == 4)
			{
				mysql_connect("localhost","root","hl1193001636");
				mysql_select_db("work_space"); 
				mysql_query("set character set 'utf8'");//读库
				mysql_query("set names utf8");
				$update = "update anamnesis set illness_outlin4 = '',illness4 = '' where username = '$username'";
				$result = mysql_query($update);
				if($result)
				{
					echo("<script>alert('删除成功');window.location.href='personal center history.php';</script>");
					echo("<style>.yincang1{display:none}</style>");
				}
				else
				{
					echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
				}
			}
	}
?>
</div>
<script>  
function change1()  
{  
   var x = document.getElementById("illness_outline1");  
   var y = document.getElementById("illness1");
   y.options.length = 0; // 清除second下拉框的所有内容
    if(x.selectedIndex == 1)  
    {  
        y.options.add(new Option("伤寒", "伤寒"));
        y.options.add(new Option("温病", "温病"));	
	    y.options.add(new Option("时行流感","时行流感"));
	    y.options.add(new Option("烂喉痧","烂喉痧"));
	    y.options.add(new Option("温疫","温疫"));
	   	y.options.add(new Option("痄腮","痄腮"));
	   	y.options.add(new Option("腮腺炎","腮腺炎"));
	   	y.options.add(new Option("痧","痧"));
	    y.options.add(new Option("急性胃肠炎","急性胃肠炎"));
		y.options.add(new Option("痢疾","痢疾"));
		y.options.add(new Option("白喉","白喉"));
		y.options.add(new Option("疟疾","疟疾"));
		y.options.add(new Option("流行性乙型脑炎","流行性乙型脑炎"));
		y.options.add(new Option("流行性出血热","流行性出血热"));
    }  
    	
  
    if(x.selectedIndex == 2)  
    {  
        y.options.add(new Option("虚劳", "虚劳"));  
        y.options.add(new Option("咳嗽", "咳嗽"));  
        y.options.add(new Option("哮证", "哮证"));
	   	y.options.add(new Option("喘证","喘证"));
	   	y.options.add(new Option("肺炎","肺炎"));
	   	y.options.add(new Option("肺痈","肺痈"));
	    y.options.add(new Option("肺脓肿","肺脓肿"));
	   	y.options.add(new Option("肺痨","肺痨"));
	   	y.options.add(new Option("肺结核","肺结核"));
	   	y.options.add(new Option("肺胀","肺胀"));
	   	y.options.add(new Option("肺气肿","肺气肿"));
	   	y.options.add(new Option("呕吐","呕吐"));
	   	y.options.add(new Option("反胃","反胃"));
		y.options.add(new Option("噎膈","噎膈"));
		y.options.add(new Option("呃逆","呃逆"));
		y.options.add(new Option("胃痛","胃痛"));
		y.options.add(new Option("泄泻","泄泻"));
		y.options.add(new Option("便秘","便秘"));
		y.options.add(new Option("黄疸","黄疸"));
		y.options.add(new Option("狐惑","狐惑"));
		y.options.add(new Option("贝赫切特氏综合征","贝赫切特氏综合征"));
		y.options.add(new Option("水肿","水肿"));
		y.options.add(new Option("消渴","消渴"));
		y.options.add(new Option("积聚","积聚"));
		y.options.add(new Option("血证","血证"));
		y.options.add(new Option("紫斑","紫斑"));
		y.options.add(new Option("痹证","痹证"));
		y.options.add(new Option("痿证","痿证"));
		y.options.add(new Option("肠道寄生虫病","肠道寄生虫病"));
		y.options.add(new Option("鼓胀","鼓胀"));
		y.options.add(new Option("肝硬化","肝硬化"));
		y.options.add(new Option("癃闭","癃闭"));
		y.options.add(new Option("关格","关格"));
		y.options.add(new Option("尿毒症","尿毒症"));
		y.options.add(new Option("头痛","头痛"));
		y.options.add(new Option("胸痛","胸痛"));
		y.options.add(new Option("胁痛","胁痛"));
		y.options.add(new Option("真心痛","真心痛"));
		y.options.add(new Option("腹痛","腹痛"));
		y.options.add(new Option("腰痛","腰痛"));
		y.options.add(new Option("遗尿","遗尿"));
		y.options.add(new Option("遗精","遗精"));
		y.options.add(new Option("阳痿","阳痿"));
		y.options.add(new Option("早泄","早泄"));
		y.options.add(new Option("男性不育","男性不育"));
		y.options.add(new Option("眩晕","眩晕"));
		y.options.add(new Option("肥胖病","肥胖病"));
		y.options.add(new Option("面瘫","面瘫"));
		y.options.add(new Option("胸痹","胸痹"));
		y.options.add(new Option("心悸","心悸"));
		y.options.add(new Option("健忘","健忘"));
		y.options.add(new Option("失眠","失眠"));
		y.options.add(new Option("多寐","多寐"));
		y.options.add(new Option("癫证","癫证"));
		y.options.add(new Option("狂","狂"));
		y.options.add(new Option("痫","痫"));
		y.options.add(new Option("中风","中风"));
		y.options.add(new Option("郁证","郁证"));
		y.options.add(new Option("震颤","震颤"));
		y.options.add(new Option("内伤发热","内伤发热"));
		y.options.add(new Option("痞满","痞满"));
		y.options.add(new Option("厌食","厌食"));
		y.options.add(new Option("中暑","中暑"));
		y.options.add(new Option("汗证","汗证"));
		y.options.add(new Option("冠心病","冠心病"));
		y.options.add(new Option("心律失常","心律失常"));
		y.options.add(new Option("高血压","高血压"));
		y.options.add(new Option("高脂血症","高脂血症"));
		y.options.add(new Option("糖尿病","糖尿病"));
		y.options.add(new Option("病毒性肝炎","病毒性肝炎"));
		y.options.add(new Option("胆囊炎","胆囊炎"));
		y.options.add(new Option("胆结石","胆结石"));
		y.options.add(new Option("泌尿系结石","泌尿系结石"));
		y.options.add(new Option("慢性肾炎","慢性肾炎"));
		y.options.add(new Option("胃下垂","胃下垂"));
		y.options.add(new Option("老年性痴呆症","老年性痴呆症"));
		y.options.add(new Option("鼻咽癌","鼻咽癌"));
		y.options.add(new Option("甲状腺癌","甲状腺癌"));
		y.options.add(new Option("肺癌","肺癌"));
		y.options.add(new Option("食管癌","食管癌"));
		y.options.add(new Option("胃癌","胃癌"));
		y.options.add(new Option("大肠癌","大肠癌"));
		y.options.add(new Option("肝癌","肝癌"));
		y.options.add(new Option("白血病","白血病"));
		y.options.add(new Option("硬皮病","硬皮病"));
		y.options.add(new Option("红斑狼疮","红斑狼疮"));
		
    }
    if(x.selectedIndex == 3)
   {
		y.options.add(new Option("月经不调","月经不调"));
		y.options.add(new Option("痛经","痛经"));
		y.options.add(new Option("经闭","经闭"));
		y.options.add(new Option("倒经","倒经"));
		y.options.add(new Option("崩漏","崩漏"));
		y.options.add(new Option("功能性子宫出血","功能性子宫出血"));
		y.options.add(new Option("带下","带下"));
		y.options.add(new Option("恶阻","恶阻"));
		y.options.add(new Option("妊娠呕吐","妊娠呕吐"));
		y.options.add(new Option("胎动不安","胎动不安"));
		y.options.add(new Option("胎漏","胎漏"));
		y.options.add(new Option("滑胎","滑胎"));
		y.options.add(new Option("习惯性流产","习惯性流产"));
		y.options.add(new Option("产后腹痛","产后腹痛"));
		y.options.add(new Option("宫外孕","宫外孕"));
		y.options.add(new Option("子宫肌瘤","子宫肌瘤"));
		y.options.add(new Option("子宫脱垂","子宫脱垂"));
		y.options.add(new Option("子宫颈炎","子宫颈炎"));
		y.options.add(new Option("宫颈糜烂","宫颈糜烂"));
		y.options.add(new Option("子宫颈癌","子宫颈癌"));
		y.options.add(new Option("盆腔炎","盆腔炎"));
		y.options.add(new Option("阴痒","阴痒"));
		y.options.add(new Option("阴道炎","阴道炎"));
		y.options.add(new Option("女子不孕","女子不孕"));
		y.options.add(new Option("乳腺癌","乳腺癌"));
		y.options.add(new Option("更年期综合征","更年期综合征"));
    }
	if(x.selectedIndex == 4)
    {
		y.options.add(new Option("小儿感冒","小儿感冒"));
		y.options.add(new Option("小儿肺炎","小儿肺炎"));
		y.options.add(new Option("惊风","惊风"));
		y.options.add(new Option("百日咳","百日咳"));
		y.options.add(new Option("水痘","水痘"));
		y.options.add(new Option("麻疹","麻疹"));
		y.options.add(new Option("风疹","风疹"));
		y.options.add(new Option("消化不良","消化不良"));
		y.options.add(new Option("盘肠气痛","盘肠气痛"));
	    y.options.add(new Option("幼儿腹痛","幼儿腹痛"));
		y.options.add(new Option("小儿肌性斜颈","小儿肌性斜颈"));
		y.options.add(new Option("小儿脑性瘫痪","小儿脑性瘫痪"));
		y.options.add(new Option("夜啼","夜啼"));
		y.options.add(new Option("小儿流涎","小儿流涎"));
		y.options.add(new Option("佝偻病","佝偻病"));
    }
	if(x.selectedIndex == 5)
    {
		y.options.add(new Option("痈","痈"));
		y.options.add(new Option("疽","疽"));
		y.options.add(new Option("疖","疖"));
		y.options.add(new Option("疔疮","疔疮"));
		y.options.add(new Option("瘰疬","瘰疬"));
		y.options.add(new Option("淋巴结结核","淋巴结结核"));
		y.options.add(new Option("瘿","瘿"));
		y.options.add(new Option("地方性甲状腺肿","地方性甲状腺肿"));
		y.options.add(new Option("甲状腺肿瘤","甲状腺肿瘤"));
		y.options.add(new Option("乳痈","乳痈"));
		y.options.add(new Option("乳腺炎","乳腺炎"));
		y.options.add(new Option("乳癖","乳癖"));
		y.options.add(new Option("乳腺增生","乳腺增生"));
		y.options.add(new Option("脱疽","脱疽"));
		y.options.add(new Option("血栓闭塞性脉管炎","血栓闭塞性脉管炎"));
		y.options.add(new Option("臁疮","臁疮"));
		y.options.add(new Option("痔","痔"));
		y.options.add(new Option("疝","疝"));
		y.options.add(new Option("肛裂","肛裂"));
		y.options.add(new Option("肛门瘙痒症","肛门瘙痒症"));
		y.options.add(new Option("肛门直肠周围脓肿","肛门直肠周围脓肿"));
		y.options.add(new Option("肠痈","肠痈"));
		y.options.add(new Option("急性阑尾炎","急性阑尾炎"));
		y.options.add(new Option("肠梗阻","肠梗阻"));
		y.options.add(new Option("胆道系统感染和胆石病","胆道系统感染和胆石病")); 
    }
	if(x.selectedIndex == 6)
    {
		y.options.add(new Option("脓疱疮","脓疱疮"));
	   	y.options.add(new Option("黄水疮","黄水疮"));
	   	y.options.add(new Option("湿疮","湿疮"));
	    y.options.add(new Option("湿疹","湿疹"));
	   	y.options.add(new Option("圆癣","圆癣"));
	   	y.options.add(new Option("体癣","体癣"));
	    y.options.add(new Option("股癣","股癣"));
	   	y.options.add(new Option("白秃疮","白秃疮"));
	   	y.options.add(new Option("肥疮","肥疮"));
	    y.options.add(new Option("头癣","头癣"));
	   	y.options.add(new Option("蛇串疮","蛇串疮"));
	   	y.options.add(new Option("带状疱疹","带状疱疹"));
		y.options.add(new Option("鹅掌风","鹅掌风"));
	   	y.options.add(new Option("牛皮癣","牛皮癣"));
	   	y.options.add(new Option("神经性皮炎","神经性皮炎"));
	    y.options.add(new Option("梅毒","梅毒"));
	   	y.options.add(new Option("漆疮","漆疮"));
	   	y.options.add(new Option("接触性皮炎","接触性皮炎"));
	    y.options.add(new Option("瘾疹","瘾疹"));
	   	y.options.add(new Option("荨麻疹","荨麻疹"));
	   	y.options.add(new Option("白癜风","白癜风"));
	    y.options.add(new Option("白疕","白疕"));
	   	y.options.add(new Option("银屑病","银屑病"));
	   	y.options.add(new Option("白屑风","白屑风"));
		y.options.add(new Option("脂溢性皮炎","脂溢性皮炎"));
	   	y.options.add(new Option("丹毒","丹毒"));
	   	y.options.add(new Option("扁平疣","扁平疣"));
	    y.options.add(new Option("粉刺","粉刺"));
	   	y.options.add(new Option("雀斑","雀斑"));
	   	y.options.add(new Option("黄褐斑","黄褐斑"));
	    y.options.add(new Option("皮肤瘙痒","皮肤瘙痒"));
	   	y.options.add(new Option("瘢痕疙瘩","瘢痕疙瘩"));
	   	y.options.add(new Option("毒蛇咬伤","毒蛇咬伤"));
	    y.options.add(new Option("痱子","痱子"));
	   	y.options.add(new Option("酒皶鼻","酒皶鼻"));
   	}
	if(x.selectedIndex == 7)
   	{
		y.options.add(new Option("骨折","骨折"));
	    y.options.add(new Option("筋伤","筋伤"));
	   	y.options.add(new Option("软组织损伤","软组织损伤"));
	   	y.options.add(new Option("伤科内伤","伤科内伤")); 
	   	y.options.add(new Option("关节脱位","关节脱位"));
	    y.options.add(new Option("腰肌劳损","腰肌劳损"));
	   	y.options.add(new Option("腰椎间盘脱出症","腰椎间盘脱出症"));
	   	y.options.add(new Option("腰椎间盘脱出症","腰椎间盘脱出症"));
		y.options.add(new Option("颈椎病","颈椎病"));
	    y.options.add(new Option("肩关节周围炎","肩关节周围炎"));
	   	y.options.add(new Option("退行性骨关节炎","退行性骨关节炎"));
	   	y.options.add(new Option("骨质增生","骨质增生")); 
    }
	if(x.selectedIndex == 8)
    {
	   	y.options.add(new Option("失音","失音"));
	    y.options.add(new Option("慢性咽炎","慢性咽炎"));
	    y.options.add(new Option("乳蛾","乳蛾"));
	   	y.options.add(new Option("急性扁桃体炎","急性扁桃体炎"));
	   	y.options.add(new Option("梅核气","梅核气"));
	    y.options.add(new Option("鼻渊","鼻渊"));
		y.options.add(new Option("鼻窦炎","鼻窦炎"));
	    y.options.add(new Option("鼻窒","鼻窒"));
	    y.options.add(new Option("慢性鼻炎","慢性鼻炎"));
	   	y.options.add(new Option("鼻鼽","鼻鼽"));
	   	y.options.add(new Option("过敏性鼻炎","过敏性鼻炎"));
	    y.options.add(new Option("耳鸣耳聋","耳鸣耳聋"));
		y.options.add(new Option("聤耳","聤耳"));
	    y.options.add(new Option("化脓性中耳炎","化脓性中耳炎"));
		y.options.add(new Option("牙痛","牙痛"));
	    y.options.add(new Option("牙痈","牙痈"));
		y.options.add(new Option("牙宣","牙宣"));
	    y.options.add(new Option("萎缩性牙周病","萎缩性牙周病"));
		y.options.add(new Option("口疮","口疮"));
	    y.options.add(new Option("针眼","针眼"));
		y.options.add(new Option("天行赤眼","天行赤眼"));
	    y.options.add(new Option("红眼病","红眼病"));
		y.options.add(new Option("眼丹","眼丹"));
	    y.options.add(new Option("翳","翳"));
		y.options.add(new Option("白内障","白内障"));
	    y.options.add(new Option("上睑下垂","上睑下垂"));
		y.options.add(new Option("雀盲","雀盲"));
	    y.options.add(new Option("夜盲","夜盲"));
		y.options.add(new Option("青盲","青盲"));
		y.options.add(new Option("青光眼","青光眼"));
	    y.options.add(new Option("漏睛疮","漏睛疮"));
		y.options.add(new Option("泪囊炎","泪囊炎"));
		y.options.add(new Option("近视","近视"));
		
    } 
}
	
</script>
</body>
</html>