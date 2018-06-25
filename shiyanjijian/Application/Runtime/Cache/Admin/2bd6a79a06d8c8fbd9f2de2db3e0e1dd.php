<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/jquery.gritter.css" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/uniform.css" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/select2.css" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
		<link rel="stylesheet" href="/oyes/Application/Admin/View/Public/css/add_manger.css" />
		<script type="text/javascript" src="/oyes/Application/Admin/View/Public/xhEditorjs/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="/oyes/Application/Admin/View/Public/xhEditorjs/xheditor-1.2.1.min.js"></script>
        <script type="text/javascript" src="/oyes/Application/Admin/View/Public/xhEditorjs/xheditor_lang/zh-cn.js"></script>
		<!--<script src="/oyes/Application/Admin/View/Public/js/jquery.min.js"></script>-->
		<script src="/oyes/Application/Admin/View/Public/js/jquery.zclip.min.js"></script>
		<script type="text/javascript">
			$(function(){
    			$("#cp-btn").zclip({
        			path:'/oyes/Application/Admin/View/Public/js/ZeroClipboard.swf', //记得把ZeroClipboard.swf引入到项目中 
        			copy:function(){
            			return $('#inviteUrl').val();
        			}
    			});
			});
		</script>

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
			<a href="#" class="visible-phone"><i class="icon icon-user"></i> 系统管理</a>
			<ul>
				<li>
					<a href="<?php echo U('Main/index','','');?>"><i class="icon  icon-home"></i> <span>首页</span></a>
				</li>
				<li><a href="<?php echo U('Index/index','','');?>"><i class="icon icon-home"></i> <span>账户管理</span></a>
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
				<li class="active">
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
			
			
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>									
								</span>
								<h5>编辑内容</h5>
								<div style="float:right;margin-right:50px">
									<a href="<?php echo U('Category/cate_list','','');?>"><span class="label">返回</span></a>
								</div>
							</div>
							<div class="widget-content nopadding">
								<form action="<?php echo U('Category/saveCate','','');?>" method="post" class="form-horizontal" enctype="multipart/form-data" name="newsaddform" onsubmit="return checknews()" />
									<div class="control-group">
										<label class="control-label">名称</label>
										<div class="controls">
											<input type="text" name="name" value="<?php echo ($cate["name"]); ?>">
											<input type="hidden" name="id" value="<?php echo ($cate["id"]); ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">URL</label>
										<div class="controls">
											<?php
 $php_self = dirname(dirname(dirname(dirname(dirname(dirname($_SERVER['PHP_SELF'])))))); $path = "http://".$_SERVER['SERVER_NAME']; echo "http://".$_SERVER['SERVER_NAME']; echo ($cate["url"]); ?>
											<input type="hidden" name="url" value="<?php echo ($path); echo ($cate["url"]); ?>" id="inviteUrl">
											<a href="javascript:void(0)" id="cp-btn">复制链接</a>
										</div>
									</div>
									<?php if($cate["id"] == 1): ?><div class="control-group">
										<label class="control-label">SEO-标题</label>
										<div class="controls" >
											<input type="text" name="title" value="<?php echo ($cate["title"]); ?>" >
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">SEO-关键词</label>
										<div class="controls" >
											<input type="text" name="key" value="<?php echo ($cate["key"]); ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">SEO-描述</label>
										<div class="controls" >
											<textarea  name="description" rows="4" cols="80" style="width: 80%"><?php echo ($cate["description"]); ?></textarea>
										</div>
									</div>
									<?php else: ?>
									<div class="control-group">
										<label class="control-label">SEO-标题</label>
										<div class="controls" >
											<input type="text" name="title" value="<?php echo ($cate["title"]); ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">SEO-关键词</label>
										<div class="controls" >
											<input type="text" name="key" value="<?php echo ($cate["key"]); ?>">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">SEO-描述</label>
										<div class="controls" >
											<textarea  name="description" rows="4" cols="80" style="width: 80%"><?php echo ($cate["description"]); ?></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">内容</label>
										<div class="controls" >
											<textarea id="container" name="content" rows="12" cols="80" style="width: 90%"><?php echo (stripslashes($cate["content"])); ?></textarea>
										</div>
									</div><?php endif; ?>
									<div class="form-actions">
										<button type="submit" class="btn btn-primary">保存</button>
									</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
			</div>
			<div class="row-fluid">
					<div id="footer" class="span12">
						2015 &copy; OYES</a>
					</div>
				</div>
		</div>

		<div id="ad_grey"></div>
					
            <script src="/oyes/Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/bootstrap.min.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/jquery.uniform.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/select2.min.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/jquery.validate.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/jquery.wizard.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/unicorn.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/unicorn.wizard.js"></script>
             <script src="/oyes/Application/Admin/View/Public/js/unicorn.form_validation.js"></script>

              <script type="text/javascript" src="/oyes/Application/Admin/View/Public/ueditor/ueditor.config.js"></script>
        	 <script type="text/javascript" src="/oyes/Application/Admin/View/Public/ueditor/ueditor.all.min.js"></script>
        
			 <script type="text/javascript">
			     var ue = UE.getEditor('container');
			 </script>

             
	</body>
</html>