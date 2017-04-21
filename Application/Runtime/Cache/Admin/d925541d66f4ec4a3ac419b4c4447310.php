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
										<li><a href="">
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

	            



 <div style="height:30px;background-color:#E4E6E9;
 padding:5px 3px 0px 200px;">项目申报管理>领用申请</div>
<div class="col-md-10 column" style="background-color:#fff;height:550px;">
    <div class="col-md-0">
    </div>
     <div class="col-md-12" style="background-color:#fff;border-radius:0px";>

                    <form name="form2" method="post" action="">
                        <table class="table  table-striped table-bordered table-hover"><br/>
                            <input  class="btn btn-default pull-right" type="submit" value="搜索">
                            <div class="col-md-2 pull-right">
                                <input class="form-control" type="text">
                            </div>
                                                                    
                            <thead>
                                <tr>
                                    <!-- <th>
                                        <input type="checkbox" id="selAll" onclick="selectAll();"/>  全选
                                    </th> -->
                                    <th>
                                        物品名称
                                    </th>
                                    <th>
                                        领用人
                                    </th>
                                    <th>
                                        日期
                                    </th>
                                    <th>
                                        操作
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($thesesList)): $i = 0; $__LIST__ = $thesesList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <!-- <td>
                                    <input type="checkbox" name="checkAll[]" id="checkAll" onclick="setSelectAll();" value="<?php echo ($vo["id"]); ?>"/>
                                    </td> -->
                                    <td>
                                        <?php echo ($vo["name"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["user"]); ?>
                                    </td>
                                    <td>
                                        <?php echo ($vo["date"]); ?>
                                    </td>  
                                    <td>
                                     <?php if($vo['status'] == 0): ?><a  data1 = "<?php echo ($vo['id']); ?>"href="#" class="green agree"title="同意">
                                           同意
                                        </a>

                                        <a data2 = "<?php echo ($vo['id']); ?>" class="red refuse"  href="#" title="拒绝">
                                            拒绝
                                        </a>
                                        
                                    <?php elseif($vo['status'] == 1): ?>
                                    <span style="color:green">已同意</span>
                                <?php else: ?> <span style="color:red">已拒绝</span><?php endif; ?>  
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
            <script>
            $('.agree').click(function(){
                var data ={};
                data.id = $(this).attr('data1');
                data.stat = 'agree';
                $.ajax({
                    type:'POST',
                    url:'/test/Hospitalsrms/index.php/Admin/Xmsb/coller_edit',
                    data:data,
                    dataType:'json',
                    success:function(data){
                        if(data.status == 'success'){
                            alert('操作成功！');
                            window.location.reload();
                        }else{
                            alert('操作失败！');
                            window.location.reload();

                        }
                       
                    }
                });
            });
            $('.refuse').click(function(){
                var data ={};
                data.id = $(this).attr('data2');
                data.stat = 'refuse';
                $.ajax({
                    type:'POST',
                    url:'/test/Hospitalsrms/index.php/Admin/Xmsb/coller_edit',
                    data:data,
                    dataType:'json',
                    success:function(data){
                        if(data.status == 'success'){
                            alert('操作成功！');
                            window.location.reload();
                        }else{
                            alert('操作失败！');

                        }
                       
                    }
                });
            });
            </script>
<div class="" style="background-color:#E4E6E9;height:60px;">

</div>