<!doctype html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1200px)" href="css/large_scale.css"/>
<link rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1200px)" href="css/big_scale.css"/>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/medium_scale.css" />
<?php
session_start();
error_reporting(0);

	$username = $age = $height = $weight = $idnumber = $nation = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username = $_SESSION["username"];
		//echo "<script>alert('$username');history.go(-1);</script>";
		$name = $_POST["username"];
		$age = $_POST["age"];
		$height = $_POST["height"];
		$weight = $_POST["weight"];
		$idnumber = $_POST["idnumber"];
		$nation = $_POST["nation"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$sex = $_POST["sex"];
		
		if ($name == "" || $age == "" || $height == "" || $weight == "" || $idnumber == "" || $nation == "" || $email == "" || $phone == "" || $sex == "")
		{
			echo "<script>alert('请完善个人信息');history.go(-1);</script>";
		}
		
		else
			
		{
			mysql_connect("localhost","root","hl1193001636");
			
			mysql_select_db("work_space");
	
			mysql_query("set character set 'utf8'");//读库   
	
			mysql_query("set names utf8");
			
			$sql = mysql_query("UPDATE patient_information SET name = '$name',sex = '$sex', age = '$age', nation = '$nation',height = '$height', weight = '$weight' , phone = '$phone',email = '$email',idnumber = '$idnumber' WHERE username ='$username'");
			
			if ($sql)
			{
				echo "<script>alert('个人数据写入成功！');window.location.href='patientdetails.php';</script>";
			}
			else
			{
				echo "<script>alert('系统繁忙，请稍后再试');history.go(-1);</script>";
			}
		}
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>detailed symptoms</title>

</head>

<body>
<br><br><br><br>
<div id="container" style=" font-size: 20px; width:90%;margin-left: 5%"> 
	<!--标题栏-->
	<div id="title" style="width: 100%;height: :100px">
		<h1 class="header" style="text-align-last: center">请填写详细信息</h1>
	</div>
	<!--标题1-->
	<div id="h1" style="width: 100%;text-align: left">
	<hr style="border:3 double #987cb9" width="90%" color="#987cb9" SIZE="3">
	<h2 style="text-align: center">基本资料</h2>
	<br>
	</div>
	<!--内容正文，分两栏-->
		<form name="content" action="patientdetails.php" method="post">
		<p style="float: left;margin-left: 15%;width: 350px;text-align: left">
        姓<span style="color:aliceblue; ">性别</span>名：<input class="text" type="text" name="username">
        </p>
        
	    <p style="float: left;margin-left: 15%;">
	    年<span style="color:aliceblue; ">性别</span>龄：<input class="text" type="number" name="age" max="120" min="0">
	    </p>
	    
	    <p style="float: left;margin-left: 15%;width: 350px;text-align: left">
	    性<span style="color:aliceblue; ">性别</span>别：&nbsp;&nbsp;<input type="radio" name="sex" value="男">男&nbsp;&nbsp;<input type="radio" name="sex" value="女">女&nbsp;&nbsp;
	    </p>
	    <p style="float: left;margin-left: 15%;">
	    身<span style="color:aliceblue; ">性别</span>高：<input class="number" type="number" name="height" max="220" min="0">cm
	    </p>
	    
	    <p style="float: left;margin-left: 15%;width: 350px;text-align: left">
	    体<span style="color:aliceblue; ">性别</span>重：<input class="number" type="number" name="weight" max="999" min="0">kg
	    </p>
	    
	    <p style="float: left;margin-left: 15%;">
	    身份证号：<input class="text" type="text" name="idnumber">
	    </p>
	    
		<p style="clear: both; float: left;margin-left: 15%;width: 350px;text-align: left">
		民<span style="color:aliceblue; ">性别</span>族：<input class="text" type="text" name="nation">
		</p>
		
		<p style="float: left;margin-left: 15%;">
		个人邮箱：<input class="text" type="text" name="email">
		</p>
		
		<p style="clear: both; float: left;margin-left: 15%;width: 350px;text-align: left">
		移动电话：<input class="text" type="text" name="phone">
		</p>
		
		<p style="float: left;margin-left: 15%;">
		出生年月：
		<select class="xuanze" name="sel1" id="sel1">
        <option value="year">- - - -</option>
    	</select> 年
    	<select class="xuanze" name="sel2" id="sel2">
    	<option value="month">- -</option>
    	</select> 月
    	<select class="xuanze" name="sel3" id="sel3">
    	<option value="day">- -</option>
    	</select> 日
    	</p>
		<p style="clear: both;float: left;margin-left: 15%;">
		所在城市：
		<select class="xuanze" id="selProvince" name="province">  
  		</select> 省
  		<select class="xuanze" id="selCity" name="city">  
  		</select> 市
   		<select class="xuanze" id="selDist" name="area">  
  		</select> 区/县
  		</p>
  		<p style="clear: both; float: left;margin-left: 15%;text-align: left">
		详细住址：<br>
		<textarea  class="textbox" cols="45" rows="4" role="1"></textarea>
		</p>
<!--日期三级联动-->
<script type="text/javascript">
//生成1900年-2100年
for(var i = 1900; i<=2017;i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel1.appendChild(option);
}
//生成1月-12月
for(var i = 1; i <=12; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel2.appendChild(option);    
}
//生成1日—31日
for(var i = 1; i <=31; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel3.appendChild(option);    
}
if(month == 2){
    //如果是闰年
    if((year % 4 === 0 && year % 100 !== 0)  || year % 400 === 0){
        days = 29;
    //如果是平年
    }else{
        days = 28;
    }
//如果是第4、6、9、11月
}else if(month == 4 || month == 6 ||month == 9 ||month == 11){
    days = 30;
}else{
    days = 31;
}
//年份点击
sel1.onclick = function(){
    //月份显示默认值
sel2.options[0].selected = true;
    //天数显示默认值
sel3.options[0].selected = true;
}
//增加或删除天数
    //如果是28天，则删除29、30、31天(即使他们不存在也不报错)
    if(days == 28){
        sel3.remove(31);
        sel3.remove(30);
        sel3.remove(29);
    }
    //如果是29天
    if(days == 29){
        sel3.remove(31);
        sel3.remove(30);
        //如果第29天不存在，则添加第29天
        if(!sel3.options[29]){
            sel3.add(new Option('29','29'),undefined)
        }
    }
    //如果是30天
    if(days == 30){
        sel3.remove(31);
        //如果第29天不存在，则添加第29天
        if(!sel3.options[29]){
            sel3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel3.options[30]){
            sel3.add(new Option('30','30'),undefined)
        }
    }
    //如果是31天
    if(days == 31){
        //如果第29天不存在，则添加第29天
        if(!sel3.options[29]){
            sel3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel3.options[30]){
            sel3.add(new Option('30','30'),undefined)
        }
        //如果第31天不存在，则添加第31天
        if(!sel3.options[31]){
            sel3.add(new Option('31','31'),undefined)
        }
    }
	
</script>

<!--城市三级联动-->
<script type="text/javascript">  
var temp;
var P = new Array();
var C = new Array();
var D = new Array();
P = new Array("北京","上海","天津","重庆","广东","四川","浙江","贵州","辽宁","江苏","福建","河北","河南"," 吉林","黑龙江","山东","安徽","广西","海南","内蒙古","山西","宁夏","甘肃","陕西","青海","湖北","湖南"," 江西","云南","新疆","香港","澳门");
/*北京    */ C[0] = new Array("北京");
/*上海    */ C[1] = new Array("上海");
/*天津    */ C[2] = new Array("天津");
/*重庆    */ C[3] = new Array("重庆");
/*广东    */ C[4] = new Array("广州","深圳","珠海","佛山","惠州","东莞","中山","江门","湛江","汕头");
/*四川    */ C[5] = new Array("成都","自贡市","攀枝花","泸州");
/*浙江    */ C[6] = new Array("杭州","宁波","嘉兴","绍兴","温州","金华","衢州","舟山","台州","丽水","湖州");
/*贵州    */ C[7] = new Array("贵阳");
/*辽宁    */ C[8] = new Array("沈阳","大连");
/*江苏    */ C[9] = new Array("南京","苏州","南通","无锡","盐城","徐州","常州","连云港","常熟","扬州","镇江","泰州","昆山","吴江");
/*福建    */C[10] = new Array("福州","厦门","泉州");
/*河北    */C[11] = new Array("石家庄","唐山","邯郸","保定","廊坊","衡水","秦皇岛");
/*河南    */C[12] = new Array("郑州","洛阳");
/*吉林    */C[13] = new Array("长春","吉林");
/*黑龙江  */C[14] = new Array("哈尔滨");
/*山东    */C[15] = new Array("济南","青岛","威海","烟台","潍坊","日照","临沂","淄博");
/*安徽    */C[16] = new Array("合肥","芜湖","马鞍山");
/*广西    */C[17] = new Array("南宁","桂林","北海","柳州");
/*海南    */C[18] = new Array("海南","三亚");
/*内蒙古  */C[19] = new Array("呼和浩特","包头");
/*山西    */C[20] = new Array("太原");
/*宁夏    */C[21] = new Array("银川");
/*甘肃    */C[22] = new Array("兰州");
/*陕西    */C[23] = new Array("西安");
/*青海    */C[24] = new Array("西宁");
/*湖北    */C[25] = new Array("武汉","宜昌");
/*湖南    */C[26] = new Array("长沙","株洲","湘潭");
/*江西    */C[27] = new Array("南昌","赣州");
/*云南    */C[28] = new Array("昆明");
/*新疆    */C[29] = new Array("乌鲁木齐");
/*香港    */C[30] = new Array("香港");
/*澳门    */C[31] = new Array("澳门");
/*台湾    */C[31] = new Array("台北");
for(temp in C)
{
    D[temp] = new Array();
}
/*北京    */D[0][0] = new Array("海淀区,朝阳区,东城区,西城区,崇文区,宣武区,丰台区,石景山,房山区,门头沟,通州区,顺义区,昌平区,密云区,怀柔区,延庆区,平谷区,大兴区,燕郊区");
/*上海    */D[1][0] = new Array("黄浦区,卢湾区,徐汇区,徐家汇,长宁区,静安区,普陀区,闸北区,虹口区,杨浦区,宝山区,闵行区,嘉定区,浦东新区,松江区,金山区,青浦区,南汇区,奉贤区,崇明县");
/*天津    */D[2][0] = new Array("和平,西青,北辰,大港,南开,河东,河西,河北,津南,红桥,塘沽,汉沽,东丽,宝坻,蓟县,武清,宁河,静海,开发区");
/*重庆    */D[3][0] = new Array("南岸,渝北,万盛,大渡口,万州,北碚,沙坪坝,巴南,双桥,涪陵,江北,九龙坡,渝中");
/*广州    */D[4][0] = new Array("荔湾,越秀,东山,天河,海珠,黄埔,芳村,白云,花都,番禺,东莞,广州经济技术开发区,从化,增城,萝岗,清远,南沙,佛山");
/*深圳    */D[4][1] = new Array("福田,罗湖,南山,盐田,宝安,龙岗");
/*珠海    */D[4][2] = new Array("斗门,横琴,金湾,香洲,坦洲");
/*佛山    */D[4][3] = new Array("南海,顺德,三水,高明,禅城");
/*惠州    */D[4][4] = new Array("博罗县,大亚湾区,惠城区,惠东县,惠阳区,龙门县,仲恺区");
/*东莞    */D[4][5] = new Array("茶山,长安,常平,大朗,大岭山,道?,东城,东坑,凤岗,高?,莞城,洪梅,厚街,黄江,虎门,寮步,麻涌,南城,企石,桥头,清溪,沙 田,石碣,石龙,石排,松山湖,塘厦,万江,望牛墩,谢岗,樟木头,中堂");
/*中山    */D[4][6] = new Array("东区,南区,西区,石岐区,南头镇,古镇镇,东凤镇,小榄镇,黄圃镇,三角镇,民众镇,阜沙镇,火炬区,港口镇,东升镇,横栏镇,沙溪镇,大涌镇,板芙镇,五桂山镇,南朗镇,三乡镇,神湾镇,坦洲镇");
/*江门    */D[4][7] = new Array("新会区,蓬江区,江海区,台山市,恩平市,鹤山市,开平市");
/*成都    */D[5][0] = new Array("青羊,锦江,金牛,武侯,成华,龙泉驿,青白江,高新区,金堂县,新都区,温江区,郫县,双流县,新津县,大邑县,都江堰市,崇州市,邛崃市,蒲江县,彭州市,高新西区,高新西区");
/*杭州    */D[6][0] = new Array("上城,下城,西湖,拱墅,江干,滨江,余杭,萧山,富阳,桐庐,临安,淳安,建德");
/*宁波    */D[6][1] = new Array("海曙,江东,江北,鄞州,镇海,北仑,慈溪,余姚,奉化,宁海,象山,高新区,东钱湖旅游度假区");
/*嘉兴    */D[6][2] = new Array("嘉善,平湖,海盐,海宁,桐乡,秀洲,南湖,市区,经济开发区");
/*绍兴    */D[6][3] = new Array("绍兴县,诸暨市,上虞市,新昌县,越城区,嵊州市");
/*贵阳    */D[7][0] = new Array("云岩,南明,金阳新区,小河,花溪,乌当,白云,清镇,开阳,修文,息烽,小河片,金阳");
/*沈阳    */D[8][0] = new Array("和平,沈河,皇姑,大东,铁西,苏家屯,东陵,新城子,于洪,新民,辽中,康平,法库,浑南新区,沈北新区");
/*大连    */D[8][1] = new Array("西岗,中山,沙河口,甘井子,旅顺口,金州,开发区,高新园区,长兴岛,普兰店,瓦房店,庄河");
/*南京    */D[9][0] = new Array("白下,秦淮,玄武,鼓楼,下关,建邺,江宁,六合,浦口,栖霞,雨花,大厂,溧水,高淳");
/*苏州    */D[9][1] = new Array("园区,新区,平江,沧浪,金阊,虎丘,吴中,昆山,常熟,太仓,张家港,相城,吴江");
/*南通    */D[9][2] = new Array("城东区,城南区,城北区,城中区,狼山区,天生港,唐闸区,观音山区,开发区,海安县,如皋市,如东县,通州,海门,启东市,海门市,港闸,崇川");
/*无锡    */D[9][3] = new Array("崇安区,南长区,北塘区,新区,滨湖区,惠山区,马山区,锡山区,江阴市,宜兴市");
/*盐城    */D[9][4] = new Array("盐城,东台,大丰,盐都,建湖,响水,阜宁,射阳,滨海");
/*徐州    */D[9][5] = new Array("丰县,鼓楼,贾汪,金山桥开发区,沛县,邳州市,泉山,睢宁市,新城区,云龙,铜山区");
/*常州    */D[9][6] = new Array("金坛,溧阳,戚区,天宁,武进,新北,钟楼");
/*连云港  */D[9][7] = new Array();

/*常熟    */D[9][8] = new Array();
/*扬州    */D[9][9] = new Array("宝应市,广陵区,高邮市,邗江区,江都市,开发区,维扬区,仪征市");
/*镇江    */D[9][10] = new Array("丹阳市,句容市,扬中市,丹徒区,京口区,润州区,镇江新区");
/*泰州    */D[9][11] = new Array("城中区,城东区,城西区,城南区,城北区,高港区,泰兴市,姜堰市,兴化市,靖江市");
/*昆山    */D[9][12] = new Array("巴城镇,淀山湖镇,花桥镇,锦溪镇,陆家镇,千灯镇,玉山镇,张浦镇,周市镇,周庄镇");
/*福州    */D[10][0] = new Array("台江,鼓楼,仓山,晋安,马尾,闽侯县,长乐市");
/*厦门    */D[10][1] = new Array("开元,湖里,思明,鼓浪屿,集美,杏林,海沧,同安,翔安,漳州,龙岩,泉州");
/*泉州    */D[10][2] = new Array("丰泽区,安溪县,德化县,惠安县,晋江市,鲤城区,洛江区,南安市,泉港区,石狮市,永春县");
/*石家庄  */D[11][0] = new Array("桥东,桥西,新华,裕华,长安,开发区,正定,平山,鹿泉市,栾城,藁城");
/*唐山    */D[11][1] = new Array("曹妃甸工业区,丰南,丰润,高新区,古冶,海港开发区,汉沽管理区,开平,乐亭县,卢台开发区,路北,路南,滦南县,滦县,南堡开发区,迁安市,迁西县,唐海县,玉田县,遵化市");
/*邯郸    */D[11][2] = new Array();
/*保定    */D[11][3] = new Array();
/*廊坊    */D[11][4] = new Array("安次,广阳,三河,霸州,香河,永清,固安,文安,大城,大厂");
/*衡水    */D[11][5] = new Array("桃城区,深州市,冀州市,安平县,故城县,阜城县,景县,枣强县,武强县,饶阳县,开发区,武邑县,郊区");
/*秦皇岛  */D[11][6] = new Array("北戴河,昌黎县,抚宁县,海港,卢龙县,青龙县,山海关");
/*郑州    */D[12][0] = new Array("金水,中原,管城,二七,邙山,惠济,经济技术开发区,郑东新区");
/*洛阳    */D[12][1] = new Array("涧西区,西工区,老城区,?河区,洛龙区,吉利区,偃师市,栾川县,孟津县,咸阳县,伊川县,宜阳县");
/*长春    */D[13][0] = new Array("朝阳,宽城,二道,南关,绿园,双阳,其它,吉林地区,高新,经开,净月,汽开");
/*吉林    */D[13][1] = new Array("昌邑区,船营区,龙潭区,丰满区,永吉县,舒兰市,磐石市,蛟河市,桦甸市,经开区,高新区");
/*哈尔滨  */D[14][0] = new Array("道里,道外,南岗,动力,平房,香坊,太平,开发区,阿城,呼兰,松北");
/*济南    */D[15][0] = new Array("市中,天桥,历下,槐荫,历城,长清,高新,济阳,平阴,商河,章丘");
/*青岛    */D[15][1] = new Array("市南,市北,四方,李沧,崂山,城阳,黄岛,即墨市,胶州市,胶南市,平度市,莱西市,开发区");
/*威海    */D[15][2] = new Array("环翠区,文登市,荣成市,乳山市,高区,经区");
/*烟台    */D[15][3] = new Array("芝罘区,福山区,龙口市,莱阳市,莱州市,蓬莱市,招远市,莱山区,开发区,牟平区,栖霞市,海阳市,长岛县");
/*潍坊    */D[15][4] = new Array("奎文,潍城,寒亭,坊子,寿光市,高新技术开发区,经济开发区");
/*日照    */D[15][5] = new Array("东港");
/*临沂    */D[15][6] = new Array("兰山");
/*合肥    */D[16][0] = new Array("中市,东市,西市,郊区,庐阳区,包河区,瑶海区,蜀山区,高新区,新站区,经开区,政务区,滨湖新区");
/*南宁    */D[17][0] = new Array("兴宁,青秀,西乡塘,江南,良庆,邕宁,桂林市,北海市,钦州市");
/*桂林    */D[17][1] = new Array("秀峰区,叠彩区,象山区,七星区,雁山区,西城区,八里街区");
/*北海    */D[17][2] = new Array("海城,银海,铁山港,合浦");
/*海南    */D[18][0] = new Array("海口市,三亚市,文昌市,琼海市,万宁市,儋州市,东方市,五指山市,保亭县,洋浦经济开发区,其他,定安县,澄迈县");
/*呼和浩特*/D[19][0] = new Array("回民,玉泉,新城,金川开发区,金桥开发区,金山开发区,如意开发区,赛罕,郊区,托克托,清水河,武川,和林格尔,土默特左旗");
/*太原    */D[20][0] = new Array("杏花岭,小店,迎泽,尖草坪,万柏林,晋源,榆次");
/*银川    */D[21][0] = new Array("城区,新城,兴庆区,金凤区,西夏区,永定县,贺兰县,灵武市");
/*兰州    */D[22][0] = new Array("城关,七里河,西固,安宁,红古,永登,榆中,皋兰");
/*西安    */D[23][0] = new Array("城北,城南,城东,城内,城西,高新,长安,临潼,蓝田,阎良,灞桥,咸阳");
/*西宁    */D[24][0] = new Array("城中,城东,城西,城北,湟源,湟中,大通回族土族自治县");
/*武汉    */D[25][0] = new Array("江汉,江岸,?口,汉阳,武昌,洪山,青山,东西湖,黄陂,江夏,阳逻,新洲,蔡甸,汉南,沌口");
/*宜昌    */D[25][1] = new Array("夷陵区,西陵区,伍家岗区,点军区,?亭区,宜都市,当阳市,枝江市,东山开发区,远安县,兴山县,秭归县,长阳土家族自治县,五峰土家族自治县");
/*长沙    */D[26][0] = new Array("岳麓,天心,雨花,开福,芙蓉,星沙,长沙经济开发区");
/*南昌    */D[27][0] = new Array("东湖,西湖,青云谱,湾里,昌北,高新开发区,红谷滩,南昌县,青山湖,新建县,郊区,进贤,安义");
/*昆明    */D[28][0] = new Array("盘龙区,五华区,官渡区,西山区,安宁,呈贡,其他,东川");
/*乌鲁木齐*/D[29][0] = new Array("天山,沙伊巴克,新市,水磨沟,头屯河,南泉,东山");
/*香港    */D[30][0] = new Array("北区,大埔去,东区,观塘区,黄大仙区,九龙城区,葵青区,离岛区,南区,沙田区,屯门区,湾仔区,西贡区,油尖旺区,元朗区,中西区,荃湾区");
/*台北    */D[31][0] = new Array();
///城市与省份的序列对应、每个城市与每个区域数组对应
//创建城市对象，返回一个该城市所在省份及所拥有区域的对象
function createCity(sCityName)
{
    var oCity = new Object();
    oCity.province = "";
    oCity.city = sCityName;
    oCity.dist = new Array();
    oCity.pindex = -1;//所属省份在省份数组中的位置index
    oCity.cindex = -1;//城市在所属城市数组中的位置index（二者用来确定区域数组）
   
    var m = -1;var n = -1;
    for(var i = 0; i < C.length; i++)
    {
        for(var j=0; j < C[i].length; j++)
        {
            if(C[i][j] == sCityName)
            {
                oCity.province = P[i];
                oCity.dist = D[i][j];
                oCity.pindex = i;
                oCity.cindex = j;
                break;
            }
        }
       
        if(oCity.province != "")
        {
            break;
        }
    }
   
    return oCity;
}
/*三级、省、市、区域*/
/*面向对象*/
function oMenu(selProvince,selCity,selDist)
{
    ///selProvince省份的select控件id
    ///selCity城市的select控件id
    ///selDist区域的select控件id
    this.oProvince = document.getElementById(selProvince);   
   
    ///城市变化，初始化区域
    function fnInitDist(city)
    {
        var objCity = createCity(city);
        var dist = objCity.dist.toString().split(',');
        ClearSelect(selDist,"- -");
        InitSelect(selDist,dist,"");
    };
   
    ///初始化城市
    function fnInitCity(province)
    { 
        for(var i = 0;i < P.length;i++)
        {
            if(P[i] == province)
            {
                ClearSelect(selCity,"请选择城市");
                InitSelect(selCity,C[i],"");
                ClearSelect(selDist,"- -");
                document.getElementById(selCity).onchange = function (){fnInitDist(this.value);};
                break;
            }
        }       
    };
   
    ///初始化省份
    this.fnInitProvince = function(){
        InitSelect(selProvince,P,"- -");
        ClearSelect(selCity,"- -");
        ClearSelect(selDist,"- -");       
        this.oProvince.onchange = function (){fnInitCity(this.value);};
    };
///初始化select控件
    function InitSelect(obj,aInitValue,sMenu)
    {
        ///obj:要初始化的select控件对象的id
        ///aInitValue:要初始化的数组值
        ///sMenu:在select控件头部要添加的option，value为空；如果该参数为空，则只初始化aInitValue而不加头部
        if(sMenu != "")
        {
            document.getElementById(obj).options.add(new Option(sMenu,""));
        }
       
        for(var i = 0; i < aInitValue.length; i++)
        {
            document.getElementById(obj).options.add(new Option(aInitValue[i],aInitValue[i]));
        }       
    }
   
    function ClearSelect(obj,sMenu)
    {       
        document.getElementById(obj).options.length = 0;
        document.getElementById(obj).options.add(new Option(sMenu,""));       
    }   
}
var oMenu = new oMenu("selProvince","selCity","selDist");//select ID
    oMenu.fnInitProvince();
</script>
	
	<!--标题2-->
	<hr style="border:3 double #987cb9" width="90%" color="#987cb9" SIZE="3">
	<h2>既往病史</h2>
	<br>
	<!--正文分两栏-->
	<!--患病时间设置-->
	
	<!--既往病史设置-->
	<p style="float: left;margin-left: 15%">
	所患疾病：
	<select class="xuanze" id="first" onChange="change()">  
    	<option selected="selected">请选择疾病纲目</option>
    	<option value="传染性病证">传染性病证</option>
    	<option value="内科病证">内科病证</option>
    	<option value="妇科病证">妇科病证</option>
    	<option value="小儿科病证">小儿科病证</option>
    	<option value="外科病证">外科病证</option>
    	<option value="皮肤科病证">皮肤科病证</option>
    	<option value="伤科病证">伤科病证</option>
    	<option value="五官科病证">五官科病证</option>
    </select>&nbsp  
  
	<select class="xuanze" id="second">
  		<option selected="selected">请选择疾病科目</option>
  		<option>伤寒</option>     		 
	</select>
	</p>
	
<!--疾病二级联动-->
<script>  
function change()  
{  
   var x = document.getElementById("first");  
   var y = document.getElementById("second");
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
		y.options.add(new Option("噎膈",""));
		y.options.add(new Option("呃逆",""));
		y.options.add(new Option("胃痛",""));
		y.options.add(new Option("泄泻",""));
		y.options.add(new Option("便秘",""));
		y.options.add(new Option("黄疸",""));
		y.options.add(new Option("狐惑",""));
		y.options.add(new Option("贝赫切特氏综合征",""));
		y.options.add(new Option("水肿",""));
		y.options.add(new Option("消渴",""));
		y.options.add(new Option("积聚",""));
		y.options.add(new Option("血证",""));
		y.options.add(new Option("紫斑",""));
		y.options.add(new Option("痹证",""));
		y.options.add(new Option("痿证",""));
		y.options.add(new Option("肠道寄生虫病",""));
		y.options.add(new Option("鼓胀",""));
		y.options.add(new Option("肝硬化",""));
		y.options.add(new Option("癃闭",""));
		y.options.add(new Option("关格",""));
		y.options.add(new Option("尿毒症",""));
		y.options.add(new Option("头痛",""));
		y.options.add(new Option("胸痛",""));
		y.options.add(new Option("胁痛",""));
		y.options.add(new Option("真心痛",""));
		y.options.add(new Option("腹痛",""));
		y.options.add(new Option("腰痛",""));
		y.options.add(new Option("遗尿",""));
		y.options.add(new Option("遗精",""));
		y.options.add(new Option("阳痿",""));
		y.options.add(new Option("早泄",""));
		y.options.add(new Option("男性不育",""));
		y.options.add(new Option("眩晕",""));
		y.options.add(new Option("肥胖病",""));
		y.options.add(new Option("面瘫",""));
		y.options.add(new Option("胸痹",""));
		y.options.add(new Option("心悸",""));
		y.options.add(new Option("健忘",""));
		y.options.add(new Option("失眠",""));
		y.options.add(new Option("多寐",""));
		y.options.add(new Option("癫证",""));
		y.options.add(new Option("狂",""));
		y.options.add(new Option("痫",""));
		y.options.add(new Option("中风",""));
		y.options.add(new Option("郁证",""));
		y.options.add(new Option("震颤",""));
		y.options.add(new Option("内伤发热",""));
		y.options.add(new Option("痞满",""));
		y.options.add(new Option("厌食",""));
		y.options.add(new Option("中暑",""));
		y.options.add(new Option("汗证",""));
		y.options.add(new Option("冠心病",""));
		y.options.add(new Option("心律失常",""));
		y.options.add(new Option("高血压",""));
		y.options.add(new Option("高脂血症",""));
		y.options.add(new Option("糖尿病",""));
		y.options.add(new Option("病毒性肝炎",""));
		y.options.add(new Option("胆囊炎",""));
		y.options.add(new Option("胆结石",""));
		y.options.add(new Option("泌尿系结石",""));
		y.options.add(new Option("慢性肾炎",""));
		y.options.add(new Option("胃下垂",""));
		y.options.add(new Option("老年性痴呆症",""));
		y.options.add(new Option("鼻咽癌",""));
		y.options.add(new Option("甲状腺癌",""));
		y.options.add(new Option("肺癌",""));
		y.options.add(new Option("食管癌",""));
		y.options.add(new Option("胃癌",""));
		y.options.add(new Option("大肠癌",""));
		y.options.add(new Option("肝癌",""));
		y.options.add(new Option("白血病",""));
		y.options.add(new Option("硬皮病",""));
		y.options.add(new Option("红斑狼疮",""));
		
    }
    if(x.selectedIndex == 3)
   {
		y.options.add(new Option("月经不调",""));
		y.options.add(new Option("痛经",""));
		y.options.add(new Option("经闭",""));
		y.options.add(new Option("倒经",""));
		y.options.add(new Option("崩漏",""));
		y.options.add(new Option("功能性子宫出血",""));
		y.options.add(new Option("带下",""));
		y.options.add(new Option("恶阻",""));
		y.options.add(new Option("妊娠呕吐",""));
		y.options.add(new Option("胎动不安",""));
		y.options.add(new Option("胎漏",""));
		y.options.add(new Option("滑胎",""));
		y.options.add(new Option("习惯性流产",""));
		y.options.add(new Option("产后腹痛",""));
		y.options.add(new Option("宫外孕",""));
		y.options.add(new Option("子宫肌瘤",""));
		y.options.add(new Option("子宫脱垂",""));
		y.options.add(new Option("子宫颈炎",""));
		y.options.add(new Option("宫颈糜烂",""));
		y.options.add(new Option("子宫颈癌",""));
		y.options.add(new Option("盆腔炎",""));
		y.options.add(new Option("阴痒",""));
		y.options.add(new Option("阴道炎",""));
		y.options.add(new Option("女子不孕",""));
		y.options.add(new Option("乳腺癌",""));
		y.options.add(new Option("更年期综合征",""));
    }
	if(x.selectedIndex == 4)
    {
		y.options.add(new Option("小儿感冒",""));
		y.options.add(new Option("小儿肺炎",""));
		y.options.add(new Option("惊风",""));
		y.options.add(new Option("百日咳",""));
		y.options.add(new Option("水痘",""));
		y.options.add(new Option("麻疹",""));
		y.options.add(new Option("风疹",""));
		y.options.add(new Option("消化不良",""));
		y.options.add(new Option("盘肠气痛",""));
	    y.options.add(new Option("幼儿腹痛",""));
		y.options.add(new Option("小儿肌性斜颈",""));
		y.options.add(new Option("小儿脑性瘫痪",""));
		y.options.add(new Option("夜啼",""));
		y.options.add(new Option("小儿流涎",""));
		y.options.add(new Option("佝偻病",""));
    }
	if(x.selectedIndex == 5)
    {
		y.options.add(new Option("痈",""));
		y.options.add(new Option("疽",""));
		y.options.add(new Option("疖",""));
		y.options.add(new Option("疔疮",""));
		y.options.add(new Option("瘰疬",""));
		y.options.add(new Option("淋巴结结核",""));
		y.options.add(new Option("瘿",""));
		y.options.add(new Option("地方性甲状腺肿",""));
		y.options.add(new Option("甲状腺肿瘤",""));
		y.options.add(new Option("乳痈",""));
		y.options.add(new Option("乳腺炎",""));
		y.options.add(new Option("乳癖",""));
		y.options.add(new Option("乳腺增生",""));
		y.options.add(new Option("脱疽",""));
		y.options.add(new Option("血栓闭塞性脉管炎",""));
		y.options.add(new Option("臁疮",""));
		y.options.add(new Option("痔",""));
		y.options.add(new Option("疝",""));
		y.options.add(new Option("肛裂",""));
		y.options.add(new Option("肛门瘙痒症",""));
		y.options.add(new Option("肛门瘙痒症",""));
		y.options.add(new Option("肛门直肠周围脓肿",""));
		y.options.add(new Option("肠痈",""));
		y.options.add(new Option("急性阑尾炎",""));
		y.options.add(new Option("肠梗阻",""));
		y.options.add(new Option("胆道系统感染和胆石病","")); 
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
	<p style="clear: both;float: left;margin-left: 15%">
	持续时间：
	<select class="xuanze" name="sel1_1" id="sel1_1">
    <option value="year">- - - -</option>
    </select> 年
    <select class="xuanze" name="sel1_2" id="sel1_2">
    <option value="month">- -</option>
    </select> 月
    <select class="xuanze" name="sel1_3" id="sel1_3">
    <option value="day">- -</option>
    </select> 日
    <!--日期三级联动-->
<script type="text/javascript">
//生成1900年-2100年
for(var i = 1970; i<=2017;i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel1_1.appendChild(option);
}
//生成1月-12月
for(var i = 1; i <=12; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel1_2.appendChild(option);    
}
//生成1日—31日
for(var i = 1; i <=31; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel1_3.appendChild(option);    
}
if(month == 2){
    //如果是闰年
    if((year % 4 === 0 && year % 100 !== 0)  || year % 400 === 0){
        days = 29;
    //如果是平年
    }else{
        days = 28;
    }
//如果是第4、6、9、11月
}else if(month == 4 || month == 6 ||month == 9 ||month == 11){
    days = 30;
}else{
    days = 31;
}
//年份点击
sel1_1.onclick = function(){
    //月份显示默认值
sel1_2.options[0].selected = true;
    //天数显示默认值
sel1_3.options[0].selected = true;
}
//增加或删除天数
    //如果是28天，则删除29、30、31天(即使他们不存在也不报错)
    if(days == 28){
        sel1_3.remove(31);
        sel1_3.remove(30);
        sel1_3.remove(29);
    }
    //如果是29天
    if(days == 29){
        sel1_3.remove(31);
        sel1_3.remove(30);
        //如果第29天不存在，则添加第29天
        if(!sel1_3.options[29]){
            sel1_3.add(new Option('29','29'),undefined)
        }
    }
    //如果是30天
    if(days == 30){
        sel1_3.remove(31);
        //如果第29天不存在，则添加第29天
        if(!sel1_3.options[29]){
            sel1_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel1_3.options[30]){
            sel1_3.add(new Option('30','30'),undefined)
        }
    }
    //如果是31天
    if(days == 31){
        //如果第29天不存在，则添加第29天
        if(!sel1_3.options[29]){
            sel1_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel1_3.options[30]){
            sel1_3.add(new Option('30','30'),undefined)
        }
        //如果第31天不存在，则添加第31天
        if(!sel1_3.options[31]){
            sel1_3.add(new Option('31','31'),undefined)
        }
    }
	
</script>
    &nbsp&nbsp至&nbsp&nbsp
    <select class="xuanze" name="sel2_1" id="sel2_1">
    <option value="year">- - - -</option>
    </select> 年
    <select class="xuanze" name="sel2_2" id="sel2_2">
    <option value="month">- -</option>
    </select> 月
    <select class="xuanze" name="sel2_3" id="sel2_3">
    <option value="day">- -</option>
    </select> 日
    <br><br>
    </p>
    <!--日期三级联动-->
<script type="text/javascript">
//生成1900年-2100年
for(var i = 1970; i<=2017;i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel2_1.appendChild(option);
}
//生成1月-12月
for(var i = 1; i <=12; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel2_2.appendChild(option);    
}
//生成1日—31日
for(var i = 1; i <=31; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel2_3.appendChild(option);    
}
if(month == 2){
    //如果是闰年
    if((year % 4 === 0 && year % 100 !== 0)  || year % 400 === 0){
        days = 29;
    //如果是平年
    }else{
        days = 28;
    }
//如果是第4、6、9、11月
}else if(month == 4 || month == 6 ||month == 9 ||month == 11){
    days = 30;
}else{
    days = 31;
}
//年份点击
sel2_1.onclick = function(){
    //月份显示默认值
sel2_2.options[0].selected = true;
    //天数显示默认值
sel2_3.options[0].selected = true;
}
//增加或删除天数
    //如果是28天，则删除29、30、31天(即使他们不存在也不报错)
    if(days == 28){
        sel2_3.remove(31);
        sel2_3.remove(30);
        sel2_3.remove(29);
    }
    //如果是29天
    if(days == 29){
        sel2_3.remove(31);
        sel2_3.remove(30);
        //如果第29天不存在，则添加第29天
        if(!sel2_3.options[29]){
            sel2_3.add(new Option('29','29'),undefined)
        }
    }
    //如果是30天
    if(days == 30){
        sel2_3.remove(31);
        //如果第29天不存在，则添加第29天
        if(!sel2_3.options[29]){
            sel2_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel2_3.options[30]){
            sel2_3.add(new Option('30','30'),undefined)
        }
    }
    //如果是31天
    if(days == 31){
        //如果第29天不存在，则添加第29天
        if(!sel2_3.options[29]){
            sel2_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel2_3.options[30]){
            sel2_3.add(new Option('30','30'),undefined)
        }
        //如果第31天不存在，则添加第31天
        if(!sel2_3.options[31]){
            sel2_3.add(new Option('31','31'),undefined)
        }
    }
	
</script>

	<br>
	<p style="clear: both;float: left;margin-left: 15%">
	所患疾病
	<select class="xuanze" id="first_1" onChange="change1()">  
    	<option selected="selected">请选择疾病纲目</option>
    	<option>传染性病证</option>
    	<option>内科病证</option>
    	<option>妇科病证</option>
    	<option>小儿科病证</option>
    	<option>外科病证</option>
    	<option>皮肤科病证</option>
    	<option>伤科病证</option>
    	<option>五官科病证</option>
    </select> 
  
	<select class="xuanze" id="second_1" onChange="change1()">
  		<option selected="selected">请选择疾病科目</option>
  		<option>伤寒</option>     		 
	</select>
	</p>
<!--疾病二级联动-->
<script>  
function change1()  
{  
   var x = document.getElementById("first_1");  
   var y = document.getElementById("second_1");
   y.options.length = 0; // 清除second下拉框的所有内容
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
		y.options.add(new Option("噎膈",""));
		y.options.add(new Option("呃逆",""));
		y.options.add(new Option("胃痛",""));
		y.options.add(new Option("泄泻",""));
		y.options.add(new Option("便秘",""));
		y.options.add(new Option("黄疸",""));
		y.options.add(new Option("狐惑",""));
		y.options.add(new Option("贝赫切特氏综合征",""));
		y.options.add(new Option("水肿",""));
		y.options.add(new Option("消渴",""));
		y.options.add(new Option("积聚",""));
		y.options.add(new Option("血证",""));
		y.options.add(new Option("紫斑",""));
		y.options.add(new Option("痹证",""));
		y.options.add(new Option("痿证",""));
		y.options.add(new Option("肠道寄生虫病",""));
		y.options.add(new Option("鼓胀",""));
		y.options.add(new Option("肝硬化",""));
		y.options.add(new Option("癃闭",""));
		y.options.add(new Option("关格",""));
		y.options.add(new Option("尿毒症",""));
		y.options.add(new Option("头痛",""));
		y.options.add(new Option("胸痛",""));
		y.options.add(new Option("胁痛",""));
		y.options.add(new Option("真心痛",""));
		y.options.add(new Option("腹痛",""));
		y.options.add(new Option("腰痛",""));
		y.options.add(new Option("遗尿",""));
		y.options.add(new Option("遗精",""));
		y.options.add(new Option("阳痿",""));
		y.options.add(new Option("早泄",""));
		y.options.add(new Option("男性不育",""));
		y.options.add(new Option("眩晕",""));
		y.options.add(new Option("肥胖病",""));
		y.options.add(new Option("面瘫",""));
		y.options.add(new Option("胸痹",""));
		y.options.add(new Option("心悸",""));
		y.options.add(new Option("健忘",""));
		y.options.add(new Option("失眠",""));
		y.options.add(new Option("多寐",""));
		y.options.add(new Option("癫证",""));
		y.options.add(new Option("狂",""));
		y.options.add(new Option("痫",""));
		y.options.add(new Option("中风",""));
		y.options.add(new Option("郁证",""));
		y.options.add(new Option("震颤",""));
		y.options.add(new Option("内伤发热",""));
		y.options.add(new Option("痞满",""));
		y.options.add(new Option("厌食",""));
		y.options.add(new Option("中暑",""));
		y.options.add(new Option("汗证",""));
		y.options.add(new Option("冠心病",""));
		y.options.add(new Option("心律失常",""));
		y.options.add(new Option("高血压",""));
		y.options.add(new Option("高脂血症",""));
		y.options.add(new Option("糖尿病",""));
		y.options.add(new Option("病毒性肝炎",""));
		y.options.add(new Option("胆囊炎",""));
		y.options.add(new Option("胆结石",""));
		y.options.add(new Option("泌尿系结石",""));
		y.options.add(new Option("慢性肾炎",""));
		y.options.add(new Option("胃下垂",""));
		y.options.add(new Option("老年性痴呆症",""));
		y.options.add(new Option("鼻咽癌",""));
		y.options.add(new Option("甲状腺癌",""));
		y.options.add(new Option("肺癌",""));
		y.options.add(new Option("食管癌",""));
		y.options.add(new Option("胃癌",""));
		y.options.add(new Option("大肠癌",""));
		y.options.add(new Option("肝癌",""));
		y.options.add(new Option("白血病",""));
		y.options.add(new Option("硬皮病",""));
		y.options.add(new Option("红斑狼疮",""));
    }
    if(x.selectedIndex == 3)
   {
		y.options.add(new Option("月经不调",""));
		y.options.add(new Option("痛经",""));
		y.options.add(new Option("经闭",""));
		y.options.add(new Option("倒经",""));
		y.options.add(new Option("崩漏",""));
		y.options.add(new Option("功能性子宫出血",""));
		y.options.add(new Option("带下",""));
		y.options.add(new Option("恶阻",""));
		y.options.add(new Option("妊娠呕吐",""));
		y.options.add(new Option("胎动不安",""));
		y.options.add(new Option("胎漏",""));
		y.options.add(new Option("滑胎",""));
		y.options.add(new Option("习惯性流产",""));
		y.options.add(new Option("产后腹痛",""));
		y.options.add(new Option("宫外孕",""));
		y.options.add(new Option("子宫肌瘤",""));
		y.options.add(new Option("子宫脱垂",""));
		y.options.add(new Option("子宫颈炎",""));
		y.options.add(new Option("宫颈糜烂",""));
		y.options.add(new Option("子宫颈癌",""));
		y.options.add(new Option("盆腔炎",""));
		y.options.add(new Option("阴痒",""));
		y.options.add(new Option("阴道炎",""));
		y.options.add(new Option("女子不孕",""));
		y.options.add(new Option("乳腺癌",""));
		y.options.add(new Option("更年期综合征",""));
    }
	if(x.selectedIndex == 4)
    {
		y.options.add(new Option("小儿感冒",""));
		y.options.add(new Option("小儿肺炎",""));
		y.options.add(new Option("惊风",""));
		y.options.add(new Option("百日咳",""));
		y.options.add(new Option("水痘",""));
		y.options.add(new Option("麻疹",""));
		y.options.add(new Option("风疹",""));
		y.options.add(new Option("消化不良",""));
		y.options.add(new Option("盘肠气痛",""));
	    y.options.add(new Option("幼儿腹痛",""));
		y.options.add(new Option("小儿肌性斜颈",""));
		y.options.add(new Option("小儿脑性瘫痪",""));
		y.options.add(new Option("夜啼",""));
		y.options.add(new Option("小儿流涎",""));
		y.options.add(new Option("佝偻病",""));
    }
	if(x.selectedIndex == 5)
    {
		y.options.add(new Option("痈",""));
		y.options.add(new Option("疽",""));
		y.options.add(new Option("疖",""));
		y.options.add(new Option("疔疮",""));
		y.options.add(new Option("瘰疬",""));
		y.options.add(new Option("淋巴结结核",""));
		y.options.add(new Option("瘿",""));
		y.options.add(new Option("地方性甲状腺肿",""));
		y.options.add(new Option("甲状腺肿瘤",""));
		y.options.add(new Option("乳痈",""));
		y.options.add(new Option("乳腺炎",""));
		y.options.add(new Option("乳癖",""));
		y.options.add(new Option("乳腺增生",""));
		y.options.add(new Option("脱疽",""));
		y.options.add(new Option("血栓闭塞性脉管炎",""));
		y.options.add(new Option("臁疮",""));
		y.options.add(new Option("痔",""));
		y.options.add(new Option("疝",""));
		y.options.add(new Option("肛裂",""));
		y.options.add(new Option("肛门瘙痒症",""));
		y.options.add(new Option("肛门瘙痒症",""));
		y.options.add(new Option("肛门直肠周围脓肿",""));
		y.options.add(new Option("肠痈",""));
		y.options.add(new Option("急性阑尾炎",""));
		y.options.add(new Option("肠梗阻",""));
		y.options.add(new Option("胆道系统感染和胆石病","")); 
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
	<br><br>
	<p style="clear: both;float: left;margin-left: 15%">
	持续时间：
	<select class="xuanze" name="sel3_1" id="sel3_1">
    <option value="year">- - - -</option>
    </select> 年
    <select class="xuanze" name="sel3_2" id="sel3_2">
    <option value="month">- -</option>
    </select> 月
    <select class="xuanze" name="sel3_3" id="sel3_3">
    <option value="day">- -</option>
    </select> 日
<!--日期三级联动-->
<script type="text/javascript">
//生成1900年-2100年
for(var i = 1970; i<=2017;i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel3_1.appendChild(option);
}
//生成1月-12月
for(var i = 1; i <=12; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel3_2.appendChild(option);    
}
//生成1日—31日
for(var i = 1; i <=31; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel3_3.appendChild(option);    
}
if(month == 2){
    //如果是闰年
    if((year % 4 === 0 && year % 100 !== 0)  || year % 400 === 0){
        days = 29;
    //如果是平年
    }else{
        days = 28;
    }
//如果是第4、6、9、11月
}else if(month == 4 || month == 6 ||month == 9 ||month == 11){
    days = 30;
}else{
    days = 31;
}
//年份点击
sel3_1.onclick = function(){
    //月份显示默认值
sel3_2.options[0].selected = true;
    //天数显示默认值
sel3_3.options[0].selected = true;
}
//增加或删除天数
    //如果是28天，则删除29、30、31天(即使他们不存在也不报错)
    if(days == 28){
        sel3_3.remove(31);
        sel3_3.remove(30);
        sel3_3.remove(29);
    }
    //如果是29天
    if(days == 29){
        sel3_3.remove(31);
        sel3_3.remove(30);
        //如果第29天不存在，则添加第29天
        if(!sel3_3.options[29]){
            sel3_3.add(new Option('29','29'),undefined)
        }
    }
    //如果是30天
    if(days == 30){
        sel3_3.remove(31);
        //如果第29天不存在，则添加第29天
        if(!sel3_3.options[29]){
            sel3_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel3_3.options[30]){
            sel3_3.add(new Option('30','30'),undefined)
        }
    }
    //如果是31天
    if(days == 31){
        //如果第29天不存在，则添加第29天
        if(!sel3_3.options[29]){
            sel3_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel3_3.options[30]){
            sel3_3.add(new Option('30','30'),undefined)
        }
        //如果第31天不存在，则添加第31天
        if(!sel3_3.options[31]){
            sel3_3.add(new Option('31','31'),undefined)
        }
    }
	
</script>

	&nbsp&nbsp至&nbsp&nbsp
	<select class="xuanze" name="sel4_1" id="sel4_1">
    <option value="year">- - - -</option>
    </select> 年
    <select class="xuanze" name="sel4_2" id="sel4_2">
    <option value="month">- -</option>
    </select> 月
    <select class="xuanze" name="sel4_3" id="sel4_3">
    <option value="day">- -</option>
    </select> 日
    <br><br><br>
    </p>
<!--日期三级联动-->
<script type="text/javascript">
//生成1900年-2100年
for(var i = 1970; i<=2017;i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel4_1.appendChild(option);
}
//生成1月-12月
for(var i = 1; i <=12; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel4_2.appendChild(option);    
}
//生成1日—31日
for(var i = 1; i <=31; i++){
    var option = document.createElement('option');
    option.setAttribute('value',i);
    option.innerHTML = i;
    sel4_3.appendChild(option);    
}
if(month == 2){
    //如果是闰年
    if((year % 4 === 0 && year % 100 !== 0)  || year % 400 === 0){
        days = 29;
    //如果是平年
    }else{
        days = 28;
    }
//如果是第4、6、9、11月
}else if(month == 4 || month == 6 ||month == 9 ||month == 11){
    days = 30;
}else{
    days = 31;
}
//年份点击
sel4_1.onclick = function(){
    //月份显示默认值
sel4_2.options[0].selected = true;
    //天数显示默认值
sel4_3.options[0].selected = true;
}
//增加或删除天数
    //如果是28天，则删除29、30、31天(即使他们不存在也不报错)
    if(days == 28){
        sel4_3.remove(31);
        sel4_3.remove(30);
        sel4_3.remove(29);
    }
    //如果是29天
    if(days == 29){
        sel4_3.remove(31);
        sel4_3.remove(30);
        //如果第29天不存在，则添加第29天
        if(!sel4_3.options[29]){
            sel4_3.add(new Option('29','29'),undefined)
        }
    }
    //如果是30天
    if(days == 30){
        sel4_3.remove(31);
        //如果第29天不存在，则添加第29天
        if(!sel4_3.options[29]){
            sel4_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel4_3.options[30]){
            sel4_3.add(new Option('30','30'),undefined)
        }
    }
    //如果是31天
    if(days == 31){
        //如果第29天不存在，则添加第29天
        if(!sel4_3.options[29]){
            sel4_3.add(new Option('29','29'),undefined)
        }
        //如果第30天不存在，则添加第30天
        if(!sel4_3.options[30]){
            sel4_3.add(new Option('30','30'),undefined)
        }
        //如果第31天不存在，则添加第31天
        if(!sel4_3.options[31]){
            sel4_3.add(new Option('31','31'),undefined)
        }
    }
	
</script>
  	<input type="submit" value="保存并提交" class="button" onClick="myCheck2()" style="clear: both; float: right;margin-right: 10%;margin-bottom: 50px">
  	<script type="text/javascript">
    function myCheck2()
       {
           form.submit();
       }
	</script>
  	</form>
  	<div style="clear: both;height: 10px">
  	</div>
</div>
</body>
</html>
