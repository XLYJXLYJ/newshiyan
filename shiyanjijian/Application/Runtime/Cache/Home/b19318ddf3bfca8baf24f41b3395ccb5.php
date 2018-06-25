<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>404</title>
	<link rel="stylesheet" href="/oyes/Public/css/404.css">
	<script type="text/javascript" src="/oyes/Public/js/jquery.js"></script>
</head>
<body>
	<div class="contant">
		<div class="image">
			<img src="/oyes/Public/images/404/404.png" alt="">
		</div>
		<p>该页面不存在!</p>
		<div class="button" id="return">返回</div>
		<script>$('#return').click(function(){history.go(-1)})</script>
	</div>
</body>
</html>