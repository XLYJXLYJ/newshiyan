<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="<?php echo U('Report/report');?>">我要举报</a>
	<br>
	<a href="<?php echo U('Query/index');?>">举报查询</a>
	<br>
	<a href="<?php echo U('CleanCulture/CleanCulture');?>">廉洁文化</a>
	<br>
	<a href="<?php echo U('ArticleUnscramble/ArticleUnscramble');?>">条文解读</a>
	<br>
	<a href="<?php echo U('StudyAnswer/StudyAnswer');?>">学习问答</a>
	<br>
	<a href="<?php echo U('WarningExposure/WarningExposure');?>">警示曝光</a>
	<br>
	<a href="<?php echo U('VideoEducation/VideoEducation');?>">视频教育</a>
	<br>
	<a href="<?php echo U('Help/lawsList');?>">党纪法规</a>
</body>
<style>
	a{
		font-size: 30px;
	}
</style>
</html>