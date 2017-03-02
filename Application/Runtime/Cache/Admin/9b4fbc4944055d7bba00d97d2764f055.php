<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>后台管理系统</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Play-Offs Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<link href="/Hospitalsrms/Public//bootstrap/css/bootstrap.min2.css" rel="stylesheet">
<link href="/Hospitalsrms/Public//bootstrap/css/admintop.css" rel="stylesheet">
<script src="/Hospitalsrms/Public//bootstrap/js/jquery.min.js"></script>
<script src="/Hospitalsrms/Public//bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="contain">
	<div class="navbar navbar-duomi navbar-static-top" role="navigation">
	        <div class="container-fluid" style="background-color:#2fb298;">
	            <div class="navbar-header">
	                <span class="navbar-brand"id="logo">后台管理系统</span>
	            </div>
	            <div class="container">
		            <p class="pull-right" style="color:white;margin-top:14px;">欢迎您，XXX</p>
		        </div>
	        </div>
	    </div>
	    <div class="row clearfix">
	        <div class="col-md-12 column">
	            <div class="row clearfix">
	                <div class="col-md-2 column" style="background-color:#2f3e44;height:580px">
	                    <div class="col-md-12" >
	                        <ul class="nav nav-list">
	                            <li><a href="#" class="dropdown-toggle">
									<i class="icon-journal"></i>
									<span class="menu-text"> 科研统计管理 </span>
									<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu" id="Kytj">
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
									<a href="#" class="dropdown-toggle">
										<i class="icon-user0"></i>
										<span class="menu-text"> 项目申报管理 </span>
									</a>
									<ul class="submenu">
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
		                            <a href="#" class="dropdown-toggle">  
			                            <i class="icon-desktop"></i>  
			                            <span class="menu-text">科研经费管理 </span>    
		                            </a> 
		                            <ul class="submenu"> 
		                         
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
									<a href="#" class="dropdown-toggle">
										<i class="icon-alarm"></i>
										<span class="menu-text"> 学术活动管理 </span>

										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
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
									<ul class="submenu">
										<li><a href="">
												<i class="icon-double-angle-right"></i>
												密码管理
											</a>
										</li>
		                                
		                                <li>  
			                                <a href="">  
			                                	<i class="icon-double-angle-right"></i>  
			                                    日志管理  
			                                </a>  
		                                </li>
		                                
		                                <li>
											<a href="">
												<i class="icon-double-angle-right"></i>
												用户管理
											</a>
										</li>
										<li>
											<a href="">
												<i class="icon-double-angle-right"></i>
												用户组管理
											</a>
										</li>								
									</ul>
								</li>
                      		</ul><!-- /.nav-list -->
	                   </div>
	                </div>              
	            



 <div style="height:30px;background-color:#eee;
 padding:5px 3px 0px 240px;">学术活动管理>讲座管理</div>
<div class="col-md-10 column" style="background-color:#fff;height:550px;">
    <div class="col-md-0">
    </div>
     <div class="col-md-12" style="background-color:#fff;border-radius:0px";>

                    <form name="form2" method="post" action="">
                        <table class="table"><br/>
                            <input  class="btn btn-default pull-right" type="submit" value="搜索">
                            <div class="col-md-2 pull-right">
                                <input class="form-control" type="text">
                            </div>
                                                                    
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="selAll" onclick="selectAll();"/>  全选
                                    </th>
                                    <th>
                                        论文名称
                                    </th>
                                    <th>
                                        作者
                                    </th>
                                    <th>
                                        年份
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
                                        <?php echo ($vo["name"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["author"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["date"]); ?>
                                    </td>                               
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            <tr>
                               <td>
                                <img src="/Hospitalsrms/Public/img/arrow_ltr.gif"/>
                               </td>
                               <td>
                                <a class="btn btn-default delete" href="">删除</a>                                
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
<div class="" style="background-color:#eee;height:60px;">

</div>