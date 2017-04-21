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
	            <div class="navbar-header">
	                <span class="navbar-brand"id="logo">后台管理系统</span>
	            </div>
	            <div class="container">
	            	<span class="glyphicon glyphicon-home icn_pos hm" aria-hidden="true"></span>
		            <p class="pull-right" style="color:white;margin-top:14px;">欢迎您，<?php echo $_SESSION['user_name']?>  <a href="<?php echo U('login/logout');?>">退出</a></p>
		        </div>
	        </div>
	    </div>
	        <div class="col-md-12 column">
	            <div class="row clearfix">
	                <div class="col-md-2 column" style="background-color:#fbfbfc;height:580px">
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
             height:330px;
             margin: 100px auto;
             background-color: #fff;
             border:1px solid #000;
             padding:15px;
             /*text-align:center;*/
        }

</style>
 <div class="main-content">
     <div style="height:30px;background-color:#E4E6E9;padding:5px 3px 0px 60px;">系统管理>用户管理</div>
                <div class="table-responsive">
                    <form id="password_edit_form" style="position:relative;top:20px;" class="form-horizontal" role="form">
                
                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right"> 当前密码</label>

                                <div class="col-sm-7">
                                    <input type="password" name="password"  class="col-xs-10 col-sm-5" pattern="^\S{6,18}$"  title="请输入6-18位密码" required />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right"> 新密码</label>

                                <div class="col-sm-7">
                                    <input type="password" name="password_new"  class="col-xs-10 col-sm-5" pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z?!@#$%^*_,.:;/()~&-|<>`+=]{6,18}$"  title="请输入6-18位字母、数字或特殊字符组合密码" required />
                                </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right"> 确认新密码</label>

                                <div class="col-sm-7">
                                    <input type="password" name="password_new2"  class="col-xs-10 col-sm-5 " pattern="^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z?!@#$%^*_,.:;/()~&-|<>`+=]{6,18}$"  title="请输入6-18位字母、数字或特殊字符组合密码" required />
                                </div>
                            </div>


                            <div class="clearfix" style="display: block;margin-bottom: 0px;margin-top: 20px;text-align: center;text-indent: 0px;padding: 10px;">
                                <div class="col-md-offset-3 col-md-5">
                                    <input class="btn btn-info" type="submit" value="提交"/>
                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        重置
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="clear: both"></div>
</div>

<script>

    $('#password_edit_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var editeUser_data = $('#password_edit_form').serialize();
        $.ajax({
            url:'/test/Hospitalsrms/index.php/Admin/Xtgl/password',
            type:'POST',
            dataType:'json',
            data:editeUser_data,
            success:function(data){
                if(data.status=='success'){
                    alert("编辑成功!");
                    window.location.href="/test/Hospitalsrms/index.php/Admin/Xtgl/user";
                }else if(data.status=='1'){
                   alert("新密码与确认密码不一致！");
                }else{
                   alert("当前密码不正确！");

                }
            }
        });
    });


</script>
<div class="" style="background-color:#E4E6E9;height:60px;">

</div>