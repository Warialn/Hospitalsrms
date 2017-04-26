<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>综合性医院科研管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
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

			<div class="header_banner">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active  image-wid">
					<img src="/test/Hospitalsrms/Public//bootstrap/images/1a.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>科研统计</h3>
						<p>If you want to do research statistics, please come here</p>
						<button type="button" onclick="javascript:checkaction(0);" class="btn btn-info sld">进入</button>
					</div>
					</div>
					<div class="item  image-wid">
					<img src="/test/Hospitalsrms/Public//bootstrap/images/1d.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>项目申报</h3>
						<p>If you want to declare the project, come here</p>
						<button type="button" onclick="javascript:checkaction(1);" class="btn btn-info sld">进入</button>
					</div>
					</div>
					<div class="item  image-wid">
					<img src="/test/Hospitalsrms/Public//bootstrap/images/1g.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>费用报销</h3>
						<p>Reimbursement is best to come here</p>
						<button type="button" onclick="javascript:checkaction(2);" class="btn btn-info sld">进入</button>
					</div>
					</div>
					<div class="item  image-wid">
					<img src="/test/Hospitalsrms/Public//bootstrap/images/1l.jpg" alt="..." class="img-responsive">
					<div class="carousel-caption">
						<h3>学术活动</h3>
						<p>Want to participate in academic activities, come here to have a look</p>
						<button type="button" onclick="javascript:checkaction(3);" class="btn btn-info sld">进入</button>
					</div>
					</div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
		</div>
		<div class="style-label">
			<div class="container">
				<ul class="box-shadow effect2">
					
					<li class="col-md-3">
						<a href='javascript:checkscan(0);' >
						<span class="glyphicon glyphicon-leaf flt" aria-hidden="true"></span></a>
						<div class="label-text">
						<h3>科研统计</h3>
						<p>医师的科研成果都发布在这里，让其他医师学习。</p>
						</div>
					</li>
					
					<li class="col-md-3">
						<a href='javascript:checkscan(1);' >
						<span class="glyphicon glyphicon-eye-open flt" aria-hidden="true"></span></a>
						<div class="label-text">
						<h3>项目申报</h3>
						<p>医师申报项目进程，在这里查看。</p>
						</div>
					</li></a>
					

					<li class="col-md-3"><a href='javascript:checkscan(2);' >
						<span class="glyphicon glyphicon-pencil flt" aria-hidden="true"></span></a>
						<div class="label-text">
						<h3>费用报销</h3>
						<p>医师的各种费用报销情况请来这里。</p>
						</div>
					</li>
					
					<li class="col-md-3"><a href='javascript:checkscan(3);' >
						<span class="glyphicon glyphicon-cutlery flt" aria-hidden="true"></span></a>
						<div class="label-text">
						<h3>学术活动</h3>
						<p>近期的学术活动会展示在这里。</p>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="service_features" id="features">
				<div class="container">
					<div class="col-md-4 ser-fet">
						<h3>业内新闻</h3>
						<span class="line"></span>
						<div class="services">
							<div class="menu-grid">
								<ul class="menu_drop">
									<?php if(is_array($new_res)): $i = 0; $__LIST__ = $new_res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="item1 plus">
											<a href="#" title="<?php echo ($vo['title']); ?>" class="active">
												<?php if(strlen($vo['title'])>39) { echo mb_substr($vo['title'], 0, 15,'utf-8')."...";}else{echo $vo['title'];}?>
												  <!-- <?php echo (mb_substr($vo["title"],0,15,'utf-8')); ?>...  -->
												<span class="caret"></span>
											</a>
											<ul>
												<li class="subitem1">
													<p> <?php echo ($vo["content"]); ?></p>
												</li>
											</ul>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
									
								</ul>
								<!-- script for tabs -->
								<script type="text/javascript">
									$(function() {
										var menu_ul = $('.menu_drop > li > ul'),
											menu_a  = $('.menu_drop > li > a');
												menu_ul.hide();
													menu_a.click(function(e) {
													e.preventDefault();
													if(!$(this).hasClass('active')) {
													menu_a.removeClass('active');
													menu_ul.filter(':visible').slideUp('normal');
													$(this).addClass('active').next().stop(true,true).slideDown('normal');
													} else {
													$(this).removeClass('active');
												$(this).next().stop(true,true).slideUp('normal');
											}
										});
									});
								</script>
							<!-- script for tabs -->
						</div>
						</div>
					</div>
                  
					<div class="col-md-8 ser-fet">
						<h3>我们的目标</h3>
						
						<span class="line"></span>
						<div class="features">
							<div class="col-md-6 fet-pad">
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-user aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>更好的为患者服务</h4>
										<p>尽我们所能让患者满意。</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-screenshot aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>先进的设备</h4>
										<p>工欲善其事必先利其器。</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-ok aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>技术精湛的手术</h4>
										<p>熟能生巧。</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6 fet-pad">
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-piggy-bank aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>健康保险</h4>
										<p>会具备更完善的健康保险流程。</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-education aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>被认可的医生</h4>
										<p>白衣天使。</p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="div-margin">
									<div class="col-md-3 fet-pad wid">
										<span class="glyphicon glyphicon-heart aim-icn" aria-hidden="true"></span>
									</div>
									<div class="col-md-9 fet-pad wid2">
										<h4>温暖的服务</h4>
										<p>用爱温暖患者。</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<div class="acheivments" id="acheive">
			<div class="container top">
					<h3>我们的成果</h3>
					<!--script-->
					<link rel="stylesheet" href="css/swipebox.css">
					
					<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
					</script>
					<!--script-->
					<div class="gallery-grids">
						<ul>
							<li class="col-md-4 gal-alt">
								<!-- <a href="/test/Hospitalsrms/Public//bootstrap/images/1i.jpg" class="swipebox"> -->
								<img src="/test/Hospitalsrms/Public//bootstrap/images/1i.jpg" alt="/"/>
									<span class="hide-box">
										<h4>Neutron collider Microscope</h4>
										<p>Great transparency Rate</p>
									</span>
							</li><!-- </a> -->
							<li class="col-md-4 gal-alt">
								<!-- <a href="/test/Hospitalsrms/Public//bootstrap/images/1p.jpg" class="swipebox"> -->
								<img src="/test/Hospitalsrms/Public//bootstrap/images/1p.jpg" alt="/"/>
									<span class="hide-box">
										<h4>German made Ak-2000 Ct-Scan</h4>
										<p>Lorem is a dummy Text</p>
									</span>
							</li><!-- </a> -->
							<li class="col-md-4 gal-alt">
								<!-- <a href="/test/Hospitalsrms/Public//bootstrap/images/1n.jpg" class="swipebox"> -->
								<img src="/test/Hospitalsrms/Public//bootstrap/images/1n.jpg" alt="/" />
								<span class="hide-box">
										<h4>Symbiosis Laser T-300</h4>
										<p>Lorem is a dummy Text</p>
								</span>
							</li><!-- </a> -->
							<li class="col-md-4 gal-alt">
								<!-- <a href="/test/Hospitalsrms/Public//bootstrap/images/1k.jpg" class="swipebox"> -->
								<img src="/test/Hospitalsrms/Public//bootstrap/images/1k.jpg" alt="/" />
								<span class="hide-box">
										<h4>Angeo Blast</h4>
										<p>Lorem is a dummy Text</p>
								</span>	
							</li><!-- </a> -->
							<li class="col-md-4 gal-alt">
								<!-- <a href="/test/Hospitalsrms/Public//bootstrap/images/1o.jpg" class="swipebox"> -->
								<img src="/test/Hospitalsrms/Public//bootstrap/images/1o.jpg" alt="/" />
								<span class="hide-box">
										<h4>Spacious Operatio Theater</h4>
										<p>Lorem is a dummy Text</p>
								</span>
							</li><!-- </a> -->
							<li class="col-md-4 gal-alt">
								<!-- <a href="/test/Hospitalsrms/Public//bootstrap/images/1f.jpg" class="swipebox"> -->
								<img src="/test/Hospitalsrms/Public//bootstrap/images/1f.jpg" alt="/"/>
								<span class="hide-box">
										<h4>Latest Ventilators</h4>
										<p>Lorem is a dummy Text</p>
								</span>
							</li><!-- </a> -->
							<div class="clearfix"></div>
						</ul>
					</div>
			</div>
		</div>
		<script>
		function checkaction(v){
			var a = v;
			if(a == 0){
				document.location.href="/test/Hospitalsrms/index.php/Home/Kytj/index";
			}else if(a == 1){
				document.location.href="/test/Hospitalsrms/index.php/Home/Xmsb/index";
			}else if(a == 2){
				document.location.href="/test/Hospitalsrms/index.php/Home/Kyjf/index";
			}else if(a == 3){
				document.location.href="/test/Hospitalsrms/index.php/Home/Xshd/index";
			}
			
		}
		function checkscan(v){
			var a = v;
			if(a == 0){
				document.location.href="/test/Hospitalsrms/index.php/Home/Kytj/scanTheses";
			}else if(a == 1){
				document.location.href="/test/Hospitalsrms/index.php/Home/Xmsb/scanSubject";
			}else if(a == 2){
				document.location.href="/test/Hospitalsrms/index.php/Home/Kyjf/scanIndex";
			}else if(a == 3){
				document.location.href="/test/Hospitalsrms/index.php/Home/Xshd/scanMeet";
			}
			
		}
		</script>


<div class="row" style="margin-top:50px;background-color:#202020;color:#FFFFFF">
	<div class="row" style="padding-left:50px;margin:0;">
		<span><img src="/test/Hospitalsrms/Public//img/logo.png"></span>
		<h4 style="display:inline"><img src="/test/Hospitalsrms/Public//img/logo_font2.png"></h4>
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
    <li>Copyright 2016-2017 <a href="" target="_blank" style="color:#309bbe">MIIC</a> © All Rights Reserved</li>
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
$('#datetimepicker').datetimepicker({value:'2017/05/05 07:00',step:10});
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


//选中全选按钮，下面的checkbox全部选中
var selAll = document.getElementById("selAll");
function selectAll()
{
  var obj = document.getElementsByName("checkAll");
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
var obj=document.getElementsByName("checkAll");
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
</script>