<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="/test/Hospitalsrms/Public//bootstrap/css/bootstrap.min2.css" rel="stylesheet">
<link href="/test/Hospitalsrms/Public//bootstrap/css/admintop.css" rel="stylesheet">
<link href="/test/Hospitalsrms/Public//bootstrap/css/ace.min.css" rel="stylesheet">
<link href="/test/Hospitalsrms/Public/bootstrap/css/font-awesome.min.css" rel="stylesheet">
<script src="/test/Hospitalsrms/Public//bootstrap/js/jquery.min.js"></script>
<script src="/test/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<div class="contain">
	<div class="navbar navbar-duomi navbar-static-top" role="navigation">
		
	        <div class="container-fluid" style="background-color:#485b7f;">
	        	<a href="http://localhost/test/Hospitalsrms/index.php/Home/Index/index"><img class="pull-right" title="前台首页" style="width:26px;height:26px;margin-top:9px;margin-right:50px;"src="/test/Hospitalsrms/Public//bootstrap/images/qianshou.png"></a>
	            <div class="navbar-header">
	                <span class="navbar-brand"id="logo">后台管理系统</span>

	            </div>
	            <div class="container">
	            	<a href="<?php echo U('Login/logout');?>"><span title="退出" class="glyphicon glyphicon-off pull-right" style="color:white;font-size:18px;margin-top:15px;margin-left:20px;" aria-hidden="true"></span></a>
    				<a href="<?php echo U('Index/index');?>"><span title="首页" class="glyphicon glyphicon-home pull-right" style="color:white;font-size:18px;margin-top:13px;margin-left:20px;" aria-hidden="true"></span></a>
		            <p class="pull-right" style="font-size:15px;color:white;margin-top:14px;">欢迎您，<?php echo $_SESSION['user_name']?></p>
		        </div>
	        </div>
	    </div>
	        <div class="col-md-12 column">
	            <div class="row clearfix">
	                <div class="col-md-2 column" style="background-color:#fbfbfc;height:560px">
	                    <div class="col-md-12" >
	                        <ul class="nav nav-list">
	                            <li><a href="" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-journal"></i>
									<span class="menu-text"> 科研统计管理 </span>
									<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="dropdown-menu" id="Kytj">
		                            	<li>
											<a href="<?php echo U('Kytj/index');?>">
												<i class="icon-double-angle-right"></i>
											    论文统计管理
											</a>
										</li>
										<li>
											<a href="<?php echo U('Kytj/Achievement');?>">
												<i class="icon-double-angle-right"></i>
												科研成果管理
											</a>
										</li>
										<li>
											<a href="<?php echo U('Kytj/Propty');?>">
												<i class="icon-double-angle-right"></i>
												知识产权管理
											</a>
										</li>

										<li>
											<a href="<?php echo U('Kytj/Equipment');?>">
												<i class="icon-double-angle-right"></i>
											    仪器设备管理
											</a>
										</li>		                            
									</ul>
								</li>
		                        
		                        <li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-user0"></i>
										<span class="menu-text"> 项目申报管理 </span>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo U('Xmsb/index');?>">
												<i class="icon-double-angle-right"></i>
												课题申请
											</a>
										</li>
						
										<li>
											<a href="<?php echo U('Xmsb/department');?>">
												<i class="icon-double-angle-right"></i>
												科研平台申请
											</a>
										</li>
		                                <li>
											<a href="<?php echo U('Xmsb/coller');?>">
												<i class="icon-double-angle-right"></i>
												领用申请
											</a>

										</li>
										<li>
											<a href="<?php echo U('Xmsb/purchase');?>">
												<i class="icon-double-angle-right"></i>
												采购申请
											</a>
										</li>
									</ul>
								</li>
		                        <li>  
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
			                            <i class="icon-desktop"></i>  
			                            <span class="menu-text">科研经费管理 </span>    
		                            </a> 
		                            <ul class="dropdown-menu"> 
		                         
			                            <li>
											<a href="<?php echo U('Kyjf/index');?>">
												<i class="icon-double-angle-right"></i>
											    经费报销
											</a>

										</li>
			                            <li  <?php if(($action) == "spec"): ?>class="active"<?php endif; ?>>

											<a href="<?php echo U('Kyjf/apply');?>">
												<i class="icon-double-angle-right"></i>
											    经费申请
											</a>
										</li>
		                            </ul>                    
		                    	</li>
		                        
		                        
		                         <li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-alarm"></i>
										<span class="menu-text"> 学术活动管理 </span>

										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="dropdown-menu">
		                             	<li>

											<a href="<?php echo U('Xshd/index');?>">
												<i class="icon-double-angle-right"></i>
												会议管理
											</a>
				
										</li>
										<li>
											<a href="<?php echo U('Xshd/lecture');?>">
												<i class="icon-double-angle-right"></i>
											    讲座管理
											</a>
										</li>

										<li>
											<a href="<?php echo U('Xshd/composition');?>">
												<i class="icon-double-angle-right"></i>
											    学术著作管理
											</a>
										</li>
									</ul> 
								</li>            
		                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-net"></i>
										<span class="menu-text">系统管理</span>
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo U('Xtgl/news');?>">
												<i class="icon-double-angle-right"></i>
												新闻管理
											</a>
										</li>
										<li><a href="<?php echo U('Xtgl/password');?>">
												<i class="icon-double-angle-right"></i>
												密码管理
											</a>
										</li>
		                                
		                                <li>
											<a href="<?php echo U('Xtgl/user');?>">
												<i class="icon-double-angle-right"></i>
												用户管理
											</a>
										</li>
										<li>
											<a href="<?php echo U('Xtgl/usergroup');?>">
												<i class="icon-double-angle-right"></i>
												用户组管理
											</a>
										</li>								
									</ul>
								</li>
                      		</ul><!-- /.nav-list -->
	                   </div>
	                </div> 

	            



 
<div class="col-md-10 column" style="background-color:#eee;height:560px;">
    <div class="col-md-12 column" style="background-color:;color:red;font-size:30px;">
    欢迎访问后台管理系统！
    </div>
    <div class="col-md-12 column" style="margin-top:60px;">
        <div class="col-md-12 column" style="color:green;font-size:18px;">
            <div class="col-md-3 column" >
                当前登录IP：<?php echo ($ip); ?>  
            </div>
            <div class="col-md-4 column" >
                当前登录城市：<?php echo ($area); ?>
            </div>
            <div class="col-md-4 column" >
                当前时间：<?php echo ($time); ?>
            </div>
        </div>
        <div class="col-md-12 column" style="margin-top:150px;">
            
            <div class="col-md-4 column" style="margin-top:20px;">
                新闻数量：<?php echo ($news_num); ?>
            </div>
            
            <div class="col-md-4 column" style="margin-top:20px;">
                论文数量：<?php echo ($theses_num); ?>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                用户数量：<?php echo ($user_num); ?>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                科研成果数量：<?php echo ($achievement_num); ?>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                仪器设备数量：<?php echo ($equipment_num); ?>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                专利产权数量：<?php echo ($propty_num); ?>
            </div>
            
            <div class="col-md-4 column" style="margin-top:20px;">
                课题数量：<?php echo ($subject_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xmsb/index');?>">待处理(<?php echo ($subject_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                科研平台数量：<?php echo ($department_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xmsb/department');?>">待处理(<?php echo ($department_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                领用申请数量：<?php echo ($coller_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xmsb/coller');?>">待处理(<?php echo ($coller_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                采购申请数量：<?php echo ($purchase_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xmsb/purchase');?>">待处理(<?php echo ($purchase_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                会议数量：<?php echo ($meet_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xshd/index');?>">待处理(<?php echo ($meet_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                讲座数量：<?php echo ($lecture_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xshd/lecture');?>">待处理(<?php echo ($lecture_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                学术著作数量：<?php echo ($composition_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Xshd/compostion');?>">待处理(<?php echo ($composition_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                经费报销数量：<?php echo ($expense_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Kyjf/index');?>">待处理(<?php echo ($expense_do_num); ?>)</a>
            </div>
            <div class="col-md-4 column" style="margin-top:20px;">
                经费申请数量：<?php echo ($apply_num); ?>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo U('Kyjf/apply');?>">待处理(<?php echo ($apply_do_num); ?>)</a>
            </div>
        </div>
</div>
</div>


<div class="col-md-12 column" style="background-color:#fff;opacity:0.8;border-top:1px solid #4857bf;border-radius:0px;height:60px;text-align:center;">
  <div style="margin-top:15px;">
    <span >Copyright 2016-2017 MIIC © All Rights Reserved</span>
  </div>
</div>
</div>
<script>
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