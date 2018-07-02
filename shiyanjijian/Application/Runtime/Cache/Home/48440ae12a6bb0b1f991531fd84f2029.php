<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/shiyanjijian/Public/css/init.css">
    <title>警示曝光详情</title>
</head>
<body>
    <div class="contain-2-1">
        <div class="head">
            <div class="return"><img src="/shiyanjijian/Public/images/ArticleUnscramble/return.png" alt=""></div>
            <a href="./WarningExposure.html">
                <div class="clear"><img src="/shiyanjijian/Public/images/ArticleUnscramble/clear.png" alt=""></div>
            </a>
            <div class="clear-text"><p>廉洁石岩</p></div>
        </div>
        <div class="head-head"><img src="/shiyanjijian/Public/images/VideoEducation/head-head.png" alt=""></div>
        <div class="context-0">
            <img src="/shiyanjijian/Public/images/WarningExposure/head.png" alt="">
        </div>
        <div class="context-1">
            <div class="title"><p><?php echo ($w_deatal_article["w_title"]); ?></p></div>
        </div>
        <div class="time"><p class="left">来源:<?php echo ($w_deatal_article["w_from"]); ?></p><p class="right">发布时间：<?php echo (date("Y-m-d",$w_deatal_article["c_time"])); ?></p></div>
        <!-- <div class="context-5">
            <p>来源<span>|</span>中央纪委国家监委网站</p>
            <div class="qr"><img src="/shiyanjijian/Public/images/ArticleUnscramble/qr.png" alt=""></div>
            <div class="bottom-img"><img src="/shiyanjijian/Public/images/ArticleUnscramble/bottom.png" alt=""></div>
        </div> -->
        <div class="context-4">
            <div class="explain">
                <ul>
                    <li><pre><?php echo ($w_deatal_article["w_text"]); ?></pre></li>
                </ul>
            </div>
        </div>
    </div>
</body>
<style>
.contain-2-1{
    min-width: 100%;
}
.contain-2-1 .time{
    margin: 0px;
    padding: 0px;
    color: #939393;
    height: 17px;
    font-size: 16px;
    height: 20px;
    position: relative;
    top: 30px;
    border-bottom: 1px solid #f2f3f5;
    margin-left: 15px;
    margin-right: 15px;
}
.contain-2-1 .time .left{
    height: 18px;
    position: absolute;
    bottom: 0px;
    right: 166px;
    font-size: 12px;
}
.contain-2-1 .time .right{
    height: 18px;
    position: absolute;
    bottom: 0px;
    right: 16px;
    font-size: 12px;
}
.contain-2-1 .context-1{
    position: relative;
}
.contain-2-1 .context-1 .title{
    margin: 0px;
    padding: 0px;
    position: relative;
    min-height: auto;
    top: 14px;
    margin-left: 16px;
    margin-right: 16px;
    overflow: hidden;
}
.contain-2-1 .context-1 .title p{
    margin: 0px;
    padding: 0px;
    color:#000;
    height: 58px;
    font-size:20px;
}
.contain-2-1 .head-head{
    margin: 10px;
}
.contain-2-1 .context-0{
    min-width:100%; 
}
.contain-2-1 .context-0 img{
    width: 100%;
}
.contain-2-1 .head{
    height: 45px;
    background-color:#3c3c3d;
    position: relative;
}
.contain-2-1 .head .return{
    width: 22px;
    height: 45px;
    position: absolute;
    top: 0px;
    left: 0px;
}
.contain-2-1 .head .return img{
    width: 12px;
    height: 12px;
    position: absolute;
    top: 16px;
}
.contain-2-1 .head .clear{
    width: 30px;
    height: 45px;
    position: absolute;
    top: 0px;
    left: 22px;
}
.contain-2-1 .head .clear img{
    width: 30px;
    height: 30px;
    position: absolute;
    top: 6px;
}
.contain-2-1 .head .clear-text{
    width: 150px;
    height: 45px;
    margin: 0 auto;
    color: #fff;
    font-size: 16px;
    position: relative;
}
.contain-2-1 .head .clear-text p{
    position: absolute;
    left: 25%;
    top: 10px;
    vertical-align: middle;
}

.contain-2-1 .context-4{
    min-width: 90%;
    height:auto;
}
.contain-2-1 .context-4 ul li{
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 40px;
    margin-bottom: 20px;
}
.contain-2-1 .context-4 ul li pre{
    color: #333;
    font-size: 16px;
    line-height: 28px;
    white-space: pre-wrap;
}
</style>
</html>