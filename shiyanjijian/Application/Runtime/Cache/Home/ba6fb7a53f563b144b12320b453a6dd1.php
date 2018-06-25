<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($_ENV['site_info']['seo_title']); ?>|<?php echo ($current['title']); ?></title>
	<meta name="description" content="<?php echo ($current['description']); ?>">
	<meta name="keyword" content="<?php echo ($current['key']); ?>">
	<link rel="shortcut icon" href="/iwenkejiweb/2/Public/images/icon/logo.ico"/>
	<link rel="stylesheet" href="/iwenkejiweb/2/Public/css/style.css">
	<link rel="stylesheet" href="/iwenkejiweb/2/Public/css/index2.css">
	<link rel="stylesheet" href="/iwenkejiweb/2/Public/css/submit2.css">
	<link rel="stylesheet" href="/iwenkejiweb/2/Public/css/category.css">
	<script type="text/javascript" src="/iwenkejiweb/2/Public/js/jquery.js"></script>
</head>
<body>
	<div id="head_1" class="header">
		<div class="cnt">
			<a class="logo imgbox" href="<?php echo U('Home/Index/index');?>">
				<img src="<?php echo ($_ENV['site_info']['logo']); ?>" alt="Apparelwin" >
			</a>
			<div class="head1_index2">
				<div class="linkWay">
					<p>
						<a href="mailto:<?php echo ($_ENV['campany_info']['campany_email']); ?>">
							<span class='email'><?php echo ($_ENV['campany_info']['campany_email']); ?></span>
						</a>
						<span class='mobilephone'><?php echo ($_ENV['campany_info']['campany_tel']); ?></span>
						<a href="<?php echo ($_ENV['site_info']['official_website']); ?>"><span class='goToIndex'>访问官网</span></a>
					</p>
				</div>
				<a class="btn1" id="showForm">加入联盟</a>
				<div class="nav">
					<?php foreach ($_ENV['nav'] as $key => $nav): ?>
						<span class="blk hsub">
							<a href="<?php echo ($nav["url"]); ?>"><?php echo ($nav["name"]); ?></a>
						</span>
					<?php endforeach ?>
					
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="contant">
				<?php  $php_self = dirname(dirname(dirname(dirname(dirname(dirname($_SERVER['PHP_SELF'])))))); $path = "http://".$_SERVER['SERVER_NAME'];?>
		<div class="leftWrap">
			<p class="bTitle" ><a href="<?php echo U('Home/Index/index');?>">首页</a> </p>
			<?php foreach ($list as $key => $parent): ?>
			<p class="bTitle"
				<?php if ($parent['id']==$current['id']): ?>
					style="color:#be2f34"
				<?php else: ?>
					
				<?php endif ?>

			>
				<?php if ($parent['sub']!=null): ?>	
				<?php echo ($parent["name"]); ?></p>
				<?php else: ?>
				<a href="<?php echo ($path); echo ($parent["url"]); ?>"
					<?php if ($parent['id']==$current['id']): ?>
						style="color:#be2f34"
					<?php else: ?>
						
					<?php endif ?>
				
				><?php echo ($parent["name"]); ?></a></p>
				<?php endif ?>
			<?php if ($parent['sub']!=null): ?>
				
				<?php foreach ($parent['sub'] as $key => $sub): ?>
					<p class="sTitle"><a href="<?php echo ($path); echo ($sub["url"]); ?>"
					<?php if ($sub['id']==$current['id']): ?> 
						style="color:#be2f34"
					<?php else: ?>
						
					<?php endif ?>


					>- <?php echo ($sub["name"]); ?></a></p>
				<?php endforeach ?>
			<?php endif ?>
				
			<?php endforeach ?>
		</div>
		<div class="rightWrap">
			<div class="lead">
				<a href="javascript:history.go(-1)"><p class="return">返回</p></a>
				<p class="left">位置：<a href="<?php echo U('Home/Index/index');?>">首页</a>><?php echo ($current['name']); ?></p>
			</div>
			<div class="text">
				<?php echo stripslashes($current['content']);?>
			</div>
		</div>
	</div>

	<div class="formWrap" id="formWrap">
		<div class="closeForm" id="closeForm"></div>
		<div class="formHead">加入联盟</div>
		<form action="<?php echo U('Home/Index/adduser','','');?>" method="post" name="adduser" onsubmit="return checkForm()"enctype="multipart/form-data">
			<span><i class='red'>*</i>公司名称:</span>
			<input type="text" placeholder='输入公司名称...' id="campany_name" name="campany_name">
			<span><i class='red'>*</i>联系人:</span>
			<input type="text" placeholder='输入联系人名称...' id="contacts_name" name="contacts_name">
			<span><i class='red'>*</i>手机号码:</span>
			<input type="text" placeholder='输入手机号码...' id="tel" name="tel">
			<span>邮箱:</span>
			<input type="text" placeholder='输入邮箱地址...' id="email" name="email">
			<span><i class='red'>*</i>主营产品:</span>
			<input type="text" placeholder='输入主营产品...' id="products" name="products">
			<span>MOQ(起订量):</span>
			<input type="text" placeholder='输入起订量...' id="business_model" name="business_model">
			<span>工艺类型:</span>
			<input type="text" placeholder='输入工艺类型...' id="process_type" name="process_type">
			<span><i class='red'>*</i>工厂所在地:</span>
			<input type="text" placeholder='输入工厂所在地...' id="adress" name="adress">
			<span>员工人数:</span>
			<input type="text" placeholder='输入员工人数...' id="staff_num" name="staff_num">
			<span>加工方式:</span>
			<textarea name="processing_method" id="processing_method"placeholder='输入加工方式...'></textarea>
			<div class="formItem">
				<span>资格证书:</span>
				<input type="file" id="credentials" name="credentials">
			</div>
			<div class="formItem">
				<span><i class='red'>*</i>营业执照:</span>
				<input type="file"   id="business_license" name="business_license">
			</div>
			<div class="formItem">
				<span>产品图:</span>
				<input type="file"   id="product_image" name="product_image">
			</div>

			<input type="submit" class="submitButton" value="提交">			
		</form>
	</div>
	<script>
		function checkForm(){	
			if(	$('#campany_name').val()==''||$('#contacts_name').val()==''||
				$('#tel').val()==''||$('#products').val()==''||$('#adress').val()==''||$('#business_license').val()==''){
					alert('信息尚未填写完整');return false;
			}
		}
	</script>
	<div class="bgBlack" id="bgBlack"></div> 
	<div class="bgBlack" id="bgBlack"></div>
	

	<div id="footer" class="footer">
	<div class="footerCenter">

		<?php foreach ($_ENV['hyperlink'] as $key => $value): ?>
					<?php if ($value['parent_id']=='0'): ?>
						<div class="footerItem2">
							<h1>
									<?php echo ($value['name']); ?>
							</h1>
							<?php foreach ($_ENV['hyperlink'] as $key => $value2): ?>
								<?php if ($value2['parent_id']==$value['id']): ?>
									<a href="<?php echo ($value2['url']); ?>"><?php echo ($value2['name']); ?></a>
								<?php endif ?>
							<?php endforeach ?>
						</div>
					<?php endif ?>
				
		<?php endforeach ?>
		<div class="footerItem3">
			<div>
				<p class="tip">公司:</p>
				<p class="content"><?php echo ($_ENV['campany_info']['campany_name']); ?></p>
			</div>
			<div>
				<p class="tip">地址:</p>
				<p class="content"><?php echo ($_ENV['campany_info']['campany_address']); ?></p>
			</div>
			<div>
				<p class="tip">电话:</p>
				<p class="content"><?php echo ($_ENV['campany_info']['campany_tel']); ?></p>
			</div>
			<div>
				<p class="tip">邮箱:</p>
				<p class="content"><?php echo ($_ENV['campany_info']['campany_email']); ?></p>
			</div>
		</div>
		<div class="footerItem4">
			<p>关注我们</p>
			<div class="erweima">
				<img src="<?php echo ($_ENV['campany_info']['weixin_code']); ?>" alt="">
			</div>
		</div>
		<div class="copyright">
			<p>Copyright © 2015.<?php echo ($_ENV['campany_info']['campany_name']); ?> 版权所有</p>
			<p><?php echo ($_ENV['site_info']['icp']); ?></p>
		</div>
	</div>
</div>
</body>
<script src="/iwenkejiweb/2/Public/js/submit.js"></script>
<script>
	function checkForm(){	
		if($('#name').val()==''||$('#email').val()==''||$('#title').val()==''||$('#content').val()==''){alert('信息尚未填写完整');return false;}
	}
</script>
</html>