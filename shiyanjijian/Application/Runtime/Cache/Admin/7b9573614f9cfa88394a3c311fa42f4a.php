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
			width:28em; 
 			overflow:hidden;
		}
		div.title{
			white-space:nowrap; 
			width:5em; 
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
                <li>
                    <a href="<?php echo U('Nav/index','','');?>"><i class="icon icon-th-list"></i> <span>导航管理</span></a>
                </li>
				<li>
					<a href="<?php echo U('Poster/poster_list','','');?>"><i class="icon icon-th-list"></i> <span>横幅管理</span></a>
				</li>
				<li  class="active">
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
								<h5>首页展示模块</h5>
								<div style="float:right;margin-right:50px">
									<a href="#addModule" data-toggle="modal" ><span class="label">添加</span></a>
								</div>
								<div id="addModule" class="modal hide">
									<div class="modal-header">
										<button data-dismiss="modal" class="close" type="button">×</button>
										<h3>添加展示模块</h3>
									</div>		
									<div class="modal-body">
										<div class="control-group">
											<form method="post" action="<?php echo U('Module/addModule','','');?>"   class="form-horizontal" enctype="multipart/form-data"/>
												<div class="control-group">
                                        			<label class="control-label">标题</label>
                                        			<div class="controls">
                                            			<input type="text" name="title"/>
                                       				</div>
                                    			</div>
                                    			<div class="control-group">
                                        			<label class="control-label">跳转链接</label>
                                        			<div class="controls">
                                            			<input type="text" name="url"/>
                                            			<div class="alert">
                                                    		输入网址的时候请加入"http://"
                                                		</div>
                                       				</div>
                                    			</div>
                                    			<div class="control-group">
                                        			<label class="control-label">描述</label>
                                        			<div class="controls">
                                            			<textarea name="desc" style="height:150px"></textarea>
                                       				</div>
                                    			</div>
                                    			<div class="control-group">
                                        			<label class="control-label">选择图片(规格：325x170px)</label>
                                        			<div class="controls">
                                            		<input type="file" name="photo"  />				
                                    				</div>
													<div style="width:545px;text-align:center;padding-top:10px">
											    		<input type="submit" value="确定" class="btn btn-primary" />
														<button class="btn" data-dismiss="modal" class="close">取消</button>
													</div>
												</div>
											</form>
									</div>
								</div>
							</div>
						</div>
							
							<div class="widget-content nopadding">
								<form action="<?php echo U('Module/setSort','','');?>" method="post" class="form-horizontal"/>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>排序</th>
											<th>标题</th>
											<th>描述</th>
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
												<div class="title" style="text-overflow:ellipsis;">
												<?php echo ($vo["title"]); ?>
												</div>
											</td>
											<!--<td style="width:250px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">-->
											<td>
												<div class="word" style="text-overflow:ellipsis;">
													<?php echo ($vo["desc"]); ?>
												</div>
											</td>
											<td>
												<?php if($vo["status"] == 0): ?>隐藏
													<?php else: ?>
													显示<?php endif; ?>
											</td>
											<td>
												<?php echo (date("y-m-d",$vo["create_time"])); ?>
											</td>
											<td>
												<!-- 操作按钮 -->
												<a href="#set_info<?php echo ($vo["id"]); ?>" data-toggle="modal" class="btn"><i class="icon-cog"></i>预览</a>
											
												<?php if($vo["status"] == 0): ?><a href="<?php echo U('Module/setStatus','id='.$vo['id'],'');?>"   class="btn btn-primary"><i class="icon-eye-open icon-white">
													</i>显示</a>
													<?php else: ?><a href="<?php echo U('Module/setStatus','id='.$vo['id'],'');?>"   class="btn btn-info"><i class="icon-eye-open icon-white"></i>隐藏</a><?php endif; ?>


												<a href="#editModule<?php echo ($vo["id"]); ?>" class="btn" data-toggle="modal"><i class="icon-wrench">
												</i>修改</a>

												<a href="#deleteModule<?php echo ($vo["id"]); ?>" data-toggle="modal" class="btn"><i class="icon-remove"></i>删除</a>
												<a href="#reupload<?php echo ($vo["id"]); ?>" data-toggle="modal" class="btn"><i class="icon-asterisk"></i>重新上传</a>

												<!--资讯详情-->
												<div id="set_info<?php echo ($vo["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>板块详情</h3>
														</div>
									            		<div class="modal-body">
															<div class="control-group">
															<div class="modal-body">
																<?php if($vo["image"] != ''): ?><img src="<?php echo ($vo["image"]); ?>" style="width:250px;height:150px"><?php endif; ?>   	
															</div>
															<p>标题：<?php echo ($vo["title"]); ?></p><br />
															<p>跳转链接：<?php echo ($vo["url"]); ?></p><br />
															<p>描述：<?php echo ($vo["desc"]); ?></p>
																<form class="form-horizontal"  />
                                    								
                                    								
                                    								<div style="width:545px;text-align:center;padding-top:10px">
																		<button class="btn" data-dismiss="modal" class="close">返回</button>
														   			 </div>
                                    							</form>
															</div>
														</div>
													</div>
												

												<!--资讯删除-->
												<div id="deleteModule<?php echo ($vo["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p>确定要删除吗？</p>
														</div>
														<div class="modal-footer">
															<form class="form-horizontal" method="post" action="<?php echo U('Module/deleteModule','','');?>"  />
														    <input type="hidden" name="id"  value="<?php echo ($vo["id"]); ?>" />
														    <input type="submit" value="确定" class="btn btn-primary" />
														    <a data-dismiss="modal" class="btn" href="#">取消</a>
															</form>
														</div>
												</div>

												<!--重新上传图片框-->
												<div id="reupload<?php echo ($vo["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>重新上传</h3>
														</div>
									            		<div class="modal-body">
															<div class="control-group">
																<form class="form-horizontal" method="post" action="<?php echo U('Module/reUploadPicture','','');?>"  enctype="multipart/form-data" />
                                    								 
                                  								  	<div class="control-group">
                                        								<label class="control-label">重新选择图片(规格：325x170px)</label>
                                        								<div class="controls">
                                            								<input type="file" name="photo"  />
                                            								<input type="hidden" name="id"  value="<?php echo ($vo["id"]); ?>" />
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


													<!--板块的修改-->


								<div id="editModule<?php echo ($vo["id"]); ?>" class="modal hide">
									<div class="modal-header">
										<button data-dismiss="modal" class="close" type="button">×</button>
										<h3>修改展示模块</h3>
									</div>		
									<div class="modal-body">
										<div class="control-group">
											<form method="post" action="<?php echo U('Module/saveModule','','');?>"   class="form-horizontal" enctype="multipart/form-data"/>
												<div class="control-group">
                                        		<label class="control-label">标题</label>
                                        		<div class="controls">
                                            		<input type="text" name="title" value="<?php echo ($vo["title"]); ?>"/>
                                       			</div>
                                    	</div>
                                    	<div class="control-group">
                                        	<label class="control-label">跳转链接</label>
                                        	<div class="controls">
                                            	<input type="text" name="url" value="<?php echo ($vo["url"]); ?>" />
                                            	<div class="alert">
                                                    		输入网址的时候请加入"http://"
                                                		</div>
                                       		</div>
                                    	</div>
                                    	<div class="control-group">
                                        	<label class="control-label">描述</label>
                                        	<div class="controls">
                                            	<textarea name="desc" style="height:120px"><?php echo ($vo["desc"]); ?></textarea>
                                       		</div>
                                    	</div>
                                    	<div class="control-group">
                                        	<label class="control-label">选择图片</label>
                                        	<div class="controls">
                                            <input type="file" name="photo"  />
                                            <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"/>
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
						2014 &copy; 上伦服装有限公司</a>
					</div>
				</div>
			</div>
		</div>
            
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