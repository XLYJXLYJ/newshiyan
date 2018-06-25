<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    
    <title>石岩纪检</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/uniform.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/select2.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/unicorn.main.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/unicorn.grey.css" class="skin-color" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .tc{text-align: center;}
        .page a{margin: 0 5px;}
        .mgb0{margin-bottom: 0!important}
        .w35{width: 35px}
        .cen{margin: 0 auto}
        .pd50{padding: 50px}
        .w300{width: 300px}
        .mgb30{margin-bottom: 30px}
        .mgr20{margin-right: 20px}
    </style>
</head>
<body>

        <div id="header">
        <h2 style="color:#FFFFFF">石岩纪检</h2>
    </div>
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav btn-group">
            <li class="btn btn-inverse">
                <a title="" href="<?php echo U('Login/logout','','');?>"> <i class="icon icon-share-alt"></i>
                    <span class="text">退出</span>
                </a>
            </li>
        </ul>
    </div>

    <span id="sidebar_active" style="display: none;">report</span>
    <div id="sidebar">
	<a href="#" class="visible-phone"><i class="icon icon-home"></i>
		系统管理
	</a>
	<ul>
		<li>
			<a href="<?php echo U('Index/index','','');?>">
				<i class="icon icon-user"></i>
				<span>账户管理</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Report/reportList?scale=2');?>">
				<i class="icon icon-user"></i>
				<span>举报管理</span>
			</a>
		</li>
	</ul>
</div>
<script type="text/javascript">
	!function(){
		var sdb_sort={'index':0,'report':1};
		var num=sdb_sort[document.getElementById('sidebar_active').innerHTML];
		document.getElementById('sidebar').getElementsByTagName('li')[num].className="active";
	}();
</script>

    <div id="content">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div>
                        <?php if($scale == 1): ?><a href="<?php echo U('Report/reportList');?>" class="btn btn-primary">全部</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList');?>" class="btn btn-info">全部</a><?php endif; ?>
                        <?php if($scale == 2): ?><a href="<?php echo U('Report/reportList',array('scale'=>2));?>" class="btn btn-primary">未回复</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>2));?>" class="btn btn-info">未回复</a><?php endif; ?>
                        <?php if($scale == 3): ?><a href="<?php echo U('Report/reportList',array('scale'=>3));?>" class="btn btn-primary">已回复</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>3));?>" class="btn btn-info">已回复</a><?php endif; ?>
                        <a href="<?php echo U('Report/timeSearch');?>" class="btn btn-primary">时间搜索</a>
                        <div style="float: right;">
                            <input id="keyword" type="text" value="<?php echo ($keyword); ?>" style="vertical-align: top;margin-right: 10px" placeholder="可根据举报中一切内容查找">
                            <div id="searchBtn" class="btn btn-success">搜索</div>
                            <script>
                                !function(){
                                    document.getElementById('searchBtn').onclick=search;
                                    document.getElementById('keyword').onfocus=function(){
                                        document.onkeydown=function(event){
                                            var e=event||window.event||arguments.callee.caller.arguments[0]; 
                                           if(e.keyCode==13)search();
                                        }
                                    }
                                    function search(){
                                    var keyword=document.getElementById('keyword').value;
                                    if(keyword==''){
                                        alert('关键字不能为空');
                                        return false;
                                    }
                                    var url="<?php echo U('Report/reportList',array('keyword'=>temp));?>";
                                    url=url.replace('temp',keyword);
                                    window.location.href=url;
                                    }
                                }()
                            </script>
                        </div>
                    </div>
                    <div class="widget-box pd50" style="height: 300px">
                        <div class="mgb30">
                            <input type="text" class="w35 mgb0" name="">
                            <span>年</span>
                            <input type="text" class="w35 mgb0">
                            <span>月</span>
                            <input type="text" class="w35 mgb0">
                            <span class="mgr20">日</span>
                            <input type="submit" class="btn btn-success" value="搜索" />
                        </div>
                        <div>
                            <input type="text" class="w35 mgb0">
                            <span>年</span>
                            <input type="text" class="w35 mgb0">
                            <span>月</span>
                            <input type="text" class="w35 mgb0">
                            <span class="mgr20">日</span>
                            <span>~</span>
                            <input type="text" class="w35 mgb0">
                            <span>年</span>
                            <input type="text" class="w35 mgb0">
                            <span>月</span>
                            <input type="text" class="w35 mgb0">
                            <span class="mgr20">日</span>
                            <input type="submit" class="btn btn-success" value="搜索" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/jquery.min.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/jquery.ui.custom.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/bootstrap.min.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/jquery.uniform.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/select2.min.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/jquery.validate.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/jquery.wizard.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/unicorn.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/unicorn.wizard.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/unicorn.form_validation.js"></script>

</body>
</html>