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
		            <p class="pull-right" style="color:white;margin-top:14px;">欢迎您，XXX</p>
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

	            


<div class="main-content">
    <div class="col-md-10 column">
                <div class="row">
                    <div class="col-xs-12">
                    
                       <div class="buttonGroup">
                           <a href="#" class="btn btn-link" id="usergroupAdd"><i class="icon-plus-sign bigger-120 green"></i>添加</a>|
                           
                           <a href="#" class="btn btn-link" id="usergroupDel"><i class="icon-remove  bigger-120 red "></i>批量删除</a>
                        

                        </div>
                    
                        <div class="table-responsive">
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                       
                                        <th><input type="checkbox" ></th>
                                        <!-- <th>机房</th> -->
                                        <th>用户组</th>
                                        <th>备注</th>
                                        <!-- <th>创建时间</th> -->
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php if(is_array($usergroup_data)): $i = 0; $__LIST__ = $usergroup_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$usergroup_data_vo): $mod = ($i % 2 );++$i;?><tr>
                                        <td><input type="checkbox" name="checkbox" value="<?php echo ($usergroup_data_vo['id']); ?>"></td>
                                        <!-- <td>南京机房</td> -->
                                        <td><?php echo ($usergroup_data_vo['title']); ?></td>
                                        <td><?php echo ($usergroup_data_vo['note']); ?></td>
                                        <td><if condition="$usergroup_data_vo['title'] eq '超级管理员'">
                                            ---
                                         
                                           
                                            <a href="/test/Hospitalsrms/index.php/Admin/Xtgl/authorize/id/<?php echo ($usergroup_data_vo['id']); ?>">权限设置</a>
                                           
						<a class="green editeUsergroup" href="#" title="编辑">
							<i class="icon-pencil bigger-130"></i>
						</a>
                      
						<a class="red" href="#" title="删除">
							<i class="icon-trash delUsergroup bigger-130"></i>
						</a>


                                                                    
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <div class="dataTables_paginate paging_bootstrap">
        <ul class="pagination">
            <?php echo ($usergroup_show); ?>
        </ul>
    </div>
</div>
<div style="clear: both"></div>
</div>

<script>
    $(".buttonGroup #usergroupAdd").click(function () {
        $("#userAddgroup").show();
        $("#fade").show();
        return false
    });
    $(".closePop").css("cursor", "pointer").click(function () {
        $("#userAddgroup").hide();
        $("#delUser").hide();
        $("#editeUsergroup").hide();
        $("#fade").hide();
        $(":checked").attr('checked',false);
    });
    $(".buttonGroup #usergroupDel").click(function () {
        var val= $("input:checkbox[name='checkbox']:checked").map(function() {
            return $(this).val();
        }).get();
        if(val.length<1){
            layer.alert("请选择数据");
            return;
        }
        $("#delUser").show();
        $("#fade").show();
        return false
    });

    $(".editeUsergroup").click(function () {
        var tr = $(this).parents('tr');
        $("#editeusergroup_form input[name='id']").val(tr.children('td:eq(0)').children().val());
        $("#editeusergroup_form input[name='groupname']").val(tr.children('td:eq(1)').html());
        $("#editeusergroup_form textarea[name='note']").val(tr.children('td:eq(2)').html());
        $("#editeUsergroup").show();
        $("#fade").show();
        return false
    })

    $(".delUsergroup").click(function () {
        $(":checked").attr('checked',false);
        $(this).parents('tr').children().first().children().attr('checked','checked');
        $("#delUser").show();
        $("#fade").show();
        return false;
    })

    $('#delgroup_form').submit(function(e){
        e.preventDefault();
        var id = $("input:checkbox[name='checkbox']:checked").map(function() {
                return $(this).val();
            }).get().join(',');
        $.ajax({
            url:'/test/Hospitalsrms/index.php/Admin/Xtgl/usergroupdel',
            type:'POST',
            dataType:'json',
            data:{'id':id},
            success:function(data){
                if(data.status=='success'){
                   $("#delUser").hide();
                   $("#fade").hide();
                   $('#delgroup_form')[0].reset();
                    layer.alert("删除成功");
                    window.location.reload();
                    $(":checked").attr('checked',false);
                }
            }
       });
    })

    $('#editeusergroup_form').submit(function(e){
        e.preventDefault();
        var data = $('#editeusergroup_form').serialize();
        $.ajax({
            url:'/test/Hospitalsrms/index.php/Admin/Xtgl/do_usergroup_edite',
            type:'POST',
            dataType:'json',
            data:data,
            success:function(data){
                if(data.status=='success'){
                   $("#editeUsergroup").hide();
                   $("#fade").hide();
                   $('#editeusergroup_form')[0].reset();
                    layer.alert("编辑成功");
                    window.location.reload();
                }
            }
       });
    })

    $('#usergroup_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var usergroup_data = $('#usergroup_form').serialize();
        $.ajax({
            url:'/test/Hospitalsrms/index.php/Admin/Xtgl/usergroup_add',
            type:'POST',
            dataType:'json',
            data:usergroup_data,
            success:function(data){
                if(data.status=='success'){
                    $("#userAddgroup").hide();
                    $("#fade").hide();
                    layer.alert("添加成功");
                    window.location.reload();
                }else if(data.status=='failed'){
                    layer.alert(data.message);
                }
            }
        });
    });


</script>
<div class="" style="background-color:#E4E6E9;height:60px;">

</div>