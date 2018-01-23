<!doctype html>

<?php  

session_start();
error_reporting(0);

    if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  

    {  

        $user = $_POST["username"];  

        $psw = $_POST["password"];  

        if($user == "" || $psw == "")  

        {  

            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  

        }  

        else  

        {  

            mysql_connect("localhost","root","hl1193001636");
			
			mysql_select_db("work_space"); 
			
			//mysql_select_db("app_zyxhyjzlms");  

            $sql = "select username,password from patient_information where username = '$_POST[username]' and password = '$_POST[password]'";  

            $result = mysql_query($sql);

            $num = mysql_num_rows($result);

            if($num)  

            {  

                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中
				
				$_SESSION["username"] = $_POST["username"];
				
                echo "<script>alert('登录成功');window.location.href='personal center';</script>";  

            }  

            else  

            {  

                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  

            }  

        }  

    }  

    else  

    {  

        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  

    }  

  

?>
<html>

<head>

<meta charset="utf-8">

<title>patientlogcheck</title>

</head>
<body>
</body>
</html>