<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>OYES</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/shiyanjijian/Application/Admin/View/Public/css/unicorn.login.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        <div id="logo">
            <h2 style="color:#FFFFFF">APPARELWIN</h2>
        </div>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="<?php echo U('Login/adminLogin','','');?>" method="post" />
				<p>管理员登录</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="username" placeholder="用户名" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="密码" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link" id="to-recover">忘记密码?</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-inverse" value="登录" /></span>
                </div>
            </form>
           <form id="recoverform" action="<?php echo U('Login/findPW','','');?>" class="form-vertical" method="post" />
				<p>请输入你的管理员账号所绑定的邮箱，我们将会发送验证邮件给你进行密码重置.</p>
				<div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" placeholder="邮箱" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; 返回登录</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-inverse" value="发送" /></span>
                </div>
            </form>
        </div>
        
        <script src="/shiyanjijian/Application/Admin/View/Public/js/jquery.min.js"></script>  
        <script src="/shiyanjijian/Application/Admin/View/Public/js/unicorn.login.js"></script> 
    </body>
</html>