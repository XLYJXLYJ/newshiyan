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
				width:10em; 
 				overflow:hidden;
			}
			div.product{
				white-space:nowrap; 
				width:5em; 
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
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>联盟列表</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>公司名称</th>
											<th>联系人</th>
											<th>手机号码</th>
											<th>主营产品</th>
											<th>状态</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($list)): foreach($list as $key=>$aliance): ?><tr>
												<td>
													<div class="campany" style="text-overflow:ellipsis;"><?php echo ($aliance["campany_name"]); ?></div>
												</td>
												<td><?php echo ($aliance["contacts"]); ?></td>
												<td><?php echo ($aliance["phones"]); ?></td>
												<td>
													<div class="product" style="text-overflow:ellipsis;"><?php echo ($aliance["main_product"]); ?></div>
												</td>
												<td>
													<?php if($aliance["status"] == 0): ?>未读
														<?php else: ?>已读<?php endif; ?>
												</td>
												<td>
													<?php if($aliance["status"] == 0): ?><a href="<?php echo U('Aliance/show_detail','id='.$aliance['id'],'');?>" onclick="changeStatus(<?php echo ($aliance["id"]); ?>)" class="btn"><i class="icon-wrench"></i>查看</a>
														<?php else: ?><a href="<?php echo U('Aliance/show_detail','id='.$aliance['id'],'');?>"  class="btn"><i class="icon-wrench"></i>查看</a><?php endif; ?>
													
													<a href="#deleteAlert<?php echo ($aliance["id"]); ?>" data-toggle="modal" class="btn"><i class="icon-remove"></i>删除</a>
													<!-- 删除弹出框-->
													<div id="deleteAlert<?php echo ($aliance["id"]); ?>" class="modal hide">
														<div class="modal-header">
															<button data-dismiss="modal" class="close" type="button">×</button>
															<h3>提示信息</h3>
														</div>
														<div class="modal-body">
															<p>确定要删除吗？</p>
														</div>
														<div class="modal-footer">
															<form class="form-horizontal" method="post" action="<?php echo U('Aliance/deleteAliance','','');?>"  />
														    <input type="hidden" name="id"  value="<?php echo ($aliance["id"]); ?>" />
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