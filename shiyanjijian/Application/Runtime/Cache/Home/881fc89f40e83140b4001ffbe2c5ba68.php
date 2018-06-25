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
			<p class="f16 fwb" id="prompt_title">相关法律法规</p>
			<div class="mgb10 df">
				<?php if($scale == 1): ?><a href="<?php echo U('Help/lawsList');?>" class="btn_orange tc flx mgr5" style="box-shadow: none;padding: 2px 5px;border-radius: 5">中央文件</a>
					<?php else: ?>
					<a href="<?php echo U('Help/lawsList');?>" class="btn_white tc flx mgr5" style="box-shadow: none;padding: 2px 5px;border-radius: 5">中央文件</a><?php endif; ?>
				<?php if($scale == 2): ?><a href="<?php echo U('Help/lawsList',array('scale'=>2));?>" class="btn_orange bdr tc flx mgr5" style="box-shadow: none;padding: 2px 5px;border-radius: 5">广东省文件</a>
					<?php else: ?>
					<a href="<?php echo U('Help/lawsList',array('scale'=>2));?>" class="btn_white tc flx mgr5" style="box-shadow: none;padding: 2px 5px;border-radius: 5">广东省文件</a><?php endif; ?>
				<?php if($scale == 3): ?><a href="<?php echo U('Help/lawsList',array('scale'=>3));?>" class="btn_orange tc flx" style="box-shadow: none;padding: 2px 5px;border-radius: 5">深圳市文件</a>
					<?php else: ?>
					<a href="<?php echo U('Help/lawsList',array('scale'=>3));?>" class="btn_white tc flx" style="box-shadow: none;padding: 2px 5px;border-radius: 5">深圳市文件</a><?php endif; ?>
			</div>
			<div class="bg_f6f3e0 pd10 bd_1_ccc">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Help/lawsDetail',array('id'=> $vo['id']));?>" class="df mgb5">
						<span class="flx"><?php echo ($vo['title']); ?></span>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="/shiyanjijian/Public/js/common.js"></script>
</body>
</html>