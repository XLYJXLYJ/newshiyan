<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    
    <title>石岩街道纪检</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/uniform.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/select2.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/unicorn.main.css" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/unicorn.grey.css" class="skin-color" />
    <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/common.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="/shiyanjijian/Admin/Home/View/Public/js/yang.js"></script>
    <script src="/shiyanjijian/Admin/Home/View/Public/js/common.js"></script>
</head>
<body>

        <div id="header" style="height: auto;padding-top: 10px;border:none;">
        <img src="/shiyanjijian/Admin/Home/View/Public/img/logo.jpg" style="width: 60px;margin-top: 10px" class="mg10" alt="">
        <span class="f46 pa c_white fwb" style="font-family: STLiti;top: 45px">廉洁石岩</span>
    </div>
    <div id="user-nav" class="navbar navbar-inverse" style="top: 20px">
        <ul class="nav btn-group">
            <li class="btn btn-inverse">
                <a title="" href="<?php echo U('Login/logout','','');?>"><i class="icon icon-share-alt"></i>
                    <span class="text" style="color: white">退出</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- <div id="header" style="height: auto;padding-top: 10px;border:none;background: white;">
        <img src="/shiyanjijian/Admin/Home/View/Public/img/logo.jpg" style="width: 60px;margin-top: 10px" class="mg10" alt="">
        <span class="f46 ver_mid fwb" style="font-family: '华文隶书' ">廉洁石岩</span>
    </div>
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav btn-group">
            <li class="btn btn-inverse bg_blue">
                <a title="" href="<?php echo U('Login/logout','','');?>"><i class="icon icon-share-alt"></i>
                    <span class="text c_white">退出</span>
                </a>
            </li>
        </ul>
    </div> -->

    <span id="sidebar_active" style="display: none;">clean</span>
    <!-- <div id="sidebar">
	<ul style="border:0;margin: 0">
		<li style="border:none">
			<a href="<?php echo U('Index/index','','');?>" class="bg_blue">
				<i class="icon icon-user c_white"></i>
				<span class="c_white">账户管理</span>
			</a>
		</li>
		<li style="border:none">
			<a href="<?php echo U('Report/reportList?scale=2');?>" class="bg_blue">
				<i class="icon icon-user c_white"></i>
				<span class="c_white">举报管理</span>
			</a>
		</li>
	</ul>
</div> -->
<div id="sidebar">
	<ul>
		<li>
			<a href="<?php echo U('Index/index','','');?>">
				<i class="icon icon-user"></i>
				<span class="c_white">账户管理</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Report/reportList?scale=1');?>">
				<i class="icon icon-list-alt"></i>
				<span class="c_white">举报管理</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Article/ArticleUnscramble');?>">
				<i class="icon icon-list-alt"></i>
				<span class="c_white">条文解读</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Study/StudyAnswer');?>">
				<i class="icon icon-list-alt"></i>
				<span class="c_white">学习问答</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Warning/WarningExposure');?>">
				<i class="icon icon-list-alt"></i>
				<span class="c_white">警示曝光</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Video/VideoEducation');?>">
				<i class="icon icon-list-alt"></i>
				<span class="c_white">视频教育</span>
			</a>
		</li>
		<li>
			<a href="<?php echo U('Clean/CleanCulture');?>">
				<i class="icon icon-list-alt"></i>
				<span class="c_white">廉洁文化</span>
			</a>
		</li>
	</ul>
</div>
<script type="text/javascript">
	!function(){
		var sdb_sort={'index':0,'report':1,'article':2,'study':3,'warning':4,'video':5,'clean':6};
		var num=sdb_sort[document.getElementById('sidebar_active').innerHTML];
		console.log(sdb_sort);
		console.log(document.getElementById('sidebar_active').innerHTML);
		console.log(num);
		document.getElementById('sidebar').getElementsByTagName('li')[num].className="active";
		// document.getElementById('sidebar').getElementsByTagName('a')[num].className="bg_blue2";
	}();
</script>

    <div id="content">
        <form class="form-horizontal" role="form" action="<?php echo U('Clean/CleanAdd');?>" method="post" enctype="multipart/form-data">
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">主题</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">文章缩略图</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="c_img"  type="file">
                </div>
            </div>   
            
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目1</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title1" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图1</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img1"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目2</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title2" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图2</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img2"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目3</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title3" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图3</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img3"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目4</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title4" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图4</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img4"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目5</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title5" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图5</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img5"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目6</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title6" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图6</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img6"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目7</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title7" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图7</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img7"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目8</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title8" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图8</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img8"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目9</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title9" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图9</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img9"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20 pdt20">
                <label for="name" class="col-sm-2">题目10</label>
                <div>
                    <input class="form-control" id="username" placeholder="" name="c_title10" required="" type="text">
                </div>
            </div>
            <div class="form-group mgb20">
                <label for="name" class="col-sm-2">图10</label>
                <div class="col-sm-6">
                <input  placeholder="" class="form-control" name="cc_img10"  type="file">
                </div>
            </div> 
            <div class="form-group mgb20">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-default bg_blue01 c_white center">下一步</button>
                </div>
            </div>
        </form>

    </div>
    <div class="c9 lh50 tc">Copyright © 深圳市宝安区石岩街道纪工委. All Rights Reserved 未经同意 请勿转载</div>
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
<style>
    #content{
        padding-left: 10%;
    }
    .Clean{
        min-height: 200px;
    }
    .center{
        margin-left: 38%;
    }
    .center:hover{
        margin-left: 38%;
        background:#285FC1!important;
        color: #fff;
    }
</style>
</html>