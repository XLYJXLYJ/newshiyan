<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/uniform.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/select2.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
 -->
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/jquery.gritter.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/uniform.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/select2.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
		<link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/add_manger.css" />
		
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
								<h5>页面列表</h5>
								<div style="float:right;margin-right:50px">
									<a href="#addFatherType" data-toggle="modal"><span class="label">添加页面</span></a>
								</div>
								<!-- 添加一级分类弹出框 -->
								<div id="addFatherType" class="modal hide">
									<div class="modal-header">
										<button data-dismiss="modal" class="close" type="button">×</button>
										<h3>添加页面</h3>
									</div>
									<div class="modal-body">
										<div class="control-group">
											<form class="form-horizontal" method="post" action="<?php echo U('Category/addCate','','');?>"   />
                                    			<div class="control-group">
                                        			<label class="control-label">名称</label>
                                        			<div class="controls">
                                            			<input type="text" name="name"  value="" />
                                            			<input type="hidden" name="parentid"  value="0" />
                                            			<input type="hidden" name="depth"  value="0" />
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
								<form action="<?php echo U('Category/editSort','','');?>" method="post" class="form-horizontal" enctype="multipart/form-data" name="newsaddform" onsubmit="return checknews()" />
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
										
											<th>排序</th>
											<th>名称</th>
											<th>备注</th>
											<th>在侧边栏显示</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>
											
										<!-- php标签库，foreach循环 -->
										<?php if(is_array($list)): foreach($list as $key=>$type): ?><!-- 子类循环 -->
   	 							        <tr>

											<td>
												<?php if($type["depth"] > 1): $__FOR_START_29419__=1;$__FOR_END_29419__=$type["depth"];for($i=$__FOR_START_29419__;$i < $__FOR_END_29419__;$i+=1){ ?>┣<?php } endif; ?>
												<input type="text" name="<?php echo ($type["id"]); ?>" value="<?php echo ($type["sorted"]); ?>" style="width:20px" />
											</td>
											<td>
											<?php if($type["depth"] > 1): $__FOR_START_14408__=1;$__FOR_END_14408__=$type["depth"];for($i=$__FOR_START_14408__;$i < $__FOR_END_14408__;$i+=1){ ?>┣<?php } endif; ?>
											<?php echo ($type["name"]); ?></td>
											
											<td>
												<?php echo ($type["depth"]); ?>  级页面
											</td>
											<td>
												<?php if($type["status"] == 0): ?>隐藏
													<?php else: ?>显示<?php endif; ?>
											</td>
											<td>
											<!-- 操作按钮 -->
											<a href="<?php echo U('Category/edit_cate','id='.$type['id'],'');?>"   class="btn"><i class="icon-wrench">
											</i>编辑</a>
											<!--设置分类是否可见的按钮-->
											<?php if($type["status"] == 0): if($type["content"] != null): ?><a href="<?php echo U('Category/setStatus','id='.$type['id'],'');?>" class="btn btn-primary"><i class="icon-eye-open icon-white"></i>显示</a>
													<?php else: ?>
														<a href="#alertStatus<?php echo ($type["id"]); ?>" data-toggle="modal" class="btn btn-primary" ><i class="icon-eye-open icon-white"></i>显示</a><?php endif; ?>
											<?php else: ?>
												<a href="<?php echo U('Category/setStatus','id='.$type['id'],'');?>" class="btn btn-info"><i class="icon-eye-open icon-white">
												</i>隐藏</a><?php endif; ?>
											<?php if($type["id"] != 1): ?><a href="#deleteAlert<?php echo ($type["id"]); ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-remove icon-white"></i>删除</a>
											<?php if($type["depth"] == 1): ?><a href="#addChildType<?php echo ($type["id"]); ?>" data-toggle="modal"  class="btn btn-success" ><i class="icon-plus icon-white"></i>添加子页面</a><?php endif; endif; ?>
   
										
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
												

												
												<!-- 删除弹出框-->
													<div id="deleteAlert<?php echo ($type["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p>确定要删除吗？</p>
														</div>
														<div class="modal-footer">
															<form class="form-horizontal" method="post" action="<?php echo U('Category/deleteCate','','');?>"  />
														    <input type="hidden" name="id"  value="<?php echo ($type["id"]); ?>" />
														    <input type="submit" value="确定" class="btn btn-primary" />
														    <a data-dismiss="modal" class="btn" href="#">取消</a>
															</form>
															
														</div>
													</div>
													<!--提醒用户编辑内容-->
													<div id="alertStatus<?php echo ($type["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p><?php echo ($type["name"]); ?>页面内容为空，请先修改内容</p>
														</div>
														<div class="modal-footer">
														    <a data-dismiss="modal" class="btn" href="#">确定</a>
															</form>
															
														</div>
													</div>
													<!-- 添加子分类弹出框 -->
													<div id="addChildType<?php echo ($type["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>添加<?php echo ($type["name"]); ?>的子页面</h3>
														</div>
									            		<div class="modal-body">
															<div class="control-group">
																<form class="form-horizontal" method="post" action="<?php echo U('Category/addCate','','');?>"/>
                                    								<div class="control-group">
                                        								<label class="control-label">名称</label>
                                        								<div class="controls">
                                            								<input type="text" name="name"  value="" />
                                            								<input type="hidden" name="parentid"  value=<?php echo ($type["id"]); ?> />
                                            								<input type="hidden" name="depth"  value=<?php echo ($type["depth"]); ?> />
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

											</td>
										</tr><?php endforeach; endif; ?>

									</tbody>
								</table>
								<div class="form-actions">
										<button type="submit" class="btn btn-primary" style="margin-left:-162px">排序</button>
									</div>
								</form>	
							</div>
						</div>		
					</div>
				</div>
				<div class="row-fluid">
					
				</div>


				

				<div class="row-fluid">
					<div id="footer" class="span12">
						2015 &copy; OYES</a>
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