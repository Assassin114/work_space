<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>patientregcheck</title>

</head>

<?php
	error_reporting(0);
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "确认注册")
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];
        if($user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else  
        {  
            if($psw == $psw_confirm)  
            {  
                mysql_connect("localhost","root","hl1193001636");
			
				mysql_select_db("work_space");
                 
                $sql = "select username from patient_information where username = '$_POST[username]'"; //SQL语句
				
                $result = mysql_query($sql);    //执行SQL语句  
				
                $num = mysql_num_rows($result); //统计执行结果影响的行数  
				
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "insert into patient_information (username,password,time) values ('$_POST[username]','$_POST[password]','0')";
					$res_insert = mysql_query($sql_insert);
					mysql_query("insert into anamnesis (username) values ('$_POST[username]')");
                    if($res_insert)
                    {  
                        echo "<script>alert('注册成功！');window.location.href='patientlogin.html';</script>";
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }  
                }  
            }  
            else  
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>

<body>

</body>

</html>