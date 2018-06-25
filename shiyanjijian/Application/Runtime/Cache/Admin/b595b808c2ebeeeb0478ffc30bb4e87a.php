<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/uniform.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/select2.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body>
		
		
		<div id="header">
            <h2 style="color:#FFFFFF">APPARELWIN</h2>       
        </div>
        
        
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse"><a title="" href="<?php echo U('Login/logout','','');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
            </ul>
        </div>
            
        <div id="sidebar">
            <a href="#" class="visible-phone"><i class="icon icon-home"></i> 系统管理</a>
            <ul>
                <li>
                    <a href="<?php echo U('Main/index','','');?>"><i class="icon  icon-home"></i> <span>首页</span></a>
                </li>
                <li class="active"><a href="<?php echo U('Index/index','','');?>"><i class="icon icon-user"></i> <span>账户管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('BasicInfo/index','','');?>"><i class="icon icon-th-list"></i> <span>网站基本信息管理</span></a>
                </li>
                 <li>
                    <a href="<?php echo U('Nav/index','','');?>"><i class="icon icon-th-list"></i> <span>导航管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Poster/poster_list','','');?>"><i class="icon icon-th-list"></i> <span>横幅管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Module/module_list','','');?>"><i class="icon icon-th-list"></i> <span>展示模块</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Category/cate_list','','');?>"><i class="icon icon-pencil"></i> <span>页面管理</span></a>
                </li>
                <li ><a href="<?php echo U('Footer/index','','');?>"><i class="icon-align-justify"></i>底部管理</a></li>
                <li>
                    <a href="<?php echo U('Aliance/index','','');?>"><i class="icon icon-file"></i> <span>联盟管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Article/index','','');?>"><i class="icon icon-list-alt"></i> <span>媒体管理</span></a>
                </li>
            </ul>
        </div>
					
		<div id="content">
			<div id="content-header">
				
			</div>
			
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>基本信息</h5>
								<!--<div style="float:right;margin-right:50px">
								<li class="btn btn-inverse"><a title="" href="<?php echo U('Login/resetAccount','','');?>"><i class="icon icon-share-alt"></i> <span class="text">恢复默认设置</span></a></li>
								</div>-->
                                <div style="float:right;margin-right:50px">
                                    <a href="<?php echo U('Index/resetAccount','','');?>"><span class="label">恢复默认设置</span></a>
                                    <a href="#set_password<?php echo ($user["id"]); ?>" data-toggle="modal"><span class="label">修改密码</span></a>
                                </div>


                                <!-- 修改密码弹出框 -->
                                                    <div id="set_password<?php echo ($user["id"]); ?>" class="modal hide">
                                                        <div class="modal-header">
                                                            <button data-dismiss="modal" class="close" type="button">×</button>
                                                            <h3>密码设置</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="control-group">
                                                                <form class="form-horizontal" method="post" action="<?php echo U('Admin/Index/resetPW1','','');?>" name="reset_pw">
                                                                    
                                                                    <div class="control-group">
                                                                        <label class="control-label">新密码</label>
                                                                        <div class="controls">
                                                                            <input type="password" name="password"  />
                                                                            <input type="hidden" name="id"  value="<?php echo ($user["id"]); ?>"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="control-group">
                                                                        <label class="control-label">新密码确认</label>
                                                                        <div class="controls">
                                                                            <input type="password" name="confirm_password"   />
                                                                        </div>
                                                                    </div>
                                                                    <div style="width:545px;text-align:center;padding-top:10px">
                                                                        <input type="submit" value="确定" class="btn btn-primary" />
                                                                        <button class="btn" data-dismiss="modal" class="close">取消</button>
                                                                     </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>



								<!-- <span class="label label-important">48 notices</span> -->
							</div>
							<div class="widget-content nopadding">
								<form class="form-horizontal" method="post" action="<?php echo U('Index/modifyAccount','','');?>"  name="info" />
                                    <div class="control-group">
                                        <label class="control-label">用户名</label>
                                        <div class="controls">
                                            <input type="text" name="username"  value="<?php echo ($user["username"]); ?>" />
                                        </div>
                                        <input type="hidden" name="id"  value="<?php echo ($user["id"]); ?>" />
                                    </div>
                                       
                                    <div class="control-group">
                                        <label class="control-label">邮箱</label>
                                        <div class="controls">
                                            <input type="text" name="email"  value="<?php echo ($user["email"]); ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">上次修改时间</label>
                                        <div class="controls">
                                            <label><?php echo ($user["update_time"]); ?></label>
                                        </div>
                                    </div>
                                    <!--</div>
                                     <div class="control-group">
                                        <label class="control-label"><a href="#set_password<?php echo ($user["id"]); ?>" data-toggle="modal" class="btn"><i class="icon-wrench">
												</i>修改密码</a></label>
                                    </div>-->
                                    
									<div class="form-actions">
                                        <input type="submit" value="提交" class="btn btn-primary" />
                                    </div>
                                </form>


                                    


							
						</div>			
					</div>
				</div>
				
				<div class="row-fluid">
					<!-- 这是内容块 -->
				</div>
				<div class="row-fluid">
					<div id="footer" class="span12">
						 &copy;2015 OYES </a>
					</div>
				</div>
			</div>
		</div>
            
            <script src="/shiyanjijian/Application/Admin/View/Public/js/jquery.min.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/bootstrap.min.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/jquery.uniform.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/select2.min.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/jquery.validate.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/jquery.wizard.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/unicorn.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/unicorn.wizard.js"></script>
            <script src="/shiyanjijian/Application/Admin/View/Public/js/unicorn.form_validation.js"></script>

             
	</body>
</html>