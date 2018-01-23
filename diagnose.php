<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>diagnose</title>
<style>
	.button 
	{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 23px;
	border-radius:10px;
	}
	#container{
		text-align:center;
		width: 100%;
		background-color:aliceblue;
		border:solid 2px;
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
	#logarea{
		width: 80%;
		height:400px;
		font-size: 20px;
		margin-left: 10%;
		text-align: center;
		border: outset 2px;
		background-color: cornsilk;
	
	}
	.textbox{
		width:600px;
		border-radius:10px;
		margin-left: 20%;
		font-size: 15px;
		line-height: 15px;
		float: left;
	}
	.xuanze{
		padding:7px 15px;
		font-size: 15px;
		text-align: center;
	}
	.logarea{
		width: 80%;
		font-size: 20px;
		text-align: left;
		margin-left: 10%;
		height: 900px;
		border: outset 2px;
		background-color: cornsilk;
		text-align: center;
	}
	.logarea1{
		width: 80%;
		font-size: 20px;
		text-align: left;
		margin-left: 10%;
		height: 700px;
		border: outset 2px;
		background-color: cornsilk;
		text-align: center;
	}
	.number{
		padding:7px 15px;
		font-size: 13px;
		border-radius:10px;
		text-align: center;
	}
	.text{
		padding:5px 15px;
		text-align: center;
	}
</style>
</head>
<script type="text/javascript">
    function setCookie(name, value) {
        var exp = new Date();
        exp.setTime(exp.getTime() + 24 * 60 * 60 * 1000);
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }
    function getCookie(name)
    {
        var regExp = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
        var arr = document.cookie.match(regExp);
        if (arr == null) {
            return null;
        }
        return unescape(arr[2]);
    }
</script>

<body>
<div id="container">
<h3 class="header">各项体征</h3>

	<form name="form1" class="logarea" action="tizhengshangchuan.php" method="post">
	<br>
	<h3 style="text-align: left;margin-left: 25px;">基本体征</h3>
	<br>
	体&nbsp;&nbsp;温：
	<input class="number" type="number" name="heat" min="34" max="43" step="0.1" style="align-items: center;"/> ℃
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;呼吸频次：
	<select class="xuanze" name="breath" id="breath" onclick = "setCookie('breath',this.selectedIndex)">
	<option value="12-16">12-16</option>
	<option value="16-20">16-20</option>
	<option value="20-24">20-24</option>
	<option value="24-28">24-28</option>
	<option value="28-32">28-32</option>
	</select> 次/分钟
	<br><br>
	<script type="text/javascript">
    var selectedIndex = getCookie("breath");
    if(selectedIndex != null) {
        document.getElementById("breath").selectedIndex = selectedIndex;
    }
	</script>

	血&nbsp;&nbsp;压：<input class="number" name="low" type="number" min="20" max="120" step="5">/<input  class="number" type="number" name="high" min="40" max="220" step="5"> mmHg
	&nbsp;&nbsp;心&nbsp;&nbsp;率：<input class="number" type="number" name="heartrate" min="50" max="150" step="2"> 次/分钟
	<br>	
	<h3 style="text-align: left;margin-left: 25px;">&nbsp;舌苔特征</h3>
	&nbsp;&nbsp;舌苔颜色：
	<select class="xuanze" name="color" id="color" onclick = "setCookie('color',this.selectedIndex)">
	<option>白苔</option>
	<option>黄苔</option>
	<option>灰苔</option>
	<option>黑苔</option>
	</select>&nbsp;&nbsp;&nbsp;
	<script type="text/javascript">
    var selectedIndex = getCookie("color");
    if(selectedIndex != null) {
        document.getElementById("color").selectedIndex = selectedIndex;
    }
	</script>
	舌苔厚度：
	<select class="xuanze" name="thick" id="thick" onclick = "setCookie('thick',this.selectedIndex)">
	<option>较薄</option>
	<option>中等</option>
	<option>较厚</option>
	</select>&nbsp;&nbsp;&nbsp;
	<script type="text/javascript">
    var selectedIndex = getCookie("thick");
    if(selectedIndex != null) {
        document.getElementById("thick").selectedIndex = selectedIndex;
    }
	</script>
	舌苔燥润：
	<select class="xuanze" name="wet" id="wet" onclick = "setCookie('wet',this.selectedIndex)">
	<option>干燥</option>
	<option>中等</option>
	<option>湿润</option>
	</select>&nbsp;&nbsp;&nbsp;<br><br>
	<script type="text/javascript">
    var selectedIndex = getCookie("wet");
    if(selectedIndex != null) {
        document.getElementById("wet").selectedIndex = selectedIndex;
    }
	</script>
	&nbsp;&nbsp;有无苔根：
	<select class="xuanze" name="yesorno" id="yesorno" onclick = "setCookie('yesorno',this.selectedIndex)">
	<option>有</option>
	<option>无</option>
	</select>&nbsp;&nbsp;&nbsp;&nbsp;
	<script type="text/javascript">
    var selectedIndex = getCookie("yesorno");
    if(selectedIndex != null) {
        document.getElementById("yesorno").selectedIndex = selectedIndex;
    }
	</script>
	全、偏苔：
	<select class="xuanze" name="allorpart" id="allorpart" onclick = "setCookie('allorpart',this.selectedIndex)">
	<option>全苔</option>
	<option>偏苔</option>
	</select>&nbsp;&nbsp;&nbsp;
	<script type="text/javascript">
    var selectedIndex = getCookie("allorpart");
    if(selectedIndex != null) {
        document.getElementById("allorpart").selectedIndex = selectedIndex;
    }
	</script>
	是否剥落：
	<select class="xuanze" name="fall" id="fall" onclick = "setCookie('fall',this.selectedIndex)">
	<option>无剥落</option>
	<option>部分剥落</option>
	<option>全部剥落</option>
	</select>
	<script type="text/javascript">
    var selectedIndex = getCookie("fall");
    if(selectedIndex != null) {
        document.getElementById("fall").selectedIndex = selectedIndex;
    }
	</script>
	<br>
	<h3 style="text-align: left;margin-left: 25px;">&nbsp;脉象特征</h3>
	<br>
	脉位：部位 <select class="xuanze" name="location" id="location" onclick = "setCookie('location',this.selectedIndex)">
	<option>浮脉</option>
	<option>沉脉</option>
	</select>
	<script type="text/javascript">
    var selectedIndex = getCookie("location");
    if(selectedIndex != null) {
        document.getElementById("location").selectedIndex = selectedIndex;
    }
	</script>
	长度 <select class="xuanze" name="len" id="len" onclick = "setCookie('len',this.selectedIndex)">
	<option>长脉</option>
	<option>短脉</option>
	</select>
	<br><br>
	<script type="text/javascript">
    var selectedIndex = getCookie("len");
    if(selectedIndex != null) {
        document.getElementById("len").selectedIndex = selectedIndex;
    }
	</script>
	
	脉数：至数 <select class="xuanze" name="zhishu" id="zhishu" onclick = "setCookie('zhishu',this.selectedIndex)">
	<option>数脉</option>
	<option>迟脉</option>
	</select>
	<script type="text/javascript">
    var selectedIndex = getCookie("zhishu");
    if(selectedIndex != null) {
        document.getElementById("zhishu").selectedIndex = selectedIndex;
    }
	</script>
	节律 <select class="xuanze" name="jielv" id="jielv" onclick = "setCookie('jielv',this.selectedIndex)">
	<option>正常</option>
	<option>促脉</option>
	<option>结脉</option>
	<option>代脉</option>
	<option>散脉</option>
	<option>涩脉</option>
	</select>
	<br><br>
	<script type="text/javascript">
    var selectedIndex = getCookie("jielv");
    if(selectedIndex != null) {
        document.getElementById("jielv").selectedIndex = selectedIndex;
    }
	</script>
	
	脉型：脉管 <select class="xuanze" name="maiguan" id="maiguan" onclick = "setCookie('maiguan',this.selectedIndex)">
	<option>充盈</option>
	<option>较充盈</option>
	<option>正常</option>
	<option>较空虚</option>
	<option>空虚</option>
	</select>
	<script type="text/javascript">
    var selectedIndex = getCookie("maiguan");
    if(selectedIndex != null) {
        document.getElementById("maiguan").selectedIndex = selectedIndex;
    }
	</script>
	
	脉搏幅度 <select class="xuanze" name="maifu" id="maifu" onclick = "setCookie('maifu',this.selectedIndex)">
	<option>大</option>
	<option>较大</option>
	<option>正常</option>
	<option>较小</option>
	<option>小</option>
	</select>
	<br><br>
	<script type="text/javascript">
    var selectedIndex = getCookie("maifu");
    if(selectedIndex != null) {
        document.getElementById("maifu").selectedIndex = selectedIndex;
    }
	</script>
	
	脉势：寸 <select class="xuanze" name="cun" id="cun" onclick = "setCookie('cun',this.selectedIndex)">
	<option>浮脉</option>
	<option>沉脉</option>
	<option>迟脉</option>
	<option>数脉</option>
	<option>虚脉</option>
	<option>实脉</option>
	<option>滑脉</option>
	<option>洪脉</option>
	<option>细脉</option>
	<option>弦脉</option>
	<option>结脉</option>
	<option>代脉</option>
	<option>散脉</option>
	<option>涩脉</option>
	</select>
	<script type="text/javascript">
    var selectedIndex = getCookie("cun");
    if(selectedIndex != null) {
        document.getElementById("cun").selectedIndex = selectedIndex;
    }
	</script>
	
	关 <select class="xuanze" name="guan" id="guan" onclick = "setCookie('guan',this.selectedIndex)">
	<option>浮脉</option>
	<option>沉脉</option>
	<option>迟脉</option>
	<option>数脉</option>
	<option>虚脉</option>
	<option>实脉</option>
	<option>滑脉</option>
	<option>洪脉</option>
	<option>细脉</option>
	<option>弦脉</option>
	<option>结脉</option>
	<option>代脉</option>
	<option>散脉</option>
	<option>涩脉</option>
	</select>
	<script type="text/javascript">
    var selectedIndex = getCookie("guan");
    if(selectedIndex != null) {
        document.getElementById("guan").selectedIndex = selectedIndex;
    }
	</script>
	 
	尺 <select class="xuanze" name="chi" id="chi" onclick = "setCookie('chi',this.selectedIndex)">
	<option>浮脉</option>
	<option>沉脉</option>
	<option>迟脉</option>
	<option>数脉</option>
	<option>虚脉</option>
	<option>实脉</option>
	<option>滑脉</option>
	<option>洪脉</option>
	<option>细脉</option>
	<option>弦脉</option>
	<option>结脉</option>
	<option>代脉</option>
	<option>散脉</option>
	<option>涩脉</option>
	</select>
	<br><br><br>
	<script type="text/javascript">
    var selectedIndex = getCookie("chi");
    if(selectedIndex != null) {
        document.getElementById("chi").selectedIndex = selectedIndex;
    }
	</script>
	<input type="submit" id="submit1" class="button" onClick="" value="保存并提交" style="float:right;margin-right: 200px;">
	</form>
 <script type="text/javascript">
function myCheck1()
       {
          form1.submit();
       }
</script>
	
	<br><br>
<hr style="border:3 double #987cb9" width="90%" color="#987cb9" SIZE="3">
<br>
<h1 class="header">诊断结果</h1>
<br>
<form name="form2" id="logarea" action="suggest.php" method="post">
<br>
<p style="text-align: left;margin-left: 20%">诊断疾病：
<select id="first" class="xuanze" onChange="change()" onclick = "setCookie('first',this.selectedIndex)">  
    	<option selected="selected">请选择疾病纲目</option>
    	<option>传染性病证</option>
    	<option>内科病证</option>
    	<option>妇科病证</option>
    	<option>小儿科病证</option>
    	<option>外科病证</option>
    	<option>皮肤科病证</option>
    	<option>伤科病证</option>
    	<option>五官科病证</option>
</select>&nbsp
<script type="text/javascript">
    var selectedIndex = getCookie("first");
    if(selectedIndex != null) {
        document.getElementById("first").selectedIndex = selectedIndex;
    }
</script>
  
	<select id="second" class="xuanze" onclick = "setCookie('second',this.selectedIndex)">
  		<option selected="selected">请选择疾病科目</option>
  		<option>伤寒</option>
  		<option>伤寒</option>     		 
	</select></p>
	<script type="text/javascript">
    var selectedIndex = getCookie("second");
    if(selectedIndex != null) {
        document.getElementById("second").selectedIndex = selectedIndex;
    }
	</script>
<!--疾病二级联动-->
<script>  
function change()  
{  
   var x = document.getElementById("first");  
   var y = document.getElementById("second");
   y.options.length = 0; // 清除second下拉框的所有内容
	if(x.selectedIndex == 0)
	{
		y.options.add(new Option("请选择疾病科目", "0"));
	}
    if(x.selectedIndex == 1)  
    {  
        y.options.add(new Option("伤寒", "0"));
        y.options.add(new Option("温病", "1"));	
	    y.options.add(new Option("时行流感","2"));
	    y.options.add(new Option("烂喉痧","3"));
	    y.options.add(new Option("温疫","4"));
	   	y.options.add(new Option("痄腮","5"));
	   	y.options.add(new Option("腮腺炎","6"));
	   	y.options.add(new Option("痧","7"));
	    y.options.add(new Option("急性胃肠炎","8"));
		y.options.add(new Option("痢疾","9"));
		y.options.add(new Option("白喉","10"));
		y.options.add(new Option("疟疾","11"));
		y.options.add(new Option("流行性乙型脑炎","12"));
		y.options.add(new Option("流行性出血热","13"));
    }  
    	
  
    if(x.selectedIndex == 2)  
    {  
        y.options.add(new Option("虚劳", "0"));  
        y.options.add(new Option("咳嗽", "1"));  
        y.options.add(new Option("哮证", "2"));
	   	y.options.add(new Option("喘证","3"));
	   	y.options.add(new Option("肺炎","4"));
	   	y.options.add(new Option("肺痈","5"));
	    y.options.add(new Option("肺脓肿","6"));
	   	y.options.add(new Option("肺痨","7"));
	   	y.options.add(new Option("肺结核","8"));
	   	y.options.add(new Option("肺胀","9"));
	   	y.options.add(new Option("肺气肿","10"));
	   	y.options.add(new Option("呕吐","11"));
	   	y.options.add(new Option("反胃","12"));
		y.options.add(new Option("噎膈","13"));
		y.options.add(new Option("呃逆","14"));
		y.options.add(new Option("胃痛","15"));
		y.options.add(new Option("泄泻","16"));
		y.options.add(new Option("便秘","17"));
		y.options.add(new Option("黄疸","18"));

		y.options.add(new Option("狐惑","19"));
		y.options.add(new Option("贝赫切特氏综合征","20"));
		y.options.add(new Option("水肿","21"));
		y.options.add(new Option("消渴","22"));
		y.options.add(new Option("积聚","23"));
		y.options.add(new Option("血证","24"));
		y.options.add(new Option("紫斑","25"));
		y.options.add(new Option("痹证","26"));
		y.options.add(new Option("痿证","27"));
		y.options.add(new Option("肠道寄生虫病","28"));
		y.options.add(new Option("鼓胀","29"));
		y.options.add(new Option("肝硬化","30"));
		y.options.add(new Option("癃闭","31"));
		y.options.add(new Option("关格","32"));
		y.options.add(new Option("尿毒症","33"));
		y.options.add(new Option("头痛","34"));
		y.options.add(new Option("胸痛","35"));
		y.options.add(new Option("胁痛","36"));
		y.options.add(new Option("真心痛","37"));
		y.options.add(new Option("腹痛","38"));
		y.options.add(new Option("腰痛","39"));
		y.options.add(new Option("遗尿","40"));
		y.options.add(new Option("遗精","41"));
		y.options.add(new Option("阳痿","42"));
		y.options.add(new Option("早泄","43"));
		y.options.add(new Option("男性不育","44"));
		y.options.add(new Option("眩晕","45"));
		y.options.add(new Option("肥胖病","46"));
		y.options.add(new Option("面瘫","47"));
		y.options.add(new Option("胸痹","48"));
		y.options.add(new Option("心悸","49"));
		y.options.add(new Option("健忘","50"));
		y.options.add(new Option("失眠","51"));
		y.options.add(new Option("多寐","52"));
		y.options.add(new Option("癫证","53"));
		y.options.add(new Option("狂","54"));
		y.options.add(new Option("痫","55"));
		y.options.add(new Option("中风","56"));
		y.options.add(new Option("郁证","57"));
		y.options.add(new Option("震颤","58"));
		y.options.add(new Option("内伤发热","59"));
		y.options.add(new Option("痞满","60"));
		y.options.add(new Option("厌食","61"));
		y.options.add(new Option("中暑","62"));
		y.options.add(new Option("汗证","63"));
		y.options.add(new Option("冠心病","64"));
		y.options.add(new Option("心律失常","65"));
		y.options.add(new Option("高血压","66"));
		y.options.add(new Option("高脂血症","67"));
		y.options.add(new Option("糖尿病","68"));
		y.options.add(new Option("病毒性肝炎","69"));
		y.options.add(new Option("胆囊炎","70"));
		y.options.add(new Option("胆结石","71"));
		y.options.add(new Option("泌尿系结石","72"));
		y.options.add(new Option("慢性肾炎","73"));
		y.options.add(new Option("胃下垂","74"));
		y.options.add(new Option("老年性痴呆症","75"));
		y.options.add(new Option("鼻咽癌","76"));
		y.options.add(new Option("甲状腺癌","77"));
		y.options.add(new Option("肺癌","78"));
		y.options.add(new Option("食管癌","79"));
		y.options.add(new Option("胃癌","80"));
		y.options.add(new Option("大肠癌","81"));
		y.options.add(new Option("肝癌","82"));
		y.options.add(new Option("白血病","83"));
		y.options.add(new Option("硬皮病","84"));
		y.options.add(new Option("红斑狼疮","85"));
		
    }
    if(x.selectedIndex == 3)
   {
		y.options.add(new Option("月经不调","0"));
		y.options.add(new Option("痛经","1"));
		y.options.add(new Option("经闭","2"));
		y.options.add(new Option("倒经","3"));
		y.options.add(new Option("崩漏","4"));
		y.options.add(new Option("功能性子宫出血","5"));
		y.options.add(new Option("带下","6"));
		y.options.add(new Option("恶阻","7"));
		y.options.add(new Option("妊娠呕吐","8"));
		y.options.add(new Option("胎动不安","9"));
		y.options.add(new Option("胎漏","10"));
		y.options.add(new Option("滑胎","11"));
		y.options.add(new Option("习惯性流产","12"));
		y.options.add(new Option("产后腹痛","13"));
		y.options.add(new Option("宫外孕","14"));
		y.options.add(new Option("子宫肌瘤","15"));
		y.options.add(new Option("子宫脱垂","16"));
		y.options.add(new Option("子宫颈炎","17"));
		y.options.add(new Option("宫颈糜烂","18"));
		y.options.add(new Option("子宫颈癌","19"));
		y.options.add(new Option("盆腔炎","20"));
		y.options.add(new Option("阴痒","21"));
		y.options.add(new Option("阴道炎","22"));
		y.options.add(new Option("女子不孕","23"));
		y.options.add(new Option("乳腺癌","24"));
		y.options.add(new Option("更年期综合征","25"));
    }
	if(x.selectedIndex == 4)
    {
		y.options.add(new Option("小儿感冒","0"));
		y.options.add(new Option("小儿肺炎","1"));
		y.options.add(new Option("惊风","2"));
		y.options.add(new Option("百日咳","3"));
		y.options.add(new Option("水痘","4"));
		y.options.add(new Option("麻疹","5"));
		y.options.add(new Option("风疹","6"));
		y.options.add(new Option("消化不良","7"));
		y.options.add(new Option("盘肠气痛","8"));
	    y.options.add(new Option("幼儿腹痛","9"));
		y.options.add(new Option("小儿肌性斜颈","10"));
		y.options.add(new Option("小儿脑性瘫痪","11"));
		y.options.add(new Option("夜啼","12"));
		y.options.add(new Option("小儿流涎","13"));
		y.options.add(new Option("佝偻病","14"));
    }
	if(x.selectedIndex == 5)
    {
		y.options.add(new Option("痈","0"));
		y.options.add(new Option("疽","1"));
		y.options.add(new Option("疖","2"));
		y.options.add(new Option("疔疮","3"));
		y.options.add(new Option("瘰疬","4"));
		y.options.add(new Option("淋巴结结核","5"));
		y.options.add(new Option("瘿","6"));
		y.options.add(new Option("地方性甲状腺肿","7"));
		y.options.add(new Option("甲状腺肿瘤","8"));
		y.options.add(new Option("乳痈","9"));
		y.options.add(new Option("乳腺炎","10"));
		y.options.add(new Option("乳癖","11"));
		y.options.add(new Option("乳腺增生","12"));
		y.options.add(new Option("脱疽","13"));
		y.options.add(new Option("血栓闭塞性脉管炎","14"));
		y.options.add(new Option("臁疮","15"));
		y.options.add(new Option("痔","16"));
		y.options.add(new Option("疝","17"));
		y.options.add(new Option("肛裂","18"));
		y.options.add(new Option("肛门瘙痒症","19"));
		y.options.add(new Option("肛门瘙痒症","20"));
		y.options.add(new Option("肛门直肠周围脓肿","21"));
		y.options.add(new Option("肠痈","22"));
		y.options.add(new Option("急性阑尾炎","23"));
		y.options.add(new Option("肠梗阻","24"));
		y.options.add(new Option("胆道系统感染","25"));
		y.options.add(new Option("胆石病","26"));
    }
	if(x.selectedIndex == 6)
    {
		y.options.add(new Option("脓疱疮",""));
	   	y.options.add(new Option("黄水疮",""));
	   	y.options.add(new Option("湿疮",""));
	    y.options.add(new Option("湿疹",""));
	   	y.options.add(new Option("圆癣",""));
	   	y.options.add(new Option("体癣",""));
	    y.options.add(new Option("股癣",""));
	   	y.options.add(new Option("白秃疮",""));
	   	y.options.add(new Option("肥疮",""));
	    y.options.add(new Option("头癣",""));
	   	y.options.add(new Option("蛇串疮",""));
	   	y.options.add(new Option("带状疱疹",""));
		y.options.add(new Option("鹅掌风",""));
	   	y.options.add(new Option("牛皮癣",""));
	   	y.options.add(new Option("神经性皮炎",""));
	    y.options.add(new Option("梅毒",""));
	   	y.options.add(new Option("漆疮",""));
	   	y.options.add(new Option("接触性皮炎",""));
	    y.options.add(new Option("瘾疹",""));
	   	y.options.add(new Option("荨麻疹",""));
	   	y.options.add(new Option("白癜风",""));
	    y.options.add(new Option("白疕",""));
	   	y.options.add(new Option("银屑病",""));
	   	y.options.add(new Option("白屑风",""));
		y.options.add(new Option("脂溢性皮炎",""));
	   	y.options.add(new Option("丹毒",""));
	   	y.options.add(new Option("扁平疣",""));
	    y.options.add(new Option("粉刺",""));
	   	y.options.add(new Option("雀斑",""));
	   	y.options.add(new Option("黄褐斑",""));
	    y.options.add(new Option("皮肤瘙痒",""));
	   	y.options.add(new Option("瘢痕疙瘩",""));
	   	y.options.add(new Option("毒蛇咬伤",""));
	    y.options.add(new Option("痱子",""));
	   	y.options.add(new Option("酒皶鼻",""));
   	}
	if(x.selectedIndex == 7)
   	{
		y.options.add(new Option("骨折",""));
	    y.options.add(new Option("筋伤",""));
	   	y.options.add(new Option("软组织损伤",""));
	   	y.options.add(new Option("伤科内伤","")); 
	   	y.options.add(new Option("关节脱位",""));
	    y.options.add(new Option("腰肌劳损",""));
	   	y.options.add(new Option("腰椎间盘脱出症",""));
	   	y.options.add(new Option("腰椎间盘脱出症",""));
		y.options.add(new Option("颈椎病",""));
	    y.options.add(new Option("肩关节周围炎",""));
	   	y.options.add(new Option("退行性骨关节炎",""));
	   	y.options.add(new Option("骨质增生","")); 
    }
	if(x.selectedIndex == 8)
    {
	   	y.options.add(new Option("失音",""));
	    y.options.add(new Option("慢性咽炎",""));
	    y.options.add(new Option("乳蛾",""));
	   	y.options.add(new Option("急性扁桃体炎",""));
	   	y.options.add(new Option("梅核气",""));
	    y.options.add(new Option("鼻渊",""));
		y.options.add(new Option("鼻窦炎",""));
	    y.options.add(new Option("鼻窒",""));
	    y.options.add(new Option("慢性鼻炎",""));
	   	y.options.add(new Option("鼻鼽",""));
	   	y.options.add(new Option("过敏性鼻炎",""));
	    y.options.add(new Option("耳鸣耳聋",""));
		y.options.add(new Option("聤耳",""));
	    y.options.add(new Option("化脓性中耳炎",""));
		y.options.add(new Option("牙痛",""));
	    y.options.add(new Option("牙痈",""));
		y.options.add(new Option("牙宣",""));
	    y.options.add(new Option("萎缩性牙周病",""));
		y.options.add(new Option("口疮",""));
	    y.options.add(new Option("针眼",""));
		y.options.add(new Option("天行赤眼",""));
	    y.options.add(new Option("红眼病",""));
		y.options.add(new Option("眼丹",""));
	    y.options.add(new Option("翳",""));
		y.options.add(new Option("白内障",""));
	    y.options.add(new Option("上睑下垂",""));
		y.options.add(new Option("雀盲",""));
	    y.options.add(new Option("夜盲",""));
		y.options.add(new Option("青盲",""));
		y.options.add(new Option("青光眼",""));
	    y.options.add(new Option("漏睛疮",""));
		y.options.add(new Option("泪囊炎",""));
		y.options.add(new Option("近视",""));
		
    } 
}  
</script> 
<p style="text-align: left;margin-left: 20%">医生建议：</p>
<textarea class="textbox" name="suggest" rows="4"></textarea>
<br><br><br><br>
<input type="submit" id="submit2" class="button" value="保存并提交" style="float: right;margin-right: 20%" onClick="myCheck2()">
</form>
<script type="text/javascript">
function myCheck2()
       {
           form2.submit();
       }
</script>

<br><br>
<hr style="border:3 double #987cb9" width="90%" color="#987cb9" SIZE="3">
<br>
<h2 class="header" align="center">药物配给</h2>
<br><br>
<form class="logarea1" action="dragcheck.php" method="post">
<br><br>
药物名称：<input class="text" type="text" name="drag0">&nbsp;&nbsp;重&nbsp;&nbsp;量：<input class="number" type="number" name="weight0" max="50" min="0" step="0.1">&nbsp;克
&nbsp;&nbsp;
服用方式：
<select class="xuanze" name="style0" id="style0" onclick = "setCookie('style0',this.selectedIndex)">
<option selected>请选择服用方式</option>
<option>口服</option>
<option>含服</option>
<option>吞服</option>
</select><br><br>
<script type="text/javascript">
    var selectedIndex = getCookie("style0");
    if(selectedIndex != null) {
        document.getElementById("style0").selectedIndex = selectedIndex;
    }
</script>

药物名称：<input class="text" type="text" name="drag1">&nbsp;&nbsp;重&nbsp;&nbsp;量：<input class="number" type="number" name="weight1" max="50" min="0" step="0.1">&nbsp;克
&nbsp;&nbsp;
服用方式：
<select class="xuanze" name="style1" id="style1" onclick = "setCookie('style1',this.selectedIndex)">
<option selected>请选择服用方式</option>
<option>口服</option>
<option>含服</option>
<option>吞服</option>
</select><br><br>
<script type="text/javascript">
    var selectedIndex = getCookie("style1");
    if(selectedIndex != null) {
        document.getElementById("style1").selectedIndex = selectedIndex;
    }
</script>

药物名称：<input class="text" type="text" name="drag2">&nbsp;&nbsp;重&nbsp;&nbsp;量：<input class="number" type="number" name="weight2" max="50" min="0" step="0.1">&nbsp;克
&nbsp;&nbsp;
服用方式：
<select class="xuanze" name="style2" id="style2" onclick = "setCookie('style2',this.selectedIndex)">
<option  selected>请选择服用方式</option>
<option>口服</option>
<option>含服</option>
<option>吞服</option>
</select><br><br>
<script type="text/javascript">
    var selectedIndex = getCookie("style2");
    if(selectedIndex != null) {
        document.getElementById("style2").selectedIndex = selectedIndex;
    }
</script>

药物名称：<input class="text" type="text" name="drag3">&nbsp;&nbsp;重&nbsp;&nbsp;量：<input class="number" type="number" name="weight3" max="50" min="0" step="0.1">&nbsp;克
&nbsp;&nbsp;
服用方式：
<select class="xuanze" name="style3" id="style3" onclick = "setCookie('style3',this.selectedIndex)">
<option selected>请选择服用方式</option>
<option>口服</option>
<option>含服</option>
<option>吞服</option>
</select><br><br>
<script type="text/javascript">
    var selectedIndex = getCookie("style3");
    if(selectedIndex != null) {
        document.getElementById("style3").selectedIndex = selectedIndex;
    }
</script>

药物名称：<input class="text" type="text" name="drag4">&nbsp;&nbsp;重&nbsp;&nbsp;量：<input class="number" type="number" name="weight4" max="50" min="0" step="0.1">&nbsp;克
&nbsp;&nbsp;
服用方式：
<select class="xuanze" name="style4" id="style4" onclick = "setCookie('style4',this.selectedIndex)">
<option selected>请选择服用方式</option>
<option>口服</option>
<option>含服</option>
<option>吞服</option>
</select><br><br>
<script type="text/javascript">
    var selectedIndex = getCookie("style4");
    if(selectedIndex != null) {
        document.getElementById("style4").selectedIndex = selectedIndex;
    }
</script>
其它方式：<br>
<textarea name="other" class="textbox" cols="70" rows="3"></textarea>
<br><br><br>
备&nbsp;&nbsp;注：<br>
<textarea name="note" class="textbox" cols="70" rows="3"></textarea>
<br><br><br><br>
<input type="submit" name="sub" class="button" value="保存并提交" style="float: right;margin-right: 200px"> 
</form>
<div style="clear: both;height: 50px">
</div>
</div>
</body>
</html>
