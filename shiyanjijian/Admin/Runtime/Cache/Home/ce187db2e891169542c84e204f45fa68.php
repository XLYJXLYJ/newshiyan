<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>石岩街道纪检</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/unicorn.login.css" />
        <link rel="stylesheet" href="/shiyanjijian/Admin/Home/View/Public/css/common.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body class="bg_img_cv" style="background-image: url(/shiyanjijian/Admin/Home/View/Public/img/login_bg.png);">
        <div class="bg_white">
            <img src="/shiyanjijian/Admin/Home/View/Public/img/logo.jpg" class="mg10" style="width: 60px" alt="">
            <span class="f46 pa fwb" style="font-family: STLiti;top: 35px">廉洁石岩</span>
        </div>
        <div id="loginbox" style="width: 320px;height: 250px;background: rgba(255,255,255,0.7);position: absolute;left: 60%;margin-right: 0;margin-left: -160px;border-radius: 0;box-shadow: none;top: 200px">            
            <form id="loginform" class="form-vertical" action="<?php echo U('Login/adminLogin','','');?>" method="post" />
				<p>管理员登录</p>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="username" placeholder="用户名" value="石岩街道纪工委" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" value="<?php echo ($pswd); ?>" placeholder="密码" />
                        </div>
                    </div>
                </div>
                <div class="form-actions"  style="background: none;border:none;padding-bottom: 0;margin-top: 0;padding-top: 5px">
                <div style="text-align: left;padding-left: 20px;margin-bottom: 10px"><input type="checkbox" style="margin-top: -2px;margin-right: 5px" name="remeber_pswd" value="1" checked="checked">记住密码</div>
                    <span class="pull-left"><a href="#" class="flip-link" id="to-recover" style="margin-left: 20px">忘记密码?</a></span>
                </div>
                <div class="form-actions"  style="background: none;border:none;margin-top: 0">
                    <input type="submit" style="width: 240px" class="btn btn-inverse bg_red" value="登录" />
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
                <div class="form-actions" style="background: none;border:0;padding-bottom: 0">
                    <span class="pull-left"><a href="#" class="flip-link" style="margin-left: 20px" id="to-login">&lt; 返回登录</a></span>
                </div>
                <div class="form-actions" style="background: none;border:0;margin-top: 0">
                    <input type="submit" style="width: 240px" class="btn btn-inverse" value="发送" />
                </div>
            </form>
        </div>
        <div class="bg_white pa" style="bottom: 0;width: 100%">
            <div class="c9 lh50 tc">Copyright © 深圳市宝安区石岩街道纪工委. All Rights Reserved 未经同意 请勿转载</div>
        </div>
        <script src="/shiyanjijian/Admin/Home/View/Public/js/jquery.min.js"></script>  
        <script src="/shiyanjijian/Admin/Home/View/Public/js/unicorn.login.js"></script> 
    </body>
</html>