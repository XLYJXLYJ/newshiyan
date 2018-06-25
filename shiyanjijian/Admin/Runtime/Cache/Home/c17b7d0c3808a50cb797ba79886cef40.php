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
                            <h5>举报详情</h5>
                            <div style="float:right;margin-right:50px">
                                <a href="<?php echo U('Report/reportList',array('scale'=>$data['scale']));?>" class="label" id="return" >返回</a>
                            </div>
                        </div>
                        <div class="widget-content nopadding">
                            <form action="" method="post" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">查询码：</label>
                                    <div class="controls" style="line-height:30px "><?php echo ($data[0]['qrcd']); ?></div>
                                </div>
                                <p style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">举报人信息</p>
                                <div class="control-group">
                                    <label class="control-label">姓名：</label>
                                    <div class="controls" style="line-height:30px ">
                                        <?php if($data[0]['a_name']): echo ($data[0]['a_name']); ?>
                                            <?php else: ?>
                                            匿名<?php endif; ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">身份证号：</label>
                                    <div class="controls" style="line-height:30px "><?php echo ($data[0]['a_IDcard']); ?></div>
                                </div>
                                <!-- <div class="control-group">
                                <label class="control-label">职务或身份：</label>
                                <div class="controls" style="line-height:30px "><?php echo ($data['a_work']); ?></div>
                            </div>
                            -->
                            <div class="control-group">
                                <label class="control-label">联系方式：</label>
                                <div class="controls" style="line-height:30px "><?php echo ($data[0]['a_link']); ?></div>
                            </div>
                            <!-- <div class="control-group">
                            <label class="control-label">居住地址：</label>
                            <div class="controls" style="line-height:30px "><?php echo ($data['a_address']); ?></div>
                        </div>
                        -->
                        <div class="control-group">
                            <label class="control-label">工作单位：</label>
                            <div class="controls" style="line-height:30px "><?php echo ($data[0]['a_company']); ?></div>
                        </div>
                        <!-- <div class="control-group">
                        <label class="control-label">政治面貌：</label>
                        <div class="controls" style="line-height:30px "><?php echo ($data['a_political']); ?></div>
                    </div>
                    -->
                    <!-- <div class="control-group">
                    <label class="control-label">电子邮箱：</label>
                    <div class="controls" style="line-height:30px "><?php echo ($data['a_email']); ?></div>
                </div>
                -->
                <p style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">被举报人信息</p>
                <div class="control-group">
                    <label class="control-label">姓名：</label>
                    <div class="controls" style="line-height:30px "><?php echo ($data[0]['b_name']); ?></div>
                </div>
                <!-- <div class="control-group">
                <label class="control-label">级别：</label>
                <div class="controls" style="line-height:30px "><?php echo ($data['b_level']); ?></div>
            </div>
            <div class="control-group">
                <label class="control-label">特殊身份：</label>
                <div class="controls" style="line-height:30px "><?php echo ($data['b_special']); ?></div>
            </div>
            -->
            <div class="control-group">
                <label class="control-label">工作单位：</label>
                <div class="controls" style="line-height:30px "><?php echo ($data[0]['b_campany']); ?></div>
            </div>
            <div class="control-group">
                <label class="control-label">职务：</label>
                <div class="controls" style="line-height:30px "><?php echo ($data[0]['b_work']); ?></div>
            </div>
            <div class="control-group">
                <label class="control-label">政治面貌：</label>
                <div class="controls" style="line-height:30px "><?php echo ($data[0]['b_political']); ?></div>
            </div>
            <!-- <div class="control-group">
            <label class="control-label">居住地址：</label>
            <div class="controls" style="line-height:30px "><?php echo ($data['b_address']); ?></div>
        </div>
        -->
        <p style="line-height: 40px;font-size: 24px;text-align: center;margin-top: 20px">举报正文</p>
        <div class="control-group">
            <label class="control-label">标题：</label>
            <div class="controls" style="line-height:30px "><?php echo ($data[0]['title']); ?></div>
        </div>
        <div class="control-group">
            <label class="control-label">问题类别：</label>
            <div class="controls" style="line-height:30px "><?php echo ($data[0]['scale']); ?></div>
        </div>
        <div class="control-group">
            <label class="control-label">主要问题：</label>
            <div class="controls" style="line-height:30px "><?php echo ($data[0]['contain']); ?></div>
        </div>
        <div class="control-group" style="margin-bottom: 20px">
            <label class="control-label">附件：</label>
            <div class="controls" style="line-height:30px ">
                <?php if($data[0]['file']): ?><a href="<?php echo ($data[0]['file']); ?>" class="btn btn-info dlBtn">打包下载</a>
                    <script>
                        !function(){
                            document.getElementById('downBtn').onclick=function(){
                                var url=document.getElementById('file').innerHTML;
                                var url2=url.split('.');
                                var len=url2.length;
                                var type=url2[len-1];
                                window.location.href="/Public/download.php?url="+url+"&type="+type;
                            }
                        }()
                    </script>
                    <?php else: ?>
                    没有附件<?php endif; ?>

            </div>
        </div>
        <div style="text-align: center;margin-bottom: 20px">
            <?php if($data[0]['ifAgree'] == 2): ?><p>不受理原因：<?php echo ($data[0]['noAgreeMsg']); ?></p><?php endif; ?>
            <a href="<?php echo U('Report/reportList',array('scale'=>$data['scale']));?>" class="btn btn-info">返回</a>
            <?php if($data[0]['ifAgree'] == 1): ?><!-- 未回复 -->
                <?php if($data[0]['ifReply'] == 0): ?><a class="btn btn-danger" id="noAgree">不受理</a>
                    <a href="<?php echo U('Report/reportReply',array('id'=>$data[0]['id']));?>" class="btn btn-success">回复</a>
                    <?php else: ?>
                    <!-- 已回复 -->
                    <a href="<?php echo U('Report/reportReply',array('id'=>$data[0]['id']));?>" class="btn btn-success">已回复</a><?php endif; ?>
                <!-- 未受理 -->
                <?php elseif($data[0]['ifAgree'] == 0): ?>
                    <a href="<?php echo U('Report/agree',array('id'=>$data[0]['id']));?>" class="btn btn-success">受理</a> 
                    <a class="btn btn-danger" id="noAgree">不受理</a>
                <?php else: ?>
                <!-- 不受理 -->
                <a href="<?php echo U('Report/agree',array('id'=>$data[0]['id']));?>" class="btn btn-success">受理</a><?php endif; ?>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="c9 lh50 tc">Copyright © 深圳市宝安区石岩街道纪工委. All Rights Reserved 未经同意 请勿转载</div>
<div class="blk_demo" id="blk_demo"></div>
<div class="alert_demo tc" id="alert_demo">
    <textarea style="resize: none;height: 100px" id="noAgreeMsg">非业务受理范围</textarea>
    <div id="reportId" style="display: none;"><?php echo ($data[0]['id']); ?></div>
    <div class="btn btn-info" id="rtBtn">返回</div>
    <div class="btn btn-success" id="noAgreeSend">提交</div>
</div>
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
<script type="text/javascript">
    !function(){
        document.getElementById('noAgree').onclick=function(){
            $('#blk_demo').css('display','block');
            $('#alert_demo').css('display','block');
        }
        document.getElementById('blk_demo').onclick=function(){
            $('#blk_demo').css('display','none');
            $('#alert_demo').css('display','none');
        }
        document.getElementById('rtBtn').onclick=function(){
            $('#blk_demo').css('display','none');
            $('#alert_demo').css('display','none');
        }
        document.getElementById('noAgreeSend').onclick=function(){
            var id=$('#reportId').html();
            var msg=$('#noAgreeMsg').val();
            if(!msg){
                alert('内容不能为空');
                return;
            }
            $.post("<?php echo U('Report/noAgree');?>",
                {'id':id,
                'msg':msg},
                function(data){
                    if(data==1){
                        window.location.href="<?php echo U('Report/reportDetail',array('id'=>$data[0][id],'scale'=>5));?>";
                    }else{
                         alert('操作失败');
                    }
                });
        }
    }()
</script>
</body>
</html>