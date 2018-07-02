<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/shiyanjijian/Public/css/init.css">
    <title>条文解读</title>
</head>
<body>
    <div class="contain-1-1">
        <div class="head">
            <div class="return"><img src="/shiyanjijian/Public/images/ArticleUnscramble/return.png" alt=""></div>
            <a href="./ArticleUnscramble">
                <div class="clear"><img src="/shiyanjijian/Public/images/ArticleUnscramble/clear.png" alt=""></div>
            </a>
            <div class="clear-text"><p>廉洁石岩</p></div>
        </div>
        <div class="context-1">
            <div class="title"><p><?php echo ($deatal_article["title"]); ?></p></div>
            <div class="time"><p><?php echo (date("Y-m-d",$deatal_article["c_time"])); ?></p></div>
        </div>
        <div class="context-2">
            <div class="swipe">
                <img src="/shiyanjijian/Public/images/ArticleUnscramble/swipe.gif" alt="">
            </div>
        </div>
        <div class="context-3">
            <div class="brief">
                <img class="book" src="/shiyanjijian/Public/images/ArticleUnscramble/book.png" alt="">
                <div class="brier-text">
                    <p><?php echo ($deatal_article["outline"]); ?></p>
                    <p><span class="laws"><?php echo ($deatal_article["title_from"]); ?></span></p> 
                    <span class="num-laws"><?php echo ($deatal_article["order_by"]); ?></span>
                </div>
            </div>
        </div>
        <div class="context-4">
            <div class="explain">
                <ul>
                    <li><pre><?php echo ($deatal_article["context_t"]); ?></pre></li>
                </ul>
            </div>
        </div>
        <div class="context-5">
            <p>来源<span>|</span>中央纪委国家监委网站</p>
            <div class="qr"><img src="/shiyanjijian/Public/images/ArticleUnscramble/qr.png" alt=""></div>
            <div class="bottom-img"><img src="/shiyanjijian/Public/images/ArticleUnscramble/bottom.png" alt=""></div>
        </div>
    </div>
</body>
<style>
.contain-1-1{
    min-width: 100%;
}
.contain-1-1 .head{
    height: 45px;
    background-color:#3c3c3d;
    position: relative;
}
.contain-1-1 .head .return{
    width: 22px;
    height: 45px;
    position: absolute;
    top: 0px;
    left: 0px;
}
.contain-1-1 .head .return img{
    width: 12px;
    height: 12px;
    position: absolute;
    top: 16px;
}
.contain-1-1 .head .clear{
    width: 30px;
    height: 45px;
    position: absolute;
    top: 0px;
    left: 22px;
}
.contain-1-1 .head .clear img{
    width: 30px;
    height: 30px;
    position: absolute;
    top: 6px;
}
.contain-1-1 .head .clear-text{
    width: 150px;
    height: 45px;
    margin: 0 auto;
    color: #fff;
    font-size:16px;
    position: relative;
}
.contain-1-1 .head .clear-text p{
    position: absolute;
    left: 25%;
    top: 10px;
    vertical-align: middle;
}
.contain-1-1 .context-1{
    position: relative;
    height: 113px;
}
.contain-1-1 .context-1 .title{
    margin: 0px;
    padding: 0px;
    position: absolute;
    height: 48px;
    top: 24px;
    margin-left: 16px;
    margin-right: 16px;
}
.contain-1-1 .context-1 .title p{
    margin: 0px;
    padding: 0px;
    color: #7f7f7f;
    height: 58px;
    font-size: 20px;
}
.contain-1-1 .context-1 .time{
    margin: 0px;
    padding: 0px;
    color: #939393;
    height: 17px;
    font-size: 16px;

}
.contain-1-1 .context-1 .time p{
    height: 18px;
    position: absolute;
    bottom: 0px;
    left: 16px;
    font-size:12px;
}
.contain-1-1 .context-2 .swipe{
    height: auto;
    background-color: #b10006;
    margin-top: 28px;
    margin-left: 14px;
    margin-right: 14px;
    text-align: center;

}
.contain-1-1 .context-2 .swipe p{
    color:#fff;
    font-size:20px;
    padding-top: 2px;
}
.contain-1-1 .context-3{
    min-width: 90%;
    height:auto;
}
.contain-1-1 .context-3 .brief{
    min-width: 90%;
    height:auto;
    border: 1px solid #b10006;
    margin-top: 40px;
    margin-left: 24px;
    margin-right: 24px;
    position: relative;
}
.contain-1-1 .context-3 .brief .book{
    position: absolute;
    top:-15px;
    left:-15px;
    width: 35px;
    height: 24px;
}
.contain-1-1 .context-3 .brief .brier-text{
    min-width: 90%;
    height:auto;
    margin: 8px;
    background-color:#b10001;
    color: #fff;
    font-size: 1px;
    /* position: relative; */
}
.contain-1-1 .context-3 .brief .brier-text p{
    line-height: 28px;
    padding-top: 20px;
    padding-left: 15px;
    padding-right: 15px;
    padding-bottom: 30px;
    display: block;
    /*  position: relative; */
}
.contain-1-1 .context-3 .brief .brier-text .laws{
    padding: 0px;
    position: absolute;
    right: 24px;
    bottom: 35px;
    display: block;
}
.contain-1-1 .context-3 .brief .brier-text .num-laws{
    padding: 0px;
    position:absolute;
    right: 24px;
    bottom: 10px;  
}
.contain-1-1 .context-4{
    min-width: 90%;
    height:auto;
}
.contain-1-1 .context-4 ul li{
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 20px;
    margin-bottom: 20px;
}
.contain-1-1 .context-4 ul li pre{
    color: #333;
    font-size: 16px;
    line-height: 28px;
    white-space: pre-wrap;
}
.contain-1-1 .context-5{
    min-width: 90%;
    height:auto;
}
.contain-1-1 .context-5 p{
    font-size: 14px;
    color: #333;
    margin-bottom: 20px;
    margin-left: 15px;
}
.contain-1-1 .context-5 p span{
    margin: 2px;
}
.contain-1-1 .context-5 .qr{
    min-width: 90%;
    height: 200px;
    text-align: center;
}
.contain-1-1 .context-5 .qr img{
    height: 200px;
    width: 200px;
}
.contain-1-1 .context-5 .bottom-img{
    min-width: 90%;
    height: 100px;
    text-align: center;
}
.contain-1-1 .context-5 .bottom-img img{
    height: 56px;
    width: 213px;
}
.contain-1-1 .context-4{
    min-width: 90%;
    height:auto;
}
.contain-1-1 .context-4 ul li{
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 40px;
    margin-bottom: 20px;
}
.contain-1-1 .context-4 ul li p{
    color: #333;
    font-size: 16px;
    line-height: 28px;
    text-indent: 2em;
}
</style>
</html>