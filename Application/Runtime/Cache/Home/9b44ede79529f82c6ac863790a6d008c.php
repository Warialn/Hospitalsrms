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
					<p class="pull-right" ><?php if($_SESSION['user_id']){ echo "<a class='footer-set-css' href='http://localhost/test/Hospitalsrms/index.php/Home/Login/index.html' title='切换账号'>".$_SESSION['user_name']."</a>"." , 欢迎您"."&nbsp;&nbsp;<a class='footer-set-css'href='http://localhost/test/Hospitalsrms/index.php/Home/Login/logout'>退出</a>"; }else{ echo "<a class='footer-set-css' href='http://localhost/test/Hospitalsrms/index.php/Home/Login/index.html'>登录</a>   &nbsp;"; echo "<a class='footer-set-css' href='http://localhost/test/Hospitalsrms/index.php/Home/Login/register.html'>注册</a>"; }?></p>
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
		</br>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-3 column">
			<div class="col-md-12 column">
				<div class="panel-group" id="panel-851664">
					<div class="panel panel-default">
						<div class="panel-heading">
							 <a class="panel-title" data-toggle="collapse" data-parent="#panel-851664" href="#panel-element-673135">统计导航</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 column">
				<div class="panel-group" id="panel-851664">
					<div class="panel panel-default">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="<?php echo U('Kytj/index');?>">论文统计</a></li>
							<li class="active"><a href="<?php echo U('Kytj/addAchievement');?>">科研成果</a></li>
							<li><a href="<?php echo U('Kytj/addPropty');?>">知识产权</a></li>
							<li><a href="<?php echo U('Kytj/addEquipment');?>">仪器设备</a></li>
							
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
							<li><a href="<?php echo U('Kytj/scanTheses');?>">论文统计</a></li>
							<li><a href="<?php echo U('Kytj/scanAchievement');?>">科研成果</a></li>
							<li><a href="<?php echo U('Kytj/scanPropty');?>">知识产权</a></li>
							<li><a href="<?php echo U('Kytj/scanEquipment');?>">仪器设备</a></li>
							<li><a href="<?php echo U('Kytj/fileDownload');?>">文件下载</a></li>
							<li><a href="<?php echo U('Kytj/logList');?>">日志信息</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8" style="background-color:#f8f8f8;border-radius:6px;border:1px solid #e8e8e8;margin-right:30px;">
			<form role="form" style="padding-top:15px;" action="http://localhost/test/Hospitalsrms/index.php/Home/Kytj/addAchievement" method="post" name="myform" onsubmit="return CheckPost();">
				<div class="row-fluid col-md-12" style="padding-top:5px;">
					<div class="form-group col-md-3" style="padding-top:0px;padding-left:20px; padding-right:0;">
					   <select class="form-control input-sm" name="year">
					   	<?php foreach($year as $key => $val): ?>
                            <option value="<?= $val ?>"><?= $val ?></option>
                        <?php endforeach; ?>						
					   </select>
				   </div>
				   <div class="span12 col-md-9" style="padding-left:3px;">
					   <h3 class="text-left fontTitle">
							年&nbsp;-&nbsp;科研成果统计
					   </h3>
				   </div>
				</div>
			    
			    <div class="row" style="padding:30px 0 20px;"></div><!-- 上下块间距 -->
			
				<table width="795" height="287" class="table">
				  <tr>
				    <td width="196">成果名称（<span class="fontStar">※</span>）</td>
				    <td width="563"><input type="text" class="form-control input-sm" id="name1" placeholder="" name="name"></td>
				  </tr>
				  <tr>
				    <td>奖励名称（<span class="fontStar">※</span>）</td>
				    <td><input type="text" class="form-control input-sm" id="name2" placeholder="" name="awardname"></td>
				  </tr>
				  <tr>
				    <td>所属科室（<span class="fontStar">※</span>）</td>
				    <td><input type="text" class="form-control input-sm" id="name3" placeholder="" name="department"></td>
				  </tr>
				  <tr>
				    <td>  获奖完成人（<span class="fontStar">※</span>） </td>
				    <td> <input type="text" class="form-control input-sm" id="name4" placeholder="" name="author"></td>
				  </tr>
				  <tr>
				    <td> 获奖等级 </td>
				    <td><select  class="form-control input-sm" name="grade">
						  <option value=""></option>
						  <option value="一等奖">一等奖</option>
						  <option value="二等奖">二等奖</option>
						  <option value="三等奖">三等奖</option>
						  <option value="优秀奖">优秀奖</option>
						</select>
					</td>
				  </tr>
				  <tr>
				    <td>成果SCI数量</td>
				    <td><input type="text" class="form-control input-sm" id="num" name="scinumber"></td>
				  </tr>
				  <tr>
				    <td> 成果专利数量 </td>
				    <td><input type="text" class="form-control input-sm" id="num" name="patentnumer"></td>
				  </tr>
				  <tr>
				    <td> 任务来源 </td>
				    <td><input type="text" class="form-control input-sm" id="num" name="sorce"></td>
				  </tr>
				   <tr>
				    <td>第一完成人类型（<span class="fontStar">※</span>）</td>
				    <td> <label class="checkbox-inline">
					    <input type="radio" name="authortype" id="radioInline1" value="本院人员" checked>本院人员
					  </label>
					  <label class="checkbox-inline">
					    <input type="radio" name="authortype" id="radioInline2" value="研究生">研究生
					  </label>
					  <label class="checkbox-inline">
					    <input type="radio" name="authortype" id="radioInline3" value="外院人员">外院人员
					  </label>
					  <label class="checkbox-inline">
					    <input type="radio" name="authortype" id="radioInline4" value="本院未绑定人员">本院未绑定人员
					  </label>
					  <label class="checkbox-inline">
					    <input type="radio" name="authortype" id="radioInline4" value="其他">其他
					  </label></td>
				  <tr>
				    <td> 备注 </td>
				    <td><textarea class="form-control" rows="6" name="remarks"></textarea></td>
				  </tr>
				  <tr>
				    <td colspan="2"><br/>
				    	<span class="col-lg-6">
						  <button type="submit"  class="btn btn-primary btn-sm btn-block">提交</button>
						</span>
						<span class="col-lg-6">
						  <button type="reset"  name="reset"  class="btn btn-primary btn-sm btn-block">重置</button>
						</span>
					</td>
				  </tr>
				</table>
			</form>
		</div>		
	</div>
</div>
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
$('#datetimepicker').datetimepicker({value:'2012-03-05',step:10});
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