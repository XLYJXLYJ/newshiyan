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
    <script src="/shiyanjijian/Admin/Home/View/Public/js/yang.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/common.js"></script>
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
        .c_red{color: red}
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
                        <a href="<?php echo U('Report/timePage');?>" class="btn btn-primary">时间搜索</a>
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
                            <form id="form1" method="post">
                                <input type="text" name="type" value="1" style="display: none;">
                                <input type="text" id="f1y" class="w35 mgb0 need_check_empty" name="year">
                                <span>年</span>
                                <input type="text" id="f1m" class="w35 mgb0 need_check_empty" name="month">
                                <span>月</span>
                                <input type="text" id="f1d" class="w35 mgb0 need_check_empty" name="day">
                                <span class="mgr20">日</span>
                                <a id="searchBtn1" class="btn btn-success">搜索</a>
                                <script>
                                    !function(){
                                        document.getElementById("searchBtn1").onclick=function(){
                                            if(verify.empty('#form1')==false)return false;
                                            var year=document.getElementById('f1y').value;
                                            var month=document.getElementById('f1m').value;
                                            var day=document.getElementById('f1d').value;
                                            if(/^\d\d\d\d$/.test(year)==false){
                                                alert("输入正确年份");return false;
                                            }
                                            if(year<1970||year>2037){
                                                alert("年份范围1970-2037");return false;
                                            }
                                            if(/^[0,1]\d$/.test(month)==false||month>12||month<1){
                                                alert("输入正确月份");return false;
                                            }
                                            if(/^\d\d$/.test(day)==false||day>31||day<1){
                                                alert("输入正确日期");return false;
                                            }
                                            var url="<?php echo U('Report/timeSearch',array('type'=>1,'year'=>'ty1','month'=>'tm1','day'=>'td1'));?>";
                                            url=url.replace('ty1',year);
                                            url=url.replace('tm1',month);
                                            url=url.replace('td1',day);
                                            window.location.href=url;
                                        }
                                    }()
                                </script>
                            </form>
                        </div>
                        <div class="mgb30">
                            <form method="post" id="form2">
                                <input type="text" name="type" value="2" style="display: none;">
                                <input type="text" class="w35 mgb0 need_check_empty" id="f2y1">
                                <span>年</span>
                                <input type="text" class="w35 mgb0 need_check_empty" id="f2m1">
                                <span>月</span>
                                <input type="text" class="w35 mgb0 need_check_empty" id="f2d1">
                                <span class="mgr20">日</span>
                                <span>~</span>
                                <input type="text" class="w35 mgb0 need_check_empty" id="f2y2">
                                <span>年</span>
                                <input type="text" class="w35 mgb0 need_check_empty"  id="f2m2">
                                <span>月</span>
                                <input type="text" class="w35 mgb0 need_check_empty" id="f2d2">
                                <span class="mgr20">日</span>
                                <a id="searchBtn2" class="btn btn-success">搜索</a>
                                <script>
                                    !function(){
                                        document.getElementById('searchBtn2').onclick=function(){
                                            if(verify.empty('#form2')==false)return false;
                                            var year1=document.getElementById('f2y1').value;
                                            var year2=document.getElementById('f2y2').value;
                                            var month1=document.getElementById('f2m1').value;
                                            var month2=document.getElementById('f2m2').value;
                                            var day1=document.getElementById('f2d1').value;
                                            var day2=document.getElementById('f2d2').value;
                                            if(/^\d\d\d\d$/.test(year1)==false){
                                                alert("输入正确年份");return false;
                                            }
                                            if(year1<1970||year1>2037){
                                                alert("年份范围1970-2037");return false;
                                            }
                                             if(/^[0,1]\d$/.test(month1)==false||month1>12||month1<1){
                                                alert("输入正确月份");return false;
                                            }
                                            if(/^\d\d$/.test(day1)==false||day1>31||day1<1){
                                                alert("输入正确日期");return false;
                                            }
                                            if(/^\d\d\d\d$/.test(year2)==false){
                                                alert("输入正确年份");return false;
                                            }
                                            if(year2<1970||year2>2037){
                                                alert("年份范围1970-2037");return false;
                                            }
                                             if(/^[0,1]\d$/.test(month2)==false||month2>12||month2<1){
                                                alert("输入正确月份");return false;
                                            }
                                            if(/^\d\d$/.test(day2)==false||day2>31||day2<1){
                                                alert("输入正确日期");return false;
                                            }
                                            var url="<?php echo U('Report/timeSearch',array('type'=>2,'year1'=>'ty1','year2'=>'ty2','month1'=>'tm1','month2'=>'tm2','day1'=>'td1','day2'=>'td2'));?>";
                                            url=url.replace('ty1',year1);
                                            url=url.replace('ty2',year2);
                                            url=url.replace('tm1',month1);
                                            url=url.replace('tm2',month2);
                                            url=url.replace('td1',day1);
                                            url=url.replace('td2',day2);
                                            window.location.href=url;
                                        }
                                    }()
                                </script>
                            </form>
                        </div>
                        <p class="c_red">格式：2016-01-01</p>
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