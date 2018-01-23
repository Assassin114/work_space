<!doctype html>
<?php
session_start();
error_reporting(0);
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = $_SESSION["username"];
		$name = $_POST["name"];
		$age = $_POST["age"];
		$height = $_POST["height"];
		$weight = $_POST["weight"];
		$nation = $_POST["nation"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$sex = $_POST["sex"];
		$year = $_POST["sel1"];
		$month = $_POST["sel2"];
		$day = $_POST["sel3"];
		$province = $_POST["province"];
		$city = $_POST["city"];
		$dist = $_POST["area"];
		$address = $_POST["address"];
		
		if ($name == "" || $age == "" || $height == "" || $weight == "" || $nation == "" || $email == "" || $phone == "" || $sex == "" || $year == "" || $month == "" || $day == "" || $province == "" || $city == "" || $dist == "" || $address == "")
		{
			echo "<script>alert('请完善个人信息');history.go(-1);</script>";
		}
		
		else
			
		{
			mysql_connect("localhost","root","hl1193001636");
			
			mysql_select_db("work_space");
	
			mysql_query("set character set 'utf8'");//读库   
	
			mysql_query("set names utf8");
			
			$sql = mysql_query("UPDATE patient_information SET name = '$name',sex = '$sex', age = '$age', nation = '$nation',height = '$height', weight = '$weight' , phone = '$phone',email = '$email',year = '$year',month = '$month',day = '$day',province = '$province',city = '$city',dist = '$dist',address = '$address' WHERE username ='$username'");
			
			if ($sql)
			{
				echo "<script>alert('个人数据写入成功！');history.go(-1);</script>";
			}
			else
			{
				echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
			}
		}
	}
?>
</html>