<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>OYES</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.main.css" />
        <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/unicorn.grey.css" class="skin-color" />

        <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/uniform.css" />
        <link rel="stylesheet" href="/iwenkejiweb/2/Application/Admin/View/Public/css/select2.css" />
              
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>
        
        
        <div id="header">
            <h2 style="color:#FFFFFF">APPARELWIN</h2>  
        </div>
        
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse"><a title="" href="<?php echo U('Login/logout','','');?>"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a></li>
            </ul>
        </div>
        
            
        <div id="sidebar">

            <a href="#" class="visible-phone"><i class="icon icon-home"></i> 系统管理</a>
            <ul>
                <li>
                    <a href="<?php echo U('Main/index','','');?>"><i class="icon  icon-home"></i> <span>首页</span></a>
                </li>
                <li><a href="<?php echo U('Index/index','','');?>"><i class="icon icon-user"></i> <span>账户管理</span></a>
                <li  class="active">
                    <a href="<?php echo U('BasicInfo/index','','');?>"><i class="icon icon-th-list"></i> <span>网站基本信息管理</span></a>
                </li>
                </li>
                 <li>
                    <a href="<?php echo U('Nav/index','','');?>"><i class="icon icon-th-list"></i> <span>导航管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Poster/poster_list','','');?>"><i class="icon icon-th-list"></i> <span>横幅管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Module/module_list','','');?>"><i class="icon icon-th-list"></i> <span>展示模块</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Category/cate_list','','');?>"><i class="icon icon-pencil"></i> <span>页面管理</span></a>
                </li>
                <li ><a href="<?php echo U('Footer/index','','');?>"><i class="icon-align-justify"></i>底部管理</a></li>
                <li>
                   <a href="<?php echo U('Aliance/index','','');?>"><i class="icon icon-file"></i> <span>联盟管理</span></a>
                </li>
                <li>
                    <a href="<?php echo U('Article/index','','');?>"><i class="icon icon-list-alt"></i> <span>媒体管理</span></a>
                </li>
            </ul>
        </div>
        
        <div id="content">
        <div id="content-header">
            </div>  
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab1">网站信息设置</a></li>
                                    <li><a data-toggle="tab" href="#tab2">企业信息</a></li>
                                </ul>
                            </div>
                            <div class="widget-content tab-content">
                                <div id="tab1" class="tab-pane active">
                                     <form class="form-horizontal" method="post" action="<?php echo U('BasicInfo/saveSite','','');?>" enctype="multipart/form-data"   />
                                        <div class="control-group">
                                            <label class="control-label">ICP备案号</label>
                                            <div class="controls">
                                                <input type="hidden" name="id"  value="<?php echo ($site["id"]); ?>" />
                                                <input type="text" name="icp"  value="<?php echo ($site["icp"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">SEO-标题</label>
                                            <div class="controls">
                                                <input type="text" name="seo_title"  value="<?php echo ($site["seo_title"]); ?>" />
                                            
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">SEO-关键字</label>
                                            <div class="controls">
                                                <input type="text" name="seo_keyword"  value="<?php echo ($site["seo_keyword"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">SEO-描述</label>
                                            <div class="controls">
                                                <textarea name="seo_description" rows="4"><?php echo ($site["seo_description"]); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">官网网址</label>
                                            <div class="controls">
                                                <input type="text" name="official_website"  value="<?php echo ($site["official_website"]); ?>" />
                                                <div class="alert">
                                                    输入网址的时候请加入"http://"
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label">logo图标</label>
                                                <div class="controls">
                                                    <?php if($site["logo"] != ''): ?><img src="<?php echo ($site["logo"]); ?>" style="width:50px ;height:50px;" /><?php endif; ?>
                                                <input type="hidden" name="logo" value="<?php echo ($site["logo"]); ?>">
                                                <input type="file" name="photo"  />             
                                        </div>
                                    </div>
                                
                                        <div class="form-actions">
                                            <input type="submit" value="提交" class="btn btn-primary" />
                                     </div>
                                    </form>
                                </div>
                                <div id="tab2" class="tab-pane">
                                    <form class="form-horizontal" method="post" action="<?php echo U('BasicInfo/saveCampany','','');?>" enctype="multipart/form-data"  name="basic_validate" id="basic_validate" novalidate="novalidate" />
                                        <div class="control-group">
                                            <label class="control-label">企业名称</label>
                                            <div class="controls">
                                                <input type="text" name="campany_name"  value="<?php echo ($campany["campany_name"]); ?>" />
                                                <input type="hidden" name="id"  value="<?php echo ($campany["id"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">联系邮箱</label>
                                            <div class="controls">
                                                <input type="text" name="campany_email" id="email" value="<?php echo ($campany["campany_email"]); ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">地址</label>
                                            <div class="controls">
                                                <input type="text" name="campany_address"  value="<?php echo ($campany["campany_address"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">办公电话</label>
                                            <div class="controls">
                                               <input type="text" name="campany_tel"  value="<?php echo ($campany["campany_tel"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">qq</label>
                                            <div class="controls">
                                                <input type="text" name="qq"  value="<?php echo ($campany["qq"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">微博号</label>
                                            <div class="controls">
                                                <input type="text" name="weibo"  value="<?php echo ($campany["weibo"]); ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                                <label class="control-label">微信二维码</label>
                                                <div class="controls">
                                                    <?php if($campany["weixin_code"] != ''): ?><img src="<?php echo ($campany["weixin_code"]); ?>" style="width:50px; height:50px;"><?php endif; ?>
                                                    <input type="hidden" name="weixin_code" value="<?php echo ($campany["weixin_code"]); ?>" />
                                                <input type="file" name="weixin_code"  />             
                                        </div>
                                    </div>
                                
                                        <div class="form-actions">
                                            <input type="submit" value="提交" class="btn btn-primary" />
                                     </div>
                                    </form>
                                </div>
                            </div>                            
                        </div>
                        
                    </div>
                </div>
                
                <div class="row-fluid">
                    <div id="footer" class="span12">
                        2015 &copy; OYES
                    </div>
                </div>
            </div>
        </div>
        
        
            
           <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.min.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.ui.custom.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/bootstrap.min.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.js"></script>

            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/jquery.validate.js"></script>
            <script src="/iwenkejiweb/2/Application/Admin/View/Public/js/unicorn.form_validation.js"></script>
            
    </body>
</html>