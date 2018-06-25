<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    
    <title>石岩街道纪检</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/uniform.css" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/select2.css" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/unicorn.main.css" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/unicorn.grey.css" class="skin-color" />
    <link rel="stylesheet" href="/Admin/Home/View/Public/css/common.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="/Admin/Home/View/Public/js/yang.js"></script>
    <script src="/Admin/Home/View/Public/js/common.js"></script>
</head>
<body>

        <div id="header" style="height: auto;padding-top: 10px;border:none;">
        <img src="/Admin/Home/View/Public/img/logo.jpg" style="width: 60px;margin-top: 10px" class="mg10" alt="">
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
        <img src="/Admin/Home/View/Public/img/logo.jpg" style="width: 60px;margin-top: 10px" class="mg10" alt="">
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

    <span id="sidebar_active" style="display: none;">report</span>
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
	</ul>
</div>
<script type="text/javascript">
	!function(){
		var sdb_sort={'index':0,'report':1};
		var num=sdb_sort[document.getElementById('sidebar_active').innerHTML];
		document.getElementById('sidebar').getElementsByTagName('li')[num].className="active";
		// document.getElementById('sidebar').getElementsByTagName('a')[num].className="bg_blue2";
	}();
</script>

    <div id="content">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"> <i class="icon-align-justify"></i>
                            </span>
                            <h5>举报回复</h5>
                            <div style="float:right;margin-right:50px">
                                <a onclick="history.go(-1)" class="label" id="return" >返回</a>
                            </div>
                        </div>
                        <div class="widget-content nopadding">
                            <form id="replyForm" method="post"  class="form-horizontal">
                                <p id="reply" style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">回复</p>
                                <div class="control-group">
                                    <input type="text" id="id" name="id" value="<?php echo ($data['id']); ?>" style="display: none;">
                                    <textarea id="replyContain" name="reply" style="display: block;margin-right: auto;margin-left: auto;resize: none;margin-bottom: 20px" cols="30" rows="10"><?php echo ($data['result']); ?></textarea>
                                </div>
                                <div style="text-align: center;margin-bottom: 20px">
                                    <a onclick="history.go(-1)" class="btn btn-info">返回</a>
                                    <div id="sendBtn" class="btn btn-success">回复</div>
                                </div>
                                <script>
                                    !function(){
                                        function updReply(){
                                            if(document.getElementById('replyContain').value==""){alert("回复不能为空。");return false;}
                                            var id=document.getElementById('id').value;
                                            var reply=document.getElementById('replyContain').value;
                                            $.post(
                                                "<?php echo U('Report/updateReply');?>",
                                                {
                                                    'id':id,
                                                    'reply':reply
                                                },
                                                function(data){
                                                if(data==1){
                                                    window.location.href="<?php echo U('Report/reportList',array('scale'=>3));?>";
                                                }else{
                                                    alert("回复失败");
                                                    return false;
                                                }
                                            })
                                        }
                                        document.getElementById('sendBtn').onclick=updReply;
                                    }()
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c9 lh50 tc">Copyright © 深圳市宝安区石岩街道纪工委. All Rights Reserved 未经同意 请勿转载</div>
    <script src="/Admin/Home/View/Public/js/jquery.min.js"></script>
    <script src="/Admin/Home/View/Public/js/jquery.ui.custom.js"></script>
    <script src="/Admin/Home/View/Public/js/bootstrap.min.js"></script>
    <script src="/Admin/Home/View/Public/js/jquery.uniform.js"></script>
    <script src="/Admin/Home/View/Public/js/select2.min.js"></script>
    <script src="/Admin/Home/View/Public/js/jquery.validate.js"></script>
    <script src="/Admin/Home/View/Public/js/jquery.wizard.js"></script>
    <script src="/Admin/Home/View/Public/js/unicorn.js"></script>
    <script src="/Admin/Home/View/Public/js/unicorn.wizard.js"></script>
    <script src="/Admin/Home/View/Public/js/unicorn.form_validation.js"></script>

</body>
</html>