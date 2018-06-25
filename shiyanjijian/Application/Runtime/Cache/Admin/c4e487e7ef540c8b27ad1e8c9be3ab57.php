<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/jquery.gritter.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/uniform.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/select2.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/add_manger.css" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<style type="text/css">
		div.word{
			white-space:nowrap; 
			width:18em; 
 			overflow:hidden;
		}
	</style>
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
				<li><a href="<?php echo U('Index/index','','');?>"><i class="icon icon-user"></i> <span>账户管理</span></a>
				</li>
				<li>
                    <a href="<?php echo U('BasicInfo/index','','');?>"><i class="icon icon-th-list"></i> <span>网站基本信息管理</span></a>
                </li>
                <li  class="active">
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
									<i class="icon-th"></i>
								</span>
								<h5>导航列表</h5>
								<div style="float:right;margin-right:50px">
									<a href="#addModule" data-toggle="modal" ><span class="label">添加</span></a>
								</div>
								<div id="addModule" class="modal hide">
								<div class="modal-header">
									<button data-dismiss="modal" class="close" type="button">×</button>
									<h3>添加导航</h3>
								</div>		
								<div class="modal-body">
									<div class="control-group">
										<form method="post" action="<?php echo U('Nav/addNav','','');?>"   class="form-horizontal" />
											<div class="control-group">
                                        		<label class="control-label">导航名称</label>
                                        		<div class="controls">
                                            		<input type="text" name="name"/>
                                       			</div>
                                    		</div>
                                    		<div class="control-group">
                                        		<label class="control-label">导航URL</label>
                                        		<div class="controls">
                                            		<input type="text" name="url"/>
                                            		<div class="alert">
                                                    	输入网址的时候请加入"http://"
                                                	</div>
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
							</div>
							
							<div class="widget-content nopadding">
								<form action="<?php echo U('Nav/changeSort','','');?>" method="post" class="form-horizontal"/>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>排序</th>
											<th>名字</th>
											<th>URL</th>
											<th>状态</th>
											<th>发布时间</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>
										<!-- php标签库，foreach循环 -->
										<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
											<td>
												<input type="text" name="<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["sorted"]); ?>" style="width:20px" />
											</td>			
											<td>
												<?php echo ($vo["name"]); ?>
											</td>
											<td>
												<div class="word" style="text-overflow:ellipsis;">
												<?php echo ($vo["url"]); ?>
												</div>
											</td>
											<td>
												<?php if($vo["status"] == 0): ?>不可用
													<?php else: ?>
													可用<?php endif; ?>
											</td>
											<td>
												<?php echo (date("y-m-d",$vo["create_time"])); ?>
											</td>
											<td>
												<?php if($vo["status"] == 0): ?><a href="<?php echo U('Nav/changeNavStatus','id='.$vo['id'],'');?>"   class="btn btn-primary"><i class="icon-eye-open icon-white">
													</i>显示</a>
													<?php else: ?><a href="<?php echo U('Nav/changeNavStatus','id='.$vo['id'],'');?>"   class="btn btn-info"><i class="icon-eye-open icon-white"></i>隐藏</a><?php endif; ?>


												<a href="#edit_Nav<?php echo ($vo["id"]); ?>" class="btn" data-toggle="modal"><i class="icon-wrench">
												</i>修改</a>

												<a href="#deleteNav<?php echo ($vo["id"]); ?>" data-toggle="modal" class="btn"><i class="icon-remove"></i>删除</a>
												

												<!--横幅预览-->
												<div id="set_info<?php echo ($vo["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>横幅详情</h3>
														</div>
									            		<div class="modal-body">
															<div class="control-group">
															<div class="modal-body">
															        	<img src="<?php echo ($vo["image"]); ?>">
																	</div>
															<p>横幅内容链接：<?php echo ($vo["scrurl"]); ?></p>
																<form class="form-horizontal"  />
                                    								
                                    								
                                    								<div style="width:545px;text-align:center;padding-top:10px">
																		<button class="btn" data-dismiss="modal" class="close">返回</button>
														   			 </div>
                                    							</form>
															</div>
														</div>
													</div>
												
													<!--板块的修改-->


								<div id="edit_Nav<?php echo ($vo["id"]); ?>" class="modal hide">
									<div class="modal-header">
										<button data-dismiss="modal" class="close" type="button">×</button>
										<h3>修改导航</h3>
									</div>		
									<div class="modal-body">
										<div class="control-group">
											<form method="post" action="<?php echo U('Nav/modifyNav','','');?>"   class="form-horizontal"/>
												<div class="control-group">
                                        		<label class="control-label">名称</label>
                                        		<div class="controls">
                                            		<input type="text" name="name" value="<?php echo ($vo["name"]); ?>"/>
                                       			</div>
                                    	</div>
                                    	<div class="control-group">
                                        	<label class="control-label">URL</label>
                                        	<div class="controls">
                                            	<input type="text" name="url" value="<?php echo ($vo["url"]); ?>"/>
                                            	<input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
                                            	<div class="alert">
                                                    输入网址的时候请加入"http://"
                                                </div>
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


						<!--资讯删除-->
												<div id="deleteNav<?php echo ($vo["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p>确定要删除吗？</p>
														</div>
														<div class="modal-footer">
															<form class="form-horizontal" method="post" action="<?php echo U('Nav/deleteNav','','');?>" />
														    <input type="hidden" name="id"  value="<?php echo ($vo["id"]); ?>" />
														    <input type="submit" value="确定" class="btn btn-primary" />
														    <a data-dismiss="modal" class="btn" href="#">取消</a>
															</form>
														</div>
												</div>



												</div>
											</td>
										</tr><?php endforeach; endif; ?>
									</tbody>
								</table>
								<div class="form-actions" style="padding-left:18px">
										<button type="submit" class="btn btn-primary">排序</button>
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
						2015 &copy; OYES</a>
					</div>
				</div>
			</div>
		</div>
		

          <!--   // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/excanvas.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/bootstrap.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.flot.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.flot.resize.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.peity.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/fullcalendar.min.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.js"></script>
            // <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.dashboard.js"></script> -->
            
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.min.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/bootstrap.min.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.uniform.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/select2.min.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.validate.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.wizard.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.wizard.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.form_validation.js"></script>



            
	</body>
</html>