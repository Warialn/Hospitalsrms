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
<style>
#modal-overlay {
		     /*visibility: hidden; */   
		     display:none;
		     position: absolute;   /* 使用绝对定位或固定定位  */
		     left: 0px;    
		     top: 0px;
		     width:100%;
		     height:100%;
		    /* text-align:center;*/
		     z-index: 1000;
		    /* background-color: #333; 
		     opacity: 0.5;   /* 背景半透明 */
		}
		/* 模态框样式 */
.modal-data{
			 width:750px;
			 height:300px;
		     margin: 100px auto;
		     background-color: #fff;
		     border:1px solid #000;
		     padding:15px;
		     /*text-align:center;*/
		}

</style>
<div class="container">
	<div id="modal-overlay" class="editSubject">
        <div class="modal-data">
            <ul class="breadcrumb">
                <li>编辑课题</li> 
                <a class="pull-right closePop" style="cursor:pointer;">关闭</a>
            </ul>  
	        <div class="col-sm-12">
	            <div class="row">
	                <div class="col-xs-win">             
	                    <form id="subject_edit_form" method="post" class="form-horizontal" role="form">

	                        <div class="form-group">
	                            <label class="col-sm-3 control-label no-padding-right"> 课题名称: </label>
	                            <div class="col-sm-6">
	                                <input type="text" name="subject_name" id="subject_name" class="form-control"/>
	                            </div>
	                        </div>
	                         <div class="form-group">
	                            <label class="col-sm-3 control-label no-padding-right"> 项目成员: </label>
	                            <div class="col-sm-6">
	                                <input type="text" name="member" id="member" class="form-control"/>
	                            </div>
	                        </div>
	                        <div class="space-4"></div>
	                         <div class="form-group">
	                            <label class="col-sm-3 control-label no-padding-right"> 经费预算:</label>
	                            <div class="col-sm-6">
	                                <input type="text" name="funds" id="funds" class="form-control"/>
	                            </div>
	                        </div>
	                        <input type="hidden" id='edit_id' name="id"  />
	                         <div class="clearfix form-actions submitcenter">

	                                 <button class="btn btn-default " style="width:346px;background-color:#337ab7;color:white" type="submit" >
	                                    <i class="icon-ok bigger-110"></i>
	                                    提交
	                                </button>

	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
        </div>
    </div>
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
									<li  class="active"><a href="<?php echo U('Xmsb/scanSubject');?>">课题进展</a></li>
									<li><a href="<?php echo U('Xmsb/scanDepartment');?>">科研平台占用情况</a></li>
									<li><a href="<?php echo U('Xmsb/scanColler');?>">领用情况</a></li>
									<li><a href="<?php echo U('Xmsb/scanPurchase');?>">采购申请进展</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 column" style="background-color:#f8f8f8;border-radius:6px;border:1px solid #e8e8e8;">
					<form name="form2" method="post" action="">
						<div class="form-group " style="margin-top:20px;">
							<a href="javascript:checkaction(1)"   class="btn btn-default" id="">批量删除</a><a href="javascript:checkaction(0)"   class="btn btn-default pull-right" style="color:white;background-color:#337ab7;" id="">搜索</a>
							<input class="form-control col-sm-3 pull-right " type="text" id="" name=""  placeholder="年份" class="text" style="width:85px;"/>
							<input class="form-control col-sm-3 pull-right" name="starname" type="text" style="width:85px;"placeholder="课题名称" />
						 
						
						<!-- <a href="javascript:checkaction(1)"   class="btn btn-default" id="">导出</a>&nbsp;
						<a href="#" onclick="overlay()" class="btn btn-default">导入</a> -->
						</div>	
						<table class="table">
							<thead>
								<tr>
									<th>
										<input type="checkbox" id="selAll" onclick="selectAll();"/>  全选
									</th>
									<th style="text-align:center"> 
										课题名称
									</th>
									<th style="text-align:center">
										项目成员
									</th>
									<th style="text-align:center">
										经费预算
									</th>
									<th style="text-align:center">
										年份
									</th>
									<th style="text-align:center">
										审核状态
									</th>
									<th style="text-align:center">
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($thesesList)): $i = 0; $__LIST__ = $thesesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td>
									<input type="checkbox" name="checkAll[]" id="checkAll" onclick="setSelectAll();" value="<?php echo ($vo["id"]); ?>"/>
									</td>
									<td style="text-align:center">
										<?php echo ($vo["subject_name"]); ?>
									</td>
									<td style="text-align:center">
										<?php echo ($vo["member"]); ?>
									</td>
									<td style="text-align:center">
										<?php echo ($vo["funds"]); ?>
									</td>
									<td style="text-align:center">
										<?php echo ($vo["date"]); ?>
									</td>
									<td style="text-align:center;"><?php if($vo['status'] == 0): ?><span style="color:blue">等待审核</span>
										<?php elseif($vo['status'] == 1): ?>
											<span style="color:green">已通过审核</span>
										<?php else: ?><span style="color:red">已拒绝</span><?php endif; ?>
									</td>
									<td style="text-align:center">
										<?php if($vo['status'] == 1): ?>--  --
										<?php else: ?>
										<a href="#" style="color:green;" data1="<?php echo ($vo['id']); ?>" class="edit">编辑</a>
										<a href="#" style="color:red;" data2="<?php echo ($vo['id']); ?>" class="delete">删除</a><?php endif; ?>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
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
$(".closePop").css('cusor','pointer').click(function(){
	$(".editSubject").hide();
});
 $(".edit").click(function () {
 	   $(".editSubject").show();
        var row = $(this).parents('tr');
        var id = $(this).attr('data1');
        $('#edit_id').val(id);
        $("#subject_edit_form #subject_name").val(row.children('td:eq(1)').html());
        $("#subject_edit_form #member").val(row.children('td:eq(2)').html());
        $("#subject_edit_form #funds").val(row.children('td:eq(3)').html());
        

        //return false
    });
 $("#subject_edit_form").submit(function(e){
 		e.stopPropagation();
        e.preventDefault();
        var editSubject_data = $('#subject_edit_form').serialize();
        console.log(editSubject_data);
         $.ajax({
            url:'/test/Hospitalsrms/index.php/Home/Xmsb/subject_edit',
            type:'POST',
            dataType:'json',
            data:editSubject_data,
            success:function(data){
                if(data.status=='success'){
                    $(".editSubject").hide();
                  
                    alert("编辑成功");
                    window.location.reload();
                }else if(data.status=='error'){
                    alert("操作失败");
                }
            }
        });
       
    });
 $('.delete').click(function(){
 	var row = $(this).parents('tr');
    var id = $(this).attr('data2');
    $.ajax({
    	url:'/test/Hospitalsrms/index.php/Home/Xmsb/subject_delete',
    	type:'post',
    	data:{'id':id},
    	dataType:'json',
    	success:function(data){
    		if(data.status=='success'){
                  
                    alert("操作成功");
                    window.location.reload();
                }else if(data.status=='error'){
                    alert("操作失败");
                }
            }
    	});
 });

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