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

	            


<div style="height:30px;background-color:#E4E6E9;
 padding:5px 3px 0px 200px;">系统管理>用户组管理>权限管理</div>
<div class="col-md-10 column" style="background-color:#fff;height:530px;">

    <div class="col-sm-12">
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive" style="height:530px;">
                    <form class="J_ajaxForm" action="<?php echo U('Xtgl/authorize_post');?>" method="post">
                        <div class="table_full">
                            <table width="100%" cellspacing="0" style="font-size:14px;" id="dnd-example">
                                <tbody>
                                <?php echo ($categorys); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-actions">
                            <input type="hidden" name="roleid" value="<?php echo ($roleid); ?>" />
                            <button class="btn btn_submit btn-primary mr10 J_ajax_submit_btn" type="submit">授权</button>
                            <!-- <a class="btn" href="/test/Hospitalsrms/index.php/Admin/Xtgl">返回</a> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 

    <script type="text/javascript">
        var ajaxForm_list = $('form.J_ajaxFsorm');
        if (ajaxForm_list.length) {
            Wind.use('ajaxForm', 'artDialog', function () {
                if ($.browser.msie) {
                    //ie8及以下，表单中只有一个可见的input:text时，会整个页面会跳转提交
                    ajaxForm_list.on('submit', function (e) {
                        //表单中只有一个可见的input:text时，enter提交无效
                        e.preventDefault();
                    });
                }

                $('button.J_ajax_submit_btn').bind('click', function (e) {
                    e.preventDefault();
                    /*var btn = $(this).find('button.J_ajax_submit_btn'),
                     form = $(this);*/
                    var btn = $(this),
                            form = btn.parents('form.J_ajaxForm');

                    //批量操作 判断选项
                    if (btn.data('subcheck')) {
                        btn.parent().find('span').remove();
                        if (form.find('input.J_check:checked').length) {
                            var msg = btn.data('msg');
                            if (msg) {
                                art.dialog({
                                    id: 'warning',
                                    icon: 'warning',
                                    content: btn.data('msg'),
                                    cancelVal: '关闭',
                                    cancel: function () {
                                        btn.data('subcheck', false);
                                        btn.click();
                                    }
                                });
                            } else {
                                btn.data('subcheck', false);
                                btn.click();
                            }

                        } else {
                            $('<span class="tips_error">请至少选择一项</span>').appendTo(btn.parent()).fadeIn('fast');
                        }
                        return false;
                    }

                    //ie处理placeholder提交问题
                    if ($.browser.msie) {
                        form.find('[placeholder]').each(function () {
                            var input = $(this);
                            if (input.val() == input.attr('placeholder')) {
                                input.val('');
                            }
                        });
                    }

                    form.ajaxSubmit({
                        url: btn.data('action') ? btn.data('action') : form.attr('action'),
                        //按钮上是否自定义提交地址(多按钮情况)
                        dataType: 'json',
                        beforeSubmit: function (arr, $form, options) {
                            var text = btn.text();

                            //按钮文案、状态修改
                            btn.text(text + '中...').attr('disabled', true).addClass('disabled');
                        },
                        success: function (data, statusText, xhr, $form) {
                            var text = btn.text();

                            //按钮文案、状态修改
                            btn.removeClass('disabled').text(text.replace('中...', '')).parent().find('span').remove();

                            if (data.state === 'success') {
                                $('<span class="tips_success">' + data.info + '</span>').appendTo(btn.parent()).fadeIn('slow').delay(1000).fadeOut(function () {
                                    if (data.referer) {
                                        //返回带跳转地址
                                        if (window.parent.art) {
                                            //iframe弹出页
                                            window.parent.location.href = data.referer;
                                        } else {
                                            window.location.href = data.referer;
                                        }
                                    } else {
                                        if (window.parent.art) {
                                            reloadPage(window.parent);
                                        } else {
                                            //刷新当前页
                                            reloadPage(window);
                                        }
                                    }
                                });
                            } else if (data.state === 'fail') {
                                $('<span class="tips_error">' + data.info + '</span>').appendTo(btn.parent()).fadeIn('fast');
                                btn.removeProp('disabled').removeClass('disabled');
                            }
                        }
                    });
                });

            });
        }
        $(document).ready(function () {
            Wind.css('treeTable');
            Wind.use('treeTable', function () {
                $("#dnd-example").treeTable({
                    indent: 20,
                    initialState:"expanded"
            });
            });
        });

        function checknode(obj) {
            var chk = $("input[type='checkbox']");
            var count = chk.length;
            var num = chk.index(obj);
            var level_top = level_bottom = chk.eq(num).attr('level');
            for (var i = num; i >= 0; i--) {
                var le = chk.eq(i).attr('level');
                if (eval(le) < eval(level_top)) {
                    chk.eq(i).attr("checked", true);
                    var level_top = level_top - 1;
                }
            }
            for (var j = num + 1; j < count; j++) {
                var le = chk.eq(j).attr('level');
                if (chk.eq(num).attr("checked") == "checked") {
                    if (eval(le) > eval(level_bottom)) {
                        chk.eq(j).attr("checked", true);
                    }
                    else if (eval(le) == eval(level_bottom)) {
                        break;
                    }
                } else {
                    if (eval(le) > eval(level_bottom)) {
                        chk.eq(j).attr("checked", false);
                    } else if (eval(le) == eval(level_bottom)) {
                        break;
                    }
                }
            }
        }
    </script>
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