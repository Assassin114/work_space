<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>doctor main</title>
    <style type="text/css">
		body{
			background:#F1F1F1;
		}
        #menu{
            width: 10%;
            border: 1px solid #CCC;
			float: left;
        }
        #menu ul{
            margin: 0px;
            padding: 0px;
            list-style: none;/* 隐藏默认列表符号*/
        }
        #menu ul li{
            background: #eee;
            height: 70px;
            line-height: 70px;  /*行距*/
            text-align: center;
            border-bottom: 1px solid #999;
            position: relative;
        }
        a{
            display: block;
            font-size: 20px;
            color: black;
            text-decoration: none;/*隐藏超廉价默认下划线*/
        }
        a:hover{
            color:burlywood;
            font-size: 23px;
        }
        #menu ul li ul{
            display: none;/*默认隐藏*/
            top:0px;
            width: 148px;
            border: 1px solid #ccc;
            border-bottom: none;
            position: absolute;
            left: 148px;
        }
        #menu ul li:hover ul{
            display: block;
        }
        #menu ul li:hover ul li a{
            display: block;
        }
		#title{
			width:100%;
			text-align: center;
			background: #EBEBEB;
			height: 50px;
			line-height: 50px;
		}
		#container{
			width:90%;
			margin-left:5%;
		}
		.header{
		font-size:30px;
		background-color: antiquewhite;
		line-height: 70px;
		width: 50%;
		height: 70px;
		border-radius:20px;
		text-align: center;
		margin-left: 25%;
		clear: both
		}
    </style>
</head>
<body>
<div id="container">
<div id="title" style="height: 100px;line-height: 100px">
<h1 style="font-size: 50px">中医循环试验诊疗系统</h1>
</div>
<div id="menu">
    <ul>
    <li><a href="selectpatient.php" target="iframe">患者详细资料</a>
    </li>
    <li><a href="diagnose.php" target="iframe">第一次诊疗</a>
	</li>
    <li><a href="diagnose.php" target="iframe">第二次诊疗</a>
	</li>
    <li><a href="diagnose.php" target="iframe">第三次诊疗</a>
    </li>
    <li><a href="diagnose.php" target="iframe">第四次诊疗</a>
    </li>
    <li><a href="drag.php" target="iframe">最终诊疗</a>
    </li>
    </ul>
</div>
<div id="page" style="width: 89.5%;float: right">
<iframe name="iframe" width="100%" height="800px" style="float: right" frameborder="0"></iframe>
</div>
</div>
</body>
</html>