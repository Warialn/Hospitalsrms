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
<div style="height:30px;background-color:#E4E6E9;
 padding:5px 3px 0px 200px;">系统管理>用户管理</div>
<div class="col-md-10 column" style="background-color:#fff;height:550px;">
    <div class="col-md-0">
    </div>
    <div id="modal-overlay" class="userAdd">
        <div class="modal-data">
            <ul class="breadcrumb">
                <li>添加用户</li>
                 <a class="pull-right closePop" style="color:#485b7f;cursor:pointer;">关闭</a>
            </ul>
           
        
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xs-win">
                        <form id="addUser_form" method="post" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> 用户名： </label>
                                <div class="col-sm-9">
                                    <input type="text" name="user_name" placeholder="用户名"  pattern="^\S{1,18}$"  title="请输入1-18位字符" class="col-xs-10 col-sm-5" required/>
                                </div>
                            </div>
                                                        
                            <div class="space-4"></div>

                            <div class="form-group">
                            
                                <label class="col-sm-3 control-label no-padding-right"> 密码：</label>

                                <div class="col-sm-9">
                                    <input type="password" name="password" pattern="^(?![0-9]+$)[0-9A-Za-z]{6,18}$"  title="请输入6-18位字母、数字组合密码" class="col-xs-10 col-sm-5" required/>
                                </div>
                            </div>


                            <div class="space-4"></div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right"> 用户组： </label>

                               <div class="col-sm-9" style="line-height:30px;" id="ischeck">
                                    <?php if(is_array($group_data)): $i = 0; $__LIST__ = $group_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group_data_vo): $mod = ($i % 2 );++$i;?><input type="checkbox" name="usergroup" value="<?php echo ($group_data_vo['id']); ?>" style="margin-right:5px;"><?php echo ($group_data_vo['title']); endforeach; endif; else: echo "" ;endif; ?>
                               </div>
                               
                            </div>

                            <div class="space-4"></div>

                          
                            <div class="clearfix form-actions">
                                <div>
                                    <button class="btn btn-info" type="submit">
                                        <i class="icon-ok bigger-110"></i>
                                        提交
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-info" type="reset">
                                        <i class="icon-undo bigger-110"></i>
                                        重置
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>



   <div id="modal-overlay" class="userEdit">
        <div class="modal-data">
            <ul class="breadcrumb">
                <li>编辑用户</li>
                <a class="pull-right closePop" style="color:#485b7f;cursor:pointer;">关闭</a>
            </ul>
            
        
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-win">
                       
                        <form style="position:relative;" name="form" id="user_edite_form" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"> 用户名 </label>

                                <div class="col-sm-9">

                                    <input type="text" name="user_name" id="edite_user" placeholder="用户名" pattern="^\S{1,18}$"  title="请输入小于1-18位字符" class="col-xs-10 col-sm-5"
                                           required/>

                                </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="form-group">
                            
                                <label class="col-sm-3 control-label no-padding-right"> 密码：</label>

                                <div class="col-sm-9">
                                    <input type="password" name="password" pattern="^(?![0-9]+$)[0-9A-Za-z]{6,18}$"  title="请输入6-18位字母、数字组合密码" class="col-xs-10 col-sm-5" required/>
                                </div>
                            </div>
                            
                            
                            <div class="space-4"></div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label no-padding-right"> 用户组： </label>

                               <div class="col-sm-9" style="line-height:30px;" id="ischeck">
                                    <?php if(is_array($group_data)): $i = 0; $__LIST__ = $group_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group_data_vo): $mod = ($i % 2 );++$i;?><input type="checkbox" name="usergroup" value="<?php echo ($group_data_vo['id']); ?>" style="margin-right:5px;"><?php echo ($group_data_vo['title']); endforeach; endif; else: echo "" ;endif; ?>
                               </div>
                               
                            </div>

                            <div class="space-4"></div>
                            <input type="hidden" id='edit_id' name="id"  />
                            <div class="clearfix form-actions">
                                <div>
                                    <button class="btn btn-info user_edite" type="submit">
                                        <i class="icon-ok bigger-110"></i>
                                        提交
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
     <div id="modal-overlay" class="userDel">
        <div class="modal-data">
            <ul class="breadcrumb">
                <li>
                    删除用户
                </li>
                <a class="pull-right closePop" style="color:#485b7f;cursor:pointer;">关闭</a>
            </ul>
        
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-win">
                      
                        <form style="position:relative;top:20px;" id="user_delete_form" class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-sm-4 control-label no-padding-right"> 确定要删除此用户？ </label>
                            </div>

                            <input type="hidden" id="del_id"  name="id"/>
                            <div class="clearfix form-actions">
                                <div>
                                    <button class="allusers btn btn-danger" >
                                        <i class="icon-remove  bigger-110 "></i>
                                        删除
                                    </button>

                                    &nbsp; &nbsp; &nbsp;
                                    <button  type="reset" class="btn closePop">
                                        <i class="icon-undo bigger-110"></i>
                                        取消
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col-->
                </div>
               
            </div>
        </div>
    </div>
   <div class="buttonGroup">
        <br/>
        <a href="#"   class="btn btn-default delAll" id="">批量删除</a>
        <a href="#" class="btn btn-default" id="userAdd">添加</a>   
    </div>
    <br/>

    <div class="table-responsive" style="height:400px;">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <!-- <th class="center">
                        <label>
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th> -->
                    <th><input type="checkbox" id="selAll" onclick="selectAll();"/>  全选</th>
                    <th>用户名</th>
                    <th>用户组</th>
                    <th>注册时间</th>
                    <th>最后在线时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox" name="checkAll" id="checkAll" onclick="setSelectAll();" value="<?php echo ($vo["id"]); ?>"/></td>
                        <td><?php echo ($vo["user_name"]); ?></td>
                        <td><?php echo ($vo["title"]); ?></td>
                        <td><?php echo (date('Y-m-d H:i:s',$vo["reg_time"])); ?></td>
                        <td><?php if($vo['last_time'] == 0): ?>--
                        <?php else: ?>
                        <?php echo (date('Y-m-d H:i:s',$vo["last_time"])); endif; ?></td>
                        <td>
                            <a  href="#" class="green Usered"  data1="<?php echo ($vo['id']); ?>" title="编辑">
                               编辑
                            </a>

                            <a  href="#" class="red Userde"  data2="<?php echo ($vo['id']); ?>"title="删除">
                                删除
                            </a>
                            
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="dataTables_paginate paging_bootstrap">
            <ul class="pagination">
                <?php echo ($user_show); ?>
            </ul>
        </div>

<script>
    $(".closePop").css('cusor','pointer').click(function(){
        $(".userAdd").hide();
        $(".userEdit").hide();
        $(".userDel").hide();
    });
    /* 添加用户*/
    $("#userAdd").click(function () {
        $(".userAdd").show();
       
    });
    $('#addUser_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var data = $('#addUser_form').serialize();
        var checkVal= $('#ischeck input').serialize();

        if (checkVal =='') {
                 alert("请选择用户组");
                return false;
        }else if(checkVal.length > 11){
            alert("只可以选择一个用户组");
            return false;
        }else{

            $.ajax({
                 type: "POST",
                 url: "/test/Hospitalsrms/index.php/Admin/Xtgl/user_add",
                 data: data,
                 dataType: "json",
                success:function(data){
                    if(data.status=='success'){
                        $(".addUser").hide();
                        $("#fade").hide();
                        $('#addUser_form')[0].reset();
                        alert("添加成功");
                        window.location.reload();
                    }else if(data.status=='1'){
                        alert("用户已存在");
                    }else{
                        alert("添加失败");

                    }
                }
             });
          }
        
    })

 /*编辑用户*/
    $(".Usered").click(function(){

        $(".userEdit").show();
        var id = $(this).attr('data1');
        $("#edit_id").val(id);
    });


    $('#user_edite_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var editeUser_data = $('#user_edite_form').serialize();
        $.ajax({
            url:'/test/Hospitalsrms/index.php/Admin/Xtgl/do_user_edit',
            type:'POST',
            dataType:'json',
            data:editeUser_data,
            success:function(data){
                if(data.status=='success'){
                    $(".userEdit").hide();
                    $("#fade").hide();
                    $('#user_edite_form')[0].reset();
                    alert("编辑成功");
                    window.location.reload();
                }else if(data.status=='1'){
                   alert("用户已存在");
                }
            }
        });
    });
 /*删除用户*/
  //单条删除
    $(".Userde").click(function () {
       /* $(":checked").attr('checked',false);
        $(this).parent().parent().children().first().children().first().attr('checked','checked');*/
            var id = $(this).attr('data2');
            $('#del_id').val(id);
            $(".userDel").show();
            return false;
    });
    
      

    $('#user_delete_form').submit(function(e){
        e.stopPropagation();
        e.preventDefault();
        var id = $("#del_id").val();
        $.ajax({
            url:'/test/Hospitalsrms/index.php/Admin/Xtgl/user_delete',
            type:'POST',
            dataType:'json',
            data:{'id':id},
            success:function(data){
                if(data.status=='success'){
                    $("#userDel").hide();
                    $("#fade").hide();
                    $('#user_delete_form')[0].reset();
                    alert("删除成功");
                    window.location.reload();
                    $(":checked").attr('checked',false);
                }else{
                    $("#userDel").hide();
                    $("#fade").hide();
                    $(":checked").attr('checked',false);
                    alert("不允许删除当前用户");
                }
            }
        });

    });
 $(".delAll").click(function(){
    var data={};
    data.id = $("input:checkbox[name='checkAll']:checked").map(function(){
        return $(this).val();
    }).get().join(",");
    //alert(check);
    $.ajax({
        url:'/test/Hospitalsrms/index.php/Admin/Xtgl/user_delAll',
        type:'post',
        data:data,
        dataType:'JSON',
        success:function(data){
            if(data.status == 'success'){
                alert('删除成功！');

                window.location.reload();
                $(':checked').attr('checked',false);
            }else{
                alert('删除失败！');
            }

        }

    });
}); 
</script>
<div class="col-md-12 column" style="background-color:#fff;opacity:0.8;border:1px solid #4857bf;border-radius:6px;height:60px;text-align:center;">
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