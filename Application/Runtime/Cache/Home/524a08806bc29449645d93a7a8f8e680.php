<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>注册</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="/test/Hospitalsrms/Public//bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray" style="background-image:url('/test/Hospitalsrms/Public//img/232.jpg');background-position:center; background-repeat:no-repeat">
	<div class="container">
		<div class="col-md-4" style="width:330px;height:600px;border:0px solid orange;">

			
		</div>
		<div class="col-md-5" >
			<div class="col-md-12" style="height:210px;">

			<div style="width:410px;border:0px solid yellow;">
				<div style="color:white;width:100px;text-align:center;font-size:32px;border:0px solid red;height:70px;"></div>
				<div style="color:white;text-align:center;font-size:30px;border:0px solid #fff;height:200px;">
					<div>综合性<br/>医院科研管理系统<br/><hr></div>
				</div>
			</div></div>
				<div class="col-md-12" style="background-color:#fff;opacity:0.8;border:1px solid #e8e8e8;border-radius:6px;">
					<h1   style="font-size:20px;opacity:1.0;text-align:center;">注册</h1>			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="http://localhost/test/Hospitalsrms/index.php/Home/Login/register" method="post">
				<div class="form-inner">
					<div class="form-group">             
			        </div>			
			        <div class="form-group">
			          <div class="col-md-12">		          	
			            <input type="text" class="form-control" name="username" placeholder="姓名">		            		            		            
			          </div>
            
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="password" class="form-control" name="password" placeholder="密码">
			          </div>
			        </div>
			         <div class="form-group">
			          <div class="col-md-6">
			            <select name="usergroup_id" class="form-control">
			            	<option value="1">管理员</option>
			            	<option value="2">普通管理员</option>
			            </select>
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" style="width:297px;" name="submit" value="注册" class="btn btn-info"/>
			            <a class="btn btn-default pull-right"href="http://localhost/test/Hospitalsrms/index.php/Home/Login/index" class="pull-right">去登录</a>
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
		</div>
	</div>

	<script type="text/javascript" src="/test/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>