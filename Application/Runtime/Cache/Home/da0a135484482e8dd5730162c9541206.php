<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>综合性医院科研管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!meta charset utf="8">
		<!--fonts
			<link href='http://fonts.useso.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.useso.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
		fonts-->
			<!--owlcss-->

		<link rel="stylesheet" type="text/css" href="/test/Hospitalsrms/Public//bootstrap/css/jquery.datetimepicker.css"/>
		<link href="/test/Hospitalsrms/Public//bootstrap/css/main.css" rel="stylesheet"><!-- 导航条引入效果文件 -->
    	<link href="/test/Hospitalsrms/Public//bootstrap/css/tj_common.css" rel="stylesheet">
		<link href="/test/Hospitalsrms/Public//bootstrap/css/owl.carousel.css" rel="stylesheet">
		<!--bootstrap-->
			<link href="/test/Hospitalsrms/Public//bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="/test/Hospitalsrms/Public//bootstrap/css/style.css" rel="stylesheet" type="text/css"/>
		<!--default-js-->
			<script src="/test/Hospitalsrms/Public//bootstrap/js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="/test/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>
		<!--script-->
			<script type="text/javascript" src="/test/Hospitalsrms/Public//bootstrap/js/move-top.js"></script>
			<script type="text/javascript" src="/test/Hospitalsrms/Public//bootstrap/js/easing.js"></script>
			<script src="/test/Hospitalsrms/Public//bootstrap/js/jquery.swipebox.min.js"></script>

		<!--script-->
	</head>
	<body>
		<div class="header" id="home">
			 <div class="header-top" style="background-color:#494949;height:35px;">
				<div class="container" >
					<p class="pull-right" ><?php if($_SESSION['user_id']){ echo "欢迎你，"."<a class='footer-set-css' href='http://localhost/test/Hospitalsrms/index.php/Home/Login/index.html' title='切换账号'>".$_SESSION['user_name']."</a>"."&nbsp;&nbsp;<a class='footer-set-css'href='http://localhost/test/Hospitalsrms/index.php/Home/Login/logout'>退出</a>"; }else{ echo "<a class='footer-set-css' href='http://localhost/test/Hospitalsrms/index.php/Home/Login/index.html'>登录</a>   &nbsp;"; echo "<a class='footer-set-css' href='http://localhost/test/Hospitalsrms/index.php/Home/Login/register.html'>注册</a>"; }?></p>
				</div>
			</div> 
			<div class="header_nav" id="home">
				<nav class=" navbar navbar-default chn-gd" >
					<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand logo-st" href="<?php echo U('Index/index');?>">综合性医院科研管理系统</a>
						</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right pull-right">
							<li>
							<a href="<?php echo U('Index/index');?>">
							<span class="glyphicon glyphicon-home icn_pos hm" aria-hidden="true"></span><br>
							<span style="font-size:15px;font-family:SIMYOU;">首页</span>
							</a>
							</li>
							<!---->
							<li>
							<a href="<?php echo U('Kytj/index');?>">
							<span class="glyphicon glyphicon-cog icn_pos" aria-hidden="true"></span><br>
							<span style="font-size:15px;font-family:SIMYOU;">科研统计</span>
							</a>
							</li>
							<!---->
							<li>
							<a href="<?php echo U('Xmsb/index');?>">
							<span class="glyphicon glyphicon-briefcase icn_pos" aria-hidden="true"></span><br>
							<span style="font-size:15px;font-family:SIMYOU;">项目申报</span>
							</a>
							</li>
							<!---->
							<li>
							<a href="<?php echo U('Kyjf/index');?>">
							<span class="glyphicon glyphicon-thumbs-up icn_pos hm2" aria-hidden="true"></span><br>
							<span style="font-size:15px;font-family:SIMYOU;">科研经费</span>
							</a>
							</li>
							<!---->
							<li>	
							<a href="<?php echo U('Xshd/index');?>">
							<span class="glyphicon glyphicon-envelope icn_pos" aria-hidden="true"></span><br>
							<span style="font-size:15px;font-family:SIMYOU;">学术活动</span>
							</a>
							</li>
							<!--script-->
							<script type="text/javascript">
							jQuery(document).ready(function($) {
							$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
							});
							});

							</script>
							<!--script-->
						</ul>
					</div><!-- /.navbar-collapse -->
					<div class="clearfix"></div>
					</div><!-- /.container-fluid -->
				</nav>
			</div>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<br/>
				<div class="col-md-3 column">
					<div class="col-md-12 column">
						<div class="panel-group" id="panel-851664">
							<div class="panel panel-default">
								<div class="panel-heading">
									 <a class="panel-title" data-toggle="collapse" data-parent="#panel-851664" href="#panel-element-673135">申报导航</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 column">
						<div class="panel-group" id="panel-851664">
							<div class="panel panel-default">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="<?php echo U('Xmsb/index');?>">课题申请</a></li>
									<li><a href="<?php echo U('Xmsb/department');?>">科研平台申请</a></li>
									<li><a href="<?php echo U('Xmsb/coller');?>">领用申请</a></li>
									<li><a href="<?php echo U('Xmsb/purchase');?>">采购申请</a></li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 column">
						<div class="panel-group" id="panel-851664">
							<div class="panel panel-default">
								<div class="panel-heading">
									 <a class="panel-title" data-toggle="collapse" data-parent="#panel-851664" href="#panel-element-673135">浏览导航</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-12 column">
						<div class="panel-group" id="panel-851664">
							<div class="panel panel-default">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="<?php echo U('Xmsb/scanSubject');?>">课题进展</a></li>
									<li class="active"><a href="<?php echo U('Xmsb/scanDepartment');?>">科研平台占用情况</a></li>
									<li><a href="<?php echo U('Xmsb/scanColler');?>">领用情况</a></li>
									<li><a href="<?php echo U('Xmsb/scanPurchase');?>">采购申请进展</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-12 column">
						<form name="form1" method="get">
							<div class="col-md-12" id="panel-564300" style="border-radius:6px;border:1px solid #e8e8e8;" >
								<div class="col-md-12" >						
									<label for="name" class="fontTitle">选择年份</label> 
									<select class="form-control input-sm" id="year1" name="ctime">
										<option value="<?php echo $_GET['ctime']?>"><?php if($_GET['ctime']==''){echo "所有年份";}else{echo $_GET['ctime'];}?></option>
										<?php foreach($year as $key => $val): ?>
					                        <option value="<?= $val ?>"><?= $val ?></option>
					                    <?php endforeach; ?>
									</select>							
								</div>
								<div class="col-lg-12" style="padding:10px 0 35px;">
									<span class="col-lg-6">
										<input type="submit" class="btn btn-primary btn-sm btn-block" onclick="look()"value="查看">
									</span>
									<span class="col-lg-6">
										<input type="submit" class="btn btn-primary btn-sm btn-block" onclick="out()" value="导出">
									</span>
								</div>							
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-8 column" style="border-radius:6px;border:1px solid #e8e8e8;">
					<form name="form2" method="post" action="">
						<table class="table">
							<thead>
								<tr>
									<th>
										<input type="checkbox" id="selAll" onclick="selectAll();"/>  全选
									</th>
									<th>
										平台名称
									</th>
									<th>
										申请人
									</th>
									<th>
										占用时间
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($thesesList)): $i = 0; $__LIST__ = $thesesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $col = ""; $col1 = "warning"; $col2 = "error"; $col3 = "sucess"; $col = $col1; if($col == $col1){ $col = $col2; }elseif($col == $col2){ $col = $col3; }else{ $col = $col1; } ?>
								<tr class="<?php echo $col;?>">
									<td>
									<input type="checkbox" name="checkAll[]" id="checkAll" onclick="setSelectAll();" value="<?php echo ($vo["id"]); ?>"/>
									</td>
									<td>
										<?php echo ($vo["plantformname"]); ?>
									</td>
									<td>
										<?php echo ($vo["user"]); ?>
									</td>
									<td>
										<?php echo ($vo["time"]); ?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							<tr>
							   <td>
							   	<img src="/test/Hospitalsrms/Public/img/arrow_ltr.gif"/>
							   </td>
							   <td>
							   	<a class="btn btn-default" href="javascript:checkaction(0)">删除</a> 							   	
							   	<a class="btn btn-default" href="javascript:checkaction(1)">修改</a>  
							   </td>
							   <td></td>
							   <td></td>
							</tr>
							</tbody>
						</table>
					</form>
					<div class="col-md-12 column">
						<?php echo ($page); ?>
					</div>
				</div>

				
			</div>
		</div>
	</div>
</div>
<script>
	function look(){
	    document.form1.action="/test/Hospitalsrms/index.php/Home/Xmsb/scanSubject";
	}
	function mod(){
		document.form2.action="modify_cost.php";
	}
	function checkaction(v){
	if(v==0){
		document.form2.method="get";
		document.form2.action="/test/Hospitalsrms/index.php/Home/Xmsb/deleteAll";
	}else if(v==1){
		document.form2.method="get";
		document.form2.action="/test/Hospitalsrms/index.php/Home/Xmsb/updatefile";
	}else{
		document.form2.method="get";
		document.form2.action="/test/Hospitalsrms/index.php/Home/Xmsb/export";
	}
	form2.submit();
}
//选中全选按钮，下面的checkbox全部选中
var selAll = document.getElementById("selAll");
function selectAll()
{
  var obj = document.getElementsByName("checkAll[]");
  if(document.getElementById("selAll").checked == false)
  {
  for(var i=0; i<obj.length; i++)
  {
    obj[i].checked=false;
  }
  }else
  {
  for(var i=0; i<obj.length; i++)
  {  
    obj[i].checked=true;
  }
  }
 
}

//当选中所有的时候，全选按钮会勾上
function setSelectAll()
{
var obj=document.getElementsByName("checkAll[]");
var count = obj.length;
var selectCount = 0;

for(var i = 0; i < count; i++)
{
if(obj[i].checked == true)
{
selectCount++;
}
}
if(count == selectCount)
{
document.all.selAll.checked = true;
}
else
{
document.all.selAll.checked = false;
}
}

//反选按钮
function inverse() {
var checkboxs=document.getElementsByName("checkAll");
for (var i=0;i<checkboxs.length;i++) {
  var e=checkboxs[i];
   setSelectAll();
}
}
	</script>

<div class="row" style="margin-top:50px;background-color:#202020;color:#FFFFFF">
	<div class="row" style="padding-left:50px;margin:0;">
		<span><img src="/test/Hospitalsrms/Public//img/logo.png"></span>
		<h4 style="display:inline"><img src="/test/Hospitalsrms/Public//img/logo-font.png"></h4>
	</div>
	<hr style="height:1px;background-color:#494949;border:none;margin-top:0">
	<div class="col-md-12">
		<footer class="footer">
			<div class="container">
				<div class="row footer-top">
			    	<div class="col-sm-6 col-lg-6">
			  			<p></p>
						<p>提示：如有疑问请与系统<a href="#myModal" data-toggle="modal" style="color:#309bbe">管理员</a>随时取得沟通，避免因统计不当给您带来的损失。<br/>技术开发：移动互联网创新中心。</p>
			  		</div>
					<div class="col-sm-6 col-lg-5 col-lg-offset-1">
						<div class="row about">
						  <div class="col-xs-3">
							<h4 style="color:#309bbe">关于</h4>
							<ul class="list-unstyled">
							  <li><a href="http://hie.hebeinu.edu.cn:7777/miic/index.php" class="footer-set-css">技术开发</a></li>
							  <li><a href="http://hie.hebeinu.edu.cn:7777/miic/index.php" class="footer-set-css">项目开发</a></li>
							</ul>
					  	  </div>
						  <div class="col-xs-3">
							<h4 style="color:#309bbe">联系方式</h4>
							<ul class="list-unstyled">
						      <li><a href="http://hie.hebeinu.edu.cn:7777/miic/index.php" title="移动互联网创新中心" target="_blank" class="footer-set-css">开发机构</a></li>
						      <li><a href="#myModal" data-toggle="modal" class="footer-set-css">管理员</a></li>
							</ul>
						  </div>
						  <div class="col-xs-3">
							<h4 style="color:#309bbe">友情链接</h4>
							<ul class="list-unstyled">
							  <li><a href="https://plus.google.com/114911793225988198469/about" target="_blank" class="footer-set-css">张家口-谷歌开发者社区</a></li>
							  <li><a href="http://hie.hebeinu.edu.cn:7777/miic/index.php" target="_blank" class="footer-set-css">移动互联网创新中心</a></li>
							</ul>
						  </div>
					  	  <div class="col-xs-3">
							<h4 style="color:#309bbe">技术支持</h4>
								<ul class="list-unstyled">
								  <li><a href="http://www.bootcss.com/" target="_blank" class="footer-set-css">Bootstrap中文网</a></li>
								  <li><a href="http://www.w3school.com.cn/" target="_blank" class="footer-set-css">W3school中文网</a></li>
								</ul>
						  </div>
					    </div>
					</div>
				</div>
	    	</div>
    	</footer>
	</div>
</div>

<div class="row footer-bottom" style="background-color:#111111;color:#FFFFFF; padding-top:20px;padding-bottom:15px;">
  <ul class="list-inline text-center">
    <li>Copyright 2015-2016 <a href="" target="_blank" style="color:#309bbe">MIIC</a> © All Rights Reserved</li>
  </ul>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content modal-sm">
			<div class="modal-header modal-sm">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title modal-sm" id="myModalLabel">如有问题请联系：
				</h4>
			</div>
			<div class="modal-body modal-sm">

				王诺楠<br/>
				  Q Q: 786867809
			</div>
			<div class="modal-footer modal-sm">
				<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">关闭
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
<script src="/test/Hospitalsrms/Public//bootstrap/js/jquery.js"></script>
<script src="/test/Hospitalsrms/Public//bootstrap/js/jquery.datetimepicker.js"></script>
<script>

$('#datetimepicker').datetimepicker();
$('#datetimepicker').datetimepicker({value:date("Y-m-d H:i:s"),step:10});
var logic = function( currentDateTime ){
	if( currentDateTime.getDay()==6 ){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
</script>