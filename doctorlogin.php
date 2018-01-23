<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/large_scale.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/big_scale.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/medium_scale.css" />
<html>
<head>

<title>doctor login</title>
</head>
 
<body style="height: 500px">
<h1 id="header" align="center" class="header">医生登录</h1>

<form id="logarea" class="loginarea" action="doctorlogincheck.php" method="post" style="text-align: center">  
    <p style="text-align: left; margin-left: 50px;margin-top: 40px;margin-bottom: 10px">用户名</p>
    <input type="text" name="username" class="text_input" value="请输入您的用户名">
    <p style="text-align: left; margin-left: 50px;margin-top: 15px;margin-bottom: 10px">密<span style="opacity: 0;">密</span>码</p>
    <input type="password" name="password" class="text_input" value="**********">
    <input type="submit" name="submit" class="button blue medium" value="登录">
    <span style="opacity: 0;">密maa</span>
    <a href="doctorregister.php" class="button green medium" style="margin-top: 15px">注册</a>
</form>
<div class="copytrght">
<p>&copy;北京大学信息科学技术学院卫星通信研究所开发</p>
</div>
</body>
</html>