<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Create Account</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="/Hospitalsrms/Public//bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="col-md-6" style="text-align:center;font-size:28px;">注册</h1>
	<div class="container">
		<div class="col-md-8">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="http://localhost/Hospitalsrms/index.php/Home/Login/register" method="post">
				<div class="form-inner">
					<div class="form-group">             
			        </div>			
			        <div class="form-group">
			          <div class="col-md-6">		          	
			            <label for="username" class="control-label">姓名</label>
			            <input type="text" class="form-control" name="username" placeholder="">		            		            		            
			          </div>
            
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">密码</label>
			            <input type="password" class="form-control" name="password" placeholder="">
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <input type="submit" name="submit" value="注册" class="btn btn-info"/>
			            <a href="http://localhost/Hospitalsrms/index.php/Home/Login/index" class="pull-right">登录</a>
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
		</div>
	</div>

	<script type="text/javascript" src="/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>