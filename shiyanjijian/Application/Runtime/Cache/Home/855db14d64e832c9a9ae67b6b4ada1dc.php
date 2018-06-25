<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>宝安纪检监察网-网络举报</title>
	<link rel="stylesheet" href="/shiyanjijian/Public/css/common.css">
	<script type="text/javascript" src="/shiyanjijian/Public/js/yang.js"></script>
	<script type="text/javascript" src="/shiyanjijian/Public/js/jquery.min.js"></script>
</head>
</head>
<body>
	<?php if($queryCode): ?><script>alert('举报成功，您的举报码是<?php echo ($queryCode); ?>');</script><?php endif; ?>
	<div class="container bg_f3ede5" id="container">
		<img src="/shiyanjijian/Public/images/head.jpg" class="fl" alt="">

		<div class="cl"></div>
		<div class="pd10" id="queryForm">
			<div class="bgwt bdr10 bd_1_ccc pd10 pr mgb20">
				<p class="c_red2 f20" id="prompt_title">举报查询</p>
				<p class="df">
					<span class="w80 dib mgr10 c_blue">查 询 码 *</span>
					<input type="text" id="report_name" value='<?php if($queryCode): echo ($queryCode); endif; ?>
				' class="need_check_empty flx">
			</p>
			<div class="mgb10 df">
				<span class="w80 dib mgr10 c_blue">验 证 码 *</span>
				<input id="code" type="text" style="flex: 1" class="mgr5 need_check_empty">
				<div id="verifyCode" class="bg_img_ct dib vam" style="height: 35px;width: 100px;background: black"></div>
			</div>
			<div class="mgb10">
				<span class="w80 dib mgr10 c_blue">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作</span>
				<div id="sendBtn" class="btn_blue dib" style="box-shadow: none">查询</div>
				<script>
						!function(){
							var code='';
							function getVerifyCode(){
								$.get("<?php echo U('Report/verifyCode');?>",function(data){
									data=JSON.parse(data);
									code=data['str'];
									document.getElementById('verifyCode').style.backgroundImage="url("+data['img']+")";
								})
							}
							getVerifyCode();
							function sendForm(){
								if(verify.empty('#queryForm')==false)return false;
								if(document.getElementById('code').value!=code){
									alert('验证码错误，请重新输入。');
									return false;
								}
								// $.post("<?php echo U(Query/);?>")
							}
							document.getElementById('sendBtn').onclick=sendForm;
						}()
					</script>
			</div>
			<p class="df">
				<span class="w80 dib mgr10 c_blue vat">答复内容</span>
				<textarea name="" id="" cols="30" rows="10"></textarea>
			</p>
		</div>
	</div>
</div>
<script type="text/javascript" src="/shiyanjijian/Public/js/common.js"></script>
</body>
</html>