<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/shiyanjijian/Public/css/init.css">
    <title>Document</title>
</head>
<body>
    <div class="contain-2">
        <div class="head-img">
            <a href=""><img src="/shiyanjijian/Public/images/WarningExposure/head.png" alt=""></a>
        </div>
        <div class="article">
            <h2 class="lib-title">警示曝光</h2>
            <div class="lib-context">
            <?php if(is_array($w_article)): foreach($w_article as $key=>$w_art): ?><ul>
                    <a href="./WarningExposureDetail.html?id=<?php echo ($w_art["id"]); ?>">
                        <li>
                            <!-- <img class="left-img" src="../../../<?php echo ($w_art["w_img"]); ?>" alt=""> -->
                            <h3 class="context-title"><?php echo ($w_art["w_title"]); ?></h3>
                            <p class="time-text"><img class="time" src="/shiyanjijian/Public/images/ArticleUnscramble/time.png" alt=""><?php echo (date("Y-m-d",$w_art["w_time"])); ?></p>
                        </li>
                    </a>
                </ul><?php endforeach; endif; ?>
            </div>
            <div class="download-more">
                <p>点击加载更多<img src="/shiyanjijian/Public/images/ArticleUnscramble/download.png" alt=""></p>
            </div>
        </div>
    </div>
</body>
<style>
.contain-2{
    min-width: 100%;
}
.contain-2 .article{
    min-width: 100%;
    height: 56px;
    position: relative;
    margin-top: 20px;
}
.contain-2 .article .lib-context{
    margin: 10px;
}
.contain-2 .lib-context ul a{
    color: #000;
}
.contain-2 .lib-context ul li{ 
    position: relative;
    min-width: 100%;
    min-height: 50px;
    margin-bottom: 10px;
    border-bottom: 1px solid #f2f3f5;
}
/* .contain-2 .lib-context ul li .left-img{
    width: 120px;
    height: 92px;
} */
.contain-2 .head-img{
    min-width: 100%;
}
.contain-2 .head-img img{
    min-width: 100%;
}
.contain-2 .article .lib-title{
    font-size: 18px;
    font-weight: bold;
    color:#b10006;
    padding: 6px 10px 20px 10px;
    text-align: left;
}
.contain-2 .article .lib-title img{
    position: relative;
    left: 4px;
    top: 4px;
}
.contain-2 .lib-context ul li .context-title{
    height: 48px;
    position: absolute;
    top: 0px;
    /* left: 140px; */
    left: 10px;
    overflow: hidden;
    font-size: 14px;
}
.contain-2 .lib-context ul li .time-text{
    width: 89px;
    height: 18px;
    position: absolute;
    bottom: 10px;
    right: 0px;
    overflow: hidden;
    color: #999;
    font-size: 12px;
}
.contain-2 .lib-context ul li .time-text .time{
    width: 16px;
    height: 18px;
    position: relative;
    top: 0px;
    right: 0px;
}
.contain-2 .article .download-more{
    text-align: center;
    height: 56px;
    margin: 0 auto;
    color: #afafaf;
    font-size: 12px;
}
.contain-2 .download-more img{
    position: relative;
    top: 2px;
}
</style>
</html>