<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>登录</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/test/Hospitalsrms/Public//bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray" style="background-image:url('/test/Hospitalsrms/Public//img/logback2.jpg');background-position:center; background-repeat:no-repeat">
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
					<h1   style="font-size:20px;opacity:1.0;text-align:center;">登录</h1>
					<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="http://localhost/test/Hospitalsrms/index.php/Home/Login/login" method="post">				
				        <div class="form-group">
				          <div class="col-md-12">		            
				            <div class="control-wrapper">
				            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
				            	<input type="text" class="form-control" name="username" placeholder="Username">
				            </div>		            	            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				          	<div class="control-wrapper">
				            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
				            	<input type="password" class="form-control" name="password" placeholder="Password">
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				          	<div class="control-wrapper">
				          		<input type="submit" name="submit" value="登录" style="width:280px;"class="btn btn-info">
				          		<a href="forgot-password.html" class="text-right pull-right">忘记密码?</a>

				          	</div>
				          </div>
				        </div>
				        <hr>
				      </form>
				      <div class="text-center">
				      	<a href="http://localhost/test/Hospitalsrms/index.php/Home/Login/register" class="templatemo-create-new">注册新账号 <i class="fa fa-arrow-circle-o-right"></i></a>	
				      </div>
				      <br/>
				</div>
			</div>
</body>
</html>