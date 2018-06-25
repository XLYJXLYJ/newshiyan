<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/jquery.gritter.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/uniform.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/select2.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/unicorn.main.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/add_manger.css" />

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
				<li class="active">
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
						<!--服务器基本信息-->
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th-large"></i>
								</span>
								<h5>服务器基本信息</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>名称</th>
											<th>值</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>服务器</td>
											<td><?php echo ($server); ?></td>
										</tr>
										<tr>
											<td>系统</td>
											<td><?php echo ($system); ?></td>
										</tr>
										<tr>
											<td>php版本</td>
											<td><?php echo ($phpversion); ?></td>
										</tr>
										<tr>
											<td>数据库类型</td>
											<td><?php echo ($db_name); ?></td>
										</tr>
										<tr>
											<td>服务器ip</td>
											<td><?php echo ($ip); ?></td>
										</tr>
									<!--	<tr>
											<td>总内存/可用内存</td>
											<td><?php echo ($memory['Total']); ?>/<?php echo ($memory['Free']); ?></td>
										</tr>
										<tr>
											<td>物理内存</td>
											<td>
												<div class="progress progress-danger">
													<div style="width: <?php echo (substr($memory['usage'],0,4)); ?>%;" class="bar"></div><?php echo (substr($memory['usage'],0,4)); ?>%
												</div>
											</td>
										</tr>-->
									</tbody>
								</table>
							</div>
						</div>
						<!--总的访客数-->
						<ul class="site-stats">
							<li><i class="icon-user"></i> <strong><?php echo ($visitor["count"]); ?></strong> <small>总访客数</small></li>
						</ul>
						<!--过去七天的访客情况-->
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class=" icon-align-justify"></i>
								</span>
								<h5>过去七天的访客情况</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>日期</th>
											<th>访客数</th>
										</tr>
									</thead>
									<tbody>
										<?php if(is_array($visitor["detail"])): foreach($visitor["detail"] as $key=>$vo): ?><tr>
												<td><?php echo (date("y-m-d",$vo["date"])); ?></td>
												<td><?php echo ($vo["count"]); ?></td>
											</tr><?php endforeach; endif; ?>
									</tbody>
								</table>
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