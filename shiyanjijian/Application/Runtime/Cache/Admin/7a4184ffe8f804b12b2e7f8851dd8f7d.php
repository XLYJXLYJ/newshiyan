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

		<style type="text/css">
			div.campany{
				white-space:nowrap; 
				width:20em; 
 				overflow:hidden;
			}
		</style>

		<script type="text/javascript">
			function changeStatus(id){
				var http;
				if (window.XMLHttpRequest){
					// code for IE7+, Firefox, Chrome, Opera, Safari
  					http=new XMLHttpRequest();
  				}else{
  					// code for IE6, IE5
  					http=new ActiveXObject("Microsoft.XMLHTTP");
  				}

  				http.onreadystatechange=function(){
  					if (http.readyState==4 && http.status==200){
    					//document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    					//document.getElementById("changeStatus").click();
    					//window.location.assign();
    					//alert('修改状态成功');
    					//alert(http.responseText);
    				}
  				}

  				http.open("GET","<?php echo U('Aliance/setStatus','','');?>"+"/id/" + id,true);
				http.send();
			}
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
                <li>
                    <a href="<?php echo U('Aliance/index','','');?>"><i class="icon icon-file"></i> <span>联盟管理</span></a>
                </li>
                <li class="active">
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
								<h5>文章列表</h5>
								<div style="float:right;margin-right:50px">
									<a href="#addFatherType" data-toggle="modal"><span class="label">添加文章</span></a>
								</div>

								<!-- 添加一级分类弹出框 -->
								<div id="addFatherType" class="modal hide">
									<div class="modal-header">
										<button data-dismiss="modal" class="close" type="button">×</button>
										<h3>添加文章</h3>
									</div>
									<div class="modal-body">
										<div class="control-group">
											<form class="form-horizontal" method="post" action="<?php echo U('Article/addArticle','','');?>"  enctype="multipart/form-data" />
                                    			<div class="control-group">
                                        			<label class="control-label">标题</label>
                                        			<div class="controls">
                                            			<input type="text" name="title"  value="" />
                                					</div>
                                    			</div>
                              					<div class="control-group">
                                        			<label class="control-label">作者</label>
                                        			<div class="controls">
                                            			<input type="text" name="author"  value="" />
                                					</div>
                                    			</div>
                                    			<div class="control-group">
													<label class="control-label">描述</label>
													<div class="controls">
														<textarea name="description" rows="4"></textarea>
													</div>
												</div>
                                    			 <div class="control-group">
                                       				 <label class="control-label">文章图片</label>
                                       				 <div class="controls">
                                            			<input type="file" name="photo"   />
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
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>标题</th>
											<th>发布时间</th>
											<th>阅读次数</th>
											<th>状态</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($list)): foreach($list as $key=>$article): ?><tr>
												<td>
													<div class="campany" style="text-overflow:ellipsis;"><?php echo ($article["title"]); ?></div>
												</td>
												<td><?php echo (date("y-m-d",$article["create_time"])); ?></td>
												<td>
													<?php if($article["reading_times"] == ''): ?>0
														<?php else: echo ($article["reading_times"]); ?>+<?php echo ($article["add_read"]); endif; ?>
												</td>
												<td>
													<?php if($article["status"] == 0): ?>未发布
														<?php else: ?>已发布<?php endif; ?>
												</td>
												<td>
													<a href="<?php echo U('Article/edit_article','id='.$article['id'],'');?>" class="btn"><i class="icon-wrench"></i>编辑</a>
													<?php if($article["status"] == 0): if($article["content"] != null): ?><a href="<?php echo U('Article/changeStatus','id='.$article['id'],'');?>" class="btn btn-primary"><i class="icon-eye-open icon-white"></i>显示</a>
															<?php else: ?><a href="#alertStatus<?php echo ($article["id"]); ?>" data-toggle="modal" class="btn btn-primary" ><i class="icon-eye-open icon-white"></i>显示</a><?php endif; ?>
													<?php else: ?><a href="<?php echo U('Article/changeStatus','id='.$article['id'],'');?>" class="btn btn-info "><i class=" icon-eye-close icon-white"></i>隐藏</a><?php endif; ?>
													
													<a href="#reupload<?php echo ($article["id"]); ?>" data-toggle="modal" class="btn btn-success"><i class="icon-picture icon-white"></i>修改文章图片</a>
													<a href="#deleteAlert<?php echo ($article["id"]); ?>" data-toggle="modal" class="btn btn-danger"><i class="icon-remove"></i>删除</a>
													<!--提醒用户编辑内容-->
													<div id="alertStatus<?php echo ($article["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p><?php echo ($article["title"]); ?>文章内容为空，请先修改内容</p>
														</div>
														<div class="modal-footer">
														    <a data-dismiss="modal" class="btn" href="#">确定</a>
															</form>
															
														</div>
													</div>
													<!-- 删除弹出框-->
													<div id="deleteAlert<?php echo ($article["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p>确定要删除吗？</p>
														</div>
														<div class="modal-footer">
															<form class="form-horizontal" method="post" action="<?php echo U('Article/deleteArticle','','');?>"  />
														    <input type="hidden" name="id"  value="<?php echo ($article["id"]); ?>" />
														    <input type="submit" value="确定" class="btn btn-primary" />
														    <a data-dismiss="modal" class="btn" href="#">取消</a>
															</form>
														</div>
													</div>
													<!-- 重新上传文章图片-->
													<div id="reupload<?php echo ($article["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>上传</h3>
														</div>
														<div class="modal-body">
															<form class="form-horizontal" method="post" action="<?php echo U('Article/reUploadPicture','','');?>"  enctype="multipart/form-data" />
															<div class="control-group">
																<?php if($article["image"] != null): ?><img src="<?php echo ($article["image"]); ?>" style="width:100px;height:100px">
																	<?php else: ?><label >该文章还没有图片，请上传</label><?php endif; ?>
															</div>
															<div class="control-group">
                                       							 <label class="control-label">文章图片</label>
                                       				 			<div class="controls">
                                            					<input type="file" name="photo"   />
                                        						</div>
                                    						</div>
														    <input type="hidden" name="id"  value="<?php echo ($article["id"]); ?>" />
														</div>
														<div class="modal-footer">
															 <input type="submit" value="确定" class="btn btn-primary" />
														    <a data-dismiss="modal" class="btn" href="#">取消</a>
															</form>
														</div>
													</div>
												</td>
											</tr><?php endforeach; endif; ?>
									</tbody>
								</table>					
							</div>
							<div class="pagination alternate" style="float:right">
								<?php echo ($page); ?>
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