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
    <style>
        .tc{text-align: center;}
        .page a{margin: 0 5px;}
        .mgb0{margin-bottom: 0!important}
        .w80{width: 35px}
    </style>
</head>
<body>
<!-- <body style="background: white"> -->
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
                    <div>
                        <?php if($scale == 1): ?><a href="<?php echo U('Report/reportList',array('scale'=>1));?>" class="btn btn-primary">全部</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>1));?>" class="btn btn-info">全部</a><?php endif; ?>
                        <?php if($scale == 4): ?><a href="<?php echo U('Report/reportList',array('scale'=>4));?>" class="btn btn-primary">未受理</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>4));?>" class="btn btn-info">未受理</a><?php endif; ?>
                        <?php if($scale == 5): ?><a href="<?php echo U('Report/reportList',array('scale'=>5));?>" class="btn btn-primary">不受理</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>5));?>" class="btn btn-info">不受理</a><?php endif; ?>
                        <?php if($scale == 6): ?><a href="<?php echo U('Report/reportList',array('scale'=>6));?>" class="btn btn-primary mgr30">已受理</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>6));?>" class="btn btn-info mgr30">已受理</a><?php endif; ?>
                        <?php if($scale == 2): ?><a href="<?php echo U('Report/reportList',array('scale'=>2));?>" class="btn btn-primary">未回复</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>2));?>" class="btn btn-info">未回复</a><?php endif; ?>
                        <?php if($scale == 3): ?><a href="<?php echo U('Report/reportList',array('scale'=>3));?>" class="btn btn-primary">已回复</a>
                            <?php else: ?>
                            <a href="<?php echo U('Report/reportList',array('scale'=>3));?>" class="btn btn-info">已回复</a><?php endif; ?>
                        <div style="float: right;">
                            <input id="keyword" type="text" value="<?php echo ($keyword); ?>" style="vertical-align: top;margin-right: 10px;width: 160px" placeholder="可根据举报中一切内容查找">
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
                                    var url="<?php echo U('Report/reportList',array('keyword'=>temp,'scale'=>1));?>";
                                    url=url.replace('temp',keyword);
                                    window.location.href=url;
                                    }
                                }()
                            </script>
                        </div>
                        <div style="float: right;margin-right: 20px">
                        <input type="date" class="mgb0" id="startDate" style="width: 140px"><span>~</span>
                        <input type="date" class="mgb0" id="endDate" style="width:140px">
                        <a id="timeSearchBtn" class="btn btn-success">搜索</a>
                        <script>
                            !function(){
                                document.getElementById('timeSearchBtn').onclick=function(){
                                    var startDate=document.getElementById('startDate').value;
                                    var endDate=document.getElementById('endDate').value
                                    if(!startDate||!endDate){
                                        alert("输入时间范围");return false;
                                    }
                                    var url="<?php echo U('Report/timeSearch',array('start'=>temp1,'end'=>temp2));?>";
                                    url=url.replace('temp1',startDate);
                                    url=url.replace('temp2',endDate);
                                    window.location.href=url;
                                }
                            }()
                        </script>
                        </div>
                    </div>
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"> <i class="icon-align-justify"></i>
                            </span>
                            <h5>举报列表</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>查询码</th>
                                        <th>举报人</th>
                                        <th>被举报人</th>
                                        <th>举报标题</th>
                                        <th>问题类别</th>
                                        <th>举报时间</th>
                                        <th>受理时间</th>
                                        <th>回复时间</th>
                                        <th style="width: 52px">附件</th>
                                        <th style="width: 120px">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                            <td><?php echo ($vo['qrcd']); ?></td>
                                            <td>
                                                <?php if(!$vo['a_name']): ?>匿名
                                                    <?php else: ?>
                                                    <?php echo ($vo['a_name']); endif; ?>
                                            </td>
                                            <td><?php echo ($vo['b_name']); ?></td>
                                            <td><?php echo ($vo['title']); ?></td>
                                            <td><?php echo ($vo['scale']); ?></td>
                                            <td><?php echo (date("y-m-d h:i:s",$vo['createTime'])); ?></td>
                                            <td>
                                                <?php if($vo['ifAgree'] == 0): ?>未受理
                                                    <?php elseif($vo['ifAgree'] == 1): ?>
                                                    <?php echo (date("y-m-d h:i:s",$vo['agreeTime'])); ?>
                                                    <?php else: ?>
                                                    不受理<?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($vo['replyTime']): echo (date("y-m-d h:i:s",$vo['replyTime'])); ?>
                                                    <?php else: ?>
                                                    未回复<?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($vo['file']): ?><a href="<?php echo ($vo['file']); ?>" class="btn btn-info dlBtn">下载</a>
                                                    <script>
                                                        !function(){
                                                            var btn=document.ele('.dlBtn');
                                                            var len=btn.length;
                                                            for(var i=0;i<len;i++){
                                                               btn[i].onclick=function(){
                                                                var url=this.ele('.dlFile')[0].innerHTML;
                                                                var url2=url.split('.');
                                                                var len=url2.length;
                                                                var type=url2[len-1];
                                                                if(type=='zip')window.location.href=url;
                                                                else window.location.href="/shiyanjijian/Public/download.php?url="+url+"&type="+type;
                                                               } 
                                                            }
                                                        }()
                                                    </script>
                                                    <?php else: ?>
                                                    无<?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo U('Report/reportDetail',array('id'=>$vo['id'],'scale'=>$scale));?>" class="btn btn-primary">查看</a>
                                                <!-- <?php if($vo['result']): ?><a href="<?php echo U('Report/reportReply',array('id'=>$vo['id']));?>" class="btn btn-info">查看回复</a>
                                                    <?php else: ?>
                                                    <a href="<?php echo U('Report/reportReply',array('id'=>$vo['id']));?>" class="btn btn-success">回复</a><?php endif; ?> -->
                                                <!-- href="<?php echo U('Report/delete',array('id'=>$vo['id']));?>" -->
                                                <!-- <a onclick="if(confirm('删除后无法恢复，是否删除?')==false)return;var url='/admin.php/Home/Report/delete/id/<?php echo ($vo['id']); ?>';window.location.href=url;" class="btn btn-danger deleteBtn">删除</a> -->
                                                <div class="btn btn-danger deleteBtn">删除<span style="display: none;"><?php echo ($vo['id']); ?></span></div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <p id="pageNum" style="display: none;"><?php echo ($page); ?></p>
                        <p id="maxPage" style="display: none"><?php echo ($maxPage); ?></p>
                        <p class="page tc">
                            <?php if($page != 1): ?><a href="<?php echo U('Report/reportList',array('page'=>$page-1,'scale'=>$scale,'keyword'=>$keyword));?>">上一页</a><?php endif; ?>
                            <span id="pageList">
                                <a href="">1</a>
                            </span>
                            <?php if(($page != $maxPage) and ($page < $maxPage)): ?><a href="<?php echo U('Report/reportList',array('page'=>$page+1,'scale'=>$scale,'keyword'=>$keyword));?>">下一页</a><?php endif; ?>
                        </p>
                        <script>
                            !function(){
                                var page=document.getElementById('pageNum').innerHTML;
                                var maxPage=document.getElementById('maxPage').innerHTML;
                                var start;
                                var end;
                                var list="";
                                if(page<=5){
                                    start=1;
                                    if(maxPage<=9)end=maxPage;
                                    else end=9;
                                }
                                else if(page>=maxPage-4){
                                    end=maxPage;
                                    if(maxPage-8>1)start=maxPage-8;
                                    else start=1;
                                }
                                else{
                                    start=page-4;
                                    end=parseInt(page)+4;
                                }
                                for(var i=start;i<=end;i++){
                                    var url="<?php echo U('Report/reportList',array('page'=>temp1,'scale'=>$scale,'keyword'=>$keyword));?>";
                                    url=url.replace("temp1",i);
                                    if(i==page)list+='<a style="color:red">'+i+'</a>';
                                    else list+='<a href='+url+'>'+i+'</a>';
                                }
                                document.getElementById('pageList').innerHTML=list;
                            }()
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="c9 lh50 tc">Copyright © 深圳市宝安区石岩街道纪工委. All Rights Reserved 未经同意 请勿转载</div>
    <div class="blk_demo" id="blk_demo"></div>
    <div class="alert_demo tc" id="alert_demo">
        <p class="pd20_0">删除后无法恢复，确定删除？</p>
        <div id="reportId" style="display: none;"></div>
        <!-- <div id="reportId"></div> -->
        <div class="btn btn-info" id="hideAlt">取消</div>
        <div class="btn btn-danger" id="delete">确定</div>
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
    <script>
        !function(){
            // 显示弹窗
            function showAlt(id){
                $('#alert_demo').css('display','block');
                $('#blk_demo').css('display','block');
                $('#reportId').html(id);
            }
            // 隐藏弹窗
            function hideAlt(id){
                $('#alert_demo').css('display','none');
                $('#blk_demo').css('display','none');
            }
            function deleteReport(){
                $.post('/admin.php/Home/Report/delete',
                    {id:$('#reportId').html()},
                    function(data){
                        if(data==0)window.location.reload();
                        else alert('删除失败');
                    }
                );
            }
            $('.deleteBtn').click(function(){
                showAlt($(this).find('span').html());
            });
            $('#hideAlt').click(function(){hideAlt()});
            $('#delete').click(function(){deleteReport()})
        }()
    </script>
</body>
</html>