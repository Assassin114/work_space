<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/list_effect.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />
<link rel="stylesheet" type="text/css" href="css/iframe.css" />
<?php
	session_start();
	error_reporting(0);
	date_default_timezone_set('prc');
	$username = 'haoliang';
?>
<html>
<head>
<title>舌像检查</title>
</head>

<body>
<div class="content">
<div class="part" id="down">
<div style="height: 1px"></div>
<form action="" method="post" enctype="multipart/form-data">
<p class="label">请上传舌像正面图片</p>
<p><input type="file" name="imgfile" id="imgfile" onChange="change()"></p>
<div style="height: 225px">
	<img name="pic" id="preview" alt="" class="image">
</div>
<p style="clear: both"><input type="submit" name="upload" class="button green medium" value="上传"></p>
</form>
<?php
	if (isset($_FILES['imgfile']) && is_uploaded_file($_FILES['imgfile']['tmp_name']))
	{
		$path = "/upload/image/toughe picture/$username";
	 	//判断目录存在否，存在给出提示，不存在则创建目录
	 	if (is_dir($path))
		{
	 	}
		else
		{
	  	//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码 
	  		$res = mkdir(iconv("UTF-8", "GBK", $path),0777,true);
	  		if ($res)
			{
				echo("创建目录成功");
			}
			else
			{
				echo("创建目录失败");
			}
	 	}
		$array=$_FILES["imgfile"]["type"];
        $array=	explode("/",$array);
		$data = date("Ymdhis",time());
		$newfilename="up_toughe".$data;//自定义文件名（测试的时候中文名会操作失败）  
		$_FILES["imgfile"]["name"] = $newfilename.".".$array[1];
		$url=$path."/";//记录路径
		if (file_exists($url.$_FILES["imgfile"]["name"]))//当文件存在
		{
		}
		else//当文件不存在
		{
			$url=$url.$_FILES["imgfile"]["name"];
			move_uploaded_file($_FILES["imgfile"]["tmp_name"],$url);
			echo "上传成功！";
		}
	}
?>
</div>
</div>
</body>
<script>
	function change() {
    var pic = document.getElementById("preview"),
        file = document.getElementById("imgfile");

    var ext = file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();

     // gif在IE浏览器暂时无法显示
     if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
         alert("图片的格式必须为png或者jpg或者jpeg格式！"); 
         return;
     }
     var isIE = navigator.userAgent.match(/MSIE/)!= null,
         isIE6 = navigator.userAgent.match(/MSIE 6.0/)!= null;

     if(isIE) {
        file.select();
        var reallocalpath = document.selection.createRange().text;

        // IE6浏览器设置img的src为本地路径可以直接显示图片
         if (isIE6) {
            pic.src = reallocalpath;
         }else {
            // 非IE6版本的IE由于安全问题直接设置img的src无法显示本地图片，但是可以通过滤镜来实现
             pic.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='image',src=\"" + reallocalpath + "\")";
             // 设置img的src为base64编码的透明图片 取消显示浏览器默认图片
             pic.src = 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==';
         }
     }else {
        html5Reader(file);
     }
}

 function html5Reader(file){
     var file = file.files[0];
     var reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onload = function(e){
         var pic = document.getElementById("preview");
         pic.src=this.result;
     }
 }
</script>
</html>