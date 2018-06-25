<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="/Application/Admin/View/Public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/Application/Admin/View/Public/css/unicorn.main.css" />
        <link rel="stylesheet" href="/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
        <link rel="stylesheet" href="/Application/Admin/View/Public/css/uniform.css" />
        <link rel="stylesheet" href="/Application/Admin/View/Public/css/select2.css" />
	
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
				<li><a href="<?php echo U('Index/index','','');?>"><i class="icon icon-user"></i> <span>账户管理</span></a>
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
				<li class="active">
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
                                    <span class="icon"><i class=" icon-align-left"></i></span>
                                    <h5><?php echo ($aliance["campany_name"]); ?>详细信息</h5>
                                    <div style="float:right;margin-right:50px">
									<a href="<?php echo U('Aliance/index','','');?>"><span class="label">返回</span></a>
									</div>
                                </div>
                                <div class="widget-content tab-content">
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;公司名称：</strong><?php echo ($aliance["campany_name"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：</strong><?php echo ($aliance["contacts"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;手机号码：</strong><?php echo ($aliance["phones"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱：</strong><?php echo ($aliance["email"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;主营产品：</strong><?php echo ($aliance["main_product"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;经营模式：</strong><?php echo ($aliance["business_model"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;工艺类型：</strong><?php echo ($aliance["process_type"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>工厂所在地：</strong><?php echo ($aliance["factory_location"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;加工方式：</strong><?php echo ($aliance["processing_methods"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;资质证书：</strong>
                                                <?php if($aliance["certifications"] != ''): ?><a href="<?php echo ($aliance["certifications"]); ?>" target="_blank">
                                                    <img src="<?php echo ($aliance["certifications"]); ?>" style="width:100px ;height:100px;" title="点击查看大图"/></a><?php endif; ?>
                                                </label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;营业执照：</strong>
                                                <?php if($aliance["license"] != ''): ?><a href="<?php echo ($aliance["license"]); ?>" target="_blank">
                                                    <img src="<?php echo ($aliance["license"]); ?>" style="width:100px ;height:100px;" title="点击查看大图"/>
                                                    </a><?php endif; ?>
                                                </label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;员工人数：</strong><?php echo ($aliance["employess_num"]); ?></label>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;产品图：</strong>
                                            <?php if($aliance["product_image"] != ''): ?><a href="<?php echo ($aliance["product_image"]); ?>" target="_blank">
                                                <img src="<?php echo ($aliance["product_image"]); ?>" style="width:100px ;height:100px;" title="点击查看大图"/>
                                                </a><?php endif; ?></label>
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
		</div>
            
            <script src="/Application/Admin/View/Public/js/jquery.min.js"></script>
            <script src="/Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
            <script src="/Application/Admin/View/Public/js/bootstrap.min.js"></script>
            <script src="/Application/Admin/View/Public/js/unicorn.js"></script>
            <script src="/Application/Admin/View/Public/js/jquery.validate.js"></script>
            <script src="/Application/Admin/View/Public/js/unicorn.form_validation.js"></script>
             
	</body>
</html>