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
			<a href="<?php echo U('Report/reportList','','');?>">
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
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"> <i class="icon-align-justify"></i>
                            </span>
                            <h5>举报列表</h5>
                            <div style="float:right;margin-right:50px">
                                <a onclick="history.go(-1)" class="label" id="return" >返回</a>
                            </div>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="" method="post" class="form-horizontal">
                                <p style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">举报人信息</p>
                                <div class="control-group">
                                    <label class="control-label">姓名：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">职务或身份：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">联系方式：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">居住地址：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">工作单位：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">身份证号：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">政治面貌：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">电子邮箱：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <p style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">被举报人信息</p>
                                <div class="control-group">
                                    <label class="control-label">姓名：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">职务：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">级别：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">特殊身份：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">工作单位：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">政治面貌：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">居住地址：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <p style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">举报正文</p>
                                <div class="control-group">
                                    <label class="control-label">标题：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">问题类别：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">主要问题：</label>
                                    <div class="controls" style="line-height:30px ">双方的</div>
                                </div>
                                <div class="control-group" style="margin-bottom: 20px">
                                    <label class="control-label">附件：</label>
                                    <div class="controls" style="line-height:30px ">
                                        <a href="" class="btn btn-info">下载</a>
                                    </div>
                                </div>
                                <div style="text-align: center;margin-bottom: 20px">
                                    <a onclick="history.go(-1)" class="btn btn-info">返回</a>
                                    <a href="<?php echo U('Report/reportReply',array('id'=>$data['id']));?>" class="btn btn-success">回复</a>
                                </div>
                            </form>
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