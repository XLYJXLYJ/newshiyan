<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>廉洁石岩</title>
	<link rel="stylesheet" href="/shiyanjijian/Public/css/common.css">
	<script type="text/javascript" src="/shiyanjijian/Public/js/yang.js"></script>
	<script type="text/javascript" src="/shiyanjijian/Public/js/jquery.min.js"></script>
</head>
</head>
<body>
	
	<div class="alert" id="alert">
		<p id="alertMsg">asdfd</p>
		<div class="btn_orange" style="margin-top: 20px" id="alertClose">确定</div>
	</div>
	<div class="bg_black" id="bg_black"></div>
	<div class="container bgwt bgbt" id="container">
		<div class="df">
	<img src="/shiyanjijian/Public/images/logo.jpg" style="width: 50px;height: 50px;margin: 10px 0 0 10px" alt="">
	<div class="flx pdt10">
		<p class="mgb0 tc f14  fwb">中共深圳市宝安区石岩街道</p>
		<p class="tc f14 fwb mgb0">纪律检查工作委员会</p>
	</div>
	<p style="width: 70px;line-height: 60px" class="fwb mgb0 f17 c_red2 mgr10">网络举报</p>
</div>

		<div class="cl"></div>
		<div class="pd10" id="queryForm">
			<div class="bgwt bdr10 bd_1_ccc pd10 pr mgb20">
				<p class="c_red2 f16" id="prompt_title">举报查询</p>
				<p class="df">
					<span class="w80 dib mgr10 ">查 询 码 *</span>
					<input type="text" id="queryCode" class="need_check_empty flx"></p>
				<div class="mgb10 df">
					<span class="w80 dib mgr10 ">验 证 码 *</span>
					<input id="code" type="text" style="width: 80px" class="mgr5 need_check_empty">
					<div id="verifyCode" class="bg_img_ct dib vam" style="height: 35px;width: 80px;background: black;cursor: pointer;"></div>
				</div>
				<div class="mgb10">
					<span class="w80 dib mgr10 ">操&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作</span>
					<div id="sendBtn" class="btn_orange dib" style="box-shadow: none">查询</div>
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
									showAlert('验证码错误，请重新输入。');
									return false;
								}
								$.post("<?php echo U('Query/query');?>",{'queryCode':$('#queryCode').val()},function(data){
									if(data.code==0){
										document.getElementById('reply').innerHTML='<p class="c_red2 f16" id="prompt_title">答复内容</p><p>'+data.data+'</p>';
										document.getElementById('reply').style.display='block';
										return;
									}
									else if(data.code==1||data.code==2||data.code==3||data.code==4){
										showAlert(data.msg);
										document.getElementById('reply').innerHTML="";
										document.getElementById('reply').style.display='none';
										return;
									}
								},'json');
								getVerifyCode();
							}
							document.getElementById('sendBtn').onclick=sendForm;
							document.getElementById('verifyCode').onclick=getVerifyCode;
						}()
					</script>
				</div>
			</div>
			<div class="bgwt bdr10 bd_1_ccc pd10 pr mgb20" style="display: none;" id="reply">
			</div>

		</div>
	</div>
	<script type="text/javascript" src="/shiyanjijian/Public/js/common.js"></script>
	<?php if($queryCode): ?><script>showAlert('举报成功，您的查询码是<?php echo ($queryCode); ?>，请保管好。');</script><?php endif; ?>
</body>
</html>