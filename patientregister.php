<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/large_scale.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/big_scale.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/medium_scale.css" />
<html>
<head>
<title>register</title>
</head>
<body style="text-align: center;height: 600px">
<h1 id="header" align="center" class="header">患者注册</h1>

<form id="logarea" class="loginarea" action="patientregcheck.php" method="post" style="text-align:center;background-image: url(picture/login_long.png);height: 454px">
    <p style="text-align: left; margin-left: 50px;margin-top: 60px;margin-bottom: 10px">帐户名称</p>
    <input type="text" class="text_input" name="username" value="英文、数字或符号（4~20位）">
    <p style="text-align: left; margin-left: 50px;margin-top: 20px;margin-bottom: 10px">密<span style="opacity: 0">密码</span>码</p>
    <input type="password" class="text_input" name="password" value="**********">  
    <p style="text-align: left; margin-left: 50px;margin-top: 20px;margin-bottom: 10px">确认密码</p>
    <input type="password" class="text_input" name="confirm" value="**********">  
    <input type="Submit" class="button green medium" name="Submit" value="确认注册" style="margin-top: 25px">
</form>
<div class="copytrght">
<p>&copy;北京大学信息科学技术学院卫星通信研究所开发</p>
</div>
</body>
</html>