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
       
   <script type="text/javascript">
        function type_select(type){
            if(type == 0){
                document.getElementById("url1").style.display = "inline";
                document.getElementById("video1").style.display = "none";
            }else if(type == 1){
                document.getElementById("video1").style.display = "inline";
                document.getElementById("url1").style.display = "none";
            }
        }
    </script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
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
                <li ><a href="<?php echo U('Index/index','','');?>"><i class="icon icon-user"></i> <span>账户管理</span></a>
                </li>
                 <li>
                    <a href="<?php echo U('BasicInfo/index','','');?>"><i class="icon icon-th-list"></i> <span>网站基本信息管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Nav/index','','');?>"><i class="icon icon-th-list"></i> <span>导航管理</span></a>
                </li>
                <li class="active">
                    <a href="<?php echo U('Poster/poster_list','','');?>"><i class="icon icon-th-list"></i> <span>横幅管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Module/module_list','','');?>"><i class="icon icon-th-list"></i> <span>展示模块</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Category/nav_list','','');?>"><i class="icon icon-th-list"></i> <span>侧边栏管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Page/page_list','','');?>"><i class="icon icon-pencil"></i> <span>页面管理</span></a>
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
								<h5>添加海报</h5>
								<div style="float:right;margin-right:50px">
                                    <a href="<?php echo U('Poster/poster_list','','');?>" ><span class="label">返回海报列表</span></a>
                                </div>
							</div>
							<div class="widget-content nopadding">
								<form action="<?php echo U('Poster/addPoster','','');?>" class="form-horizontal" enctype="multipart/form-data" method="post"  />
                                    <div class="control-group">
                                        <label class="control-label">名称</label>
                                        <div class="controls">
                                            <input type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">海报类型</label>
                                        <div class="controls">
                                            <select name="type" onchange="type_select(this.value)">
                                                    <option value="0">
                                                         页面链接
                                                    </option>
                                                    <option value="1">
                                                         视频
                                                    </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">海报状态</label>
                                        <div class="controls">
                                            <select name="status">
                                                    <option value="0">
                                                         隐藏
                                                    </option>
                                                    <option value="1">
                                                         显示
                                                    </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">海报图片(规格1920x590px)</label>
                                        <div class="controls">
                                            <input type="file" name="photo"   />
                                        </div>
                                    </div>
                                    <div class="control-group" id="url1">
                                        <label class="control-label">跳转链接</label>
                                        <div class="controls">
                                            <input type="text" name="scrurl"   />
                                            <div class="alert">
                                                    输入网址的时候请加入"http://"
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group" id="video1" style="display:none">
                                        <label class="control-label">添加视频链接</label>
                                        <div class="controls">
                                            <input type="input" name="scrurl" id="video"/>
											<div class="alert">
                                                    输入网址的时候请加入"http://"
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <input type="submit" value="提交" class="btn btn-primary" />
                                    </div>
                                </form>
							</div>
						</div>			
					</div>
				</div>
				
				<div class="row-fluid">
					<!-- 这是内容块 -->
				</div>
				<div class="row-fluid">
					<div id="footer" class="span12">
						 &copy;2015 OYES</a>
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