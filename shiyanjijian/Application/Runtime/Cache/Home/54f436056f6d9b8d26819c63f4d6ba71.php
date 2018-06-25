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
	<div class="container bgwt bgbt pdb100" id="container">
		<div class="df">
	<img src="/shiyanjijian/Public/images/logo.jpg" style="width: 50px;height: 50px;margin: 10px 0 0 10px" alt="">
	<div class="flx pdt10">
		<p class="mgb0 tc f14  fwb">中共深圳市宝安区石岩街道</p>
		<p class="tc f14 fwb mgb0">纪律检查工作委员会</p>
	</div>
	<p style="width: 70px;line-height: 60px" class="fwb mgb0 f17 c_red2 mgr10">网络举报</p>
</div>

		<div class="cl"></div>
		<div class="pd10">
			<p class="f16 fwb tc" id="prompt_title"><?php echo ($data['title']); ?></p>
			<div onclick="history.go(-1)" class="btn_orange tc" style="box-shadow: none;margin-bottom: 10px">返回</div>
			<div class="bg_f6f3e0 pd10 bd_1_ccc mgb10">
				<pre style="display: block;white-space: pre-wrap;"><?php echo ($data['contain']); ?></pre>
			</div>
			<div onclick="history.go(-1)" class="btn_orange tc" style="box-shadow: none;">返回</div>
		</div>
	</div>
	<script type="text/javascript" src="/shiyanjijian/Public/js/common.js"></script>
</body>
</html>