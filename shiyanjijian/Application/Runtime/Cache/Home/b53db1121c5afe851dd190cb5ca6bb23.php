<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/shiyanjijian/Public/css/init.css">
    <title>Document</title>
</head>
<body>
    <div class="contain-4-1">
        <div class="head">
            <div class="return"><img src="/shiyanjijian/Public/images/ArticleUnscramble/return.png" alt=""></div>
            <a href="./CleanCulture.html">
                <div class="clear"><img src="/shiyanjijian/Public/images/ArticleUnscramble/clear.png" alt=""></div>
            </a>
            <div class="clear-text"><p>廉洁石岩</p></div>
        </div>
        <ul>
            <li>
                <p><?php echo ($ct["c_title1"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img1"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title2"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img2"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title3"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img3"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title4"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img4"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title5"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img5"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title6"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img6"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title7"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img7"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title8"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img8"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title9"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img9"]); ?>" alt="">
            </li>
            <li>
                <p><?php echo ($ct["c_title10"]); ?></p>
                <img src="../../../<?php echo ($ct["c_img10"]); ?>" alt="">
            </li>
        </ul>
    </div>
</body>
<style>
.contain-4-1{
    min-width: 100%;
}
.contain-4-1 .head{
    height: 45px;
    background-color:#3c3c3d;
    position: relative;
}
.contain-4-1 .head .return{
    width: 22px;
    height: 45px;
    position: absolute;
    top: 0px;
    left: 0px;
}
.contain-4-1 .head .return img{
    width: 12px;
    height: 12px;
    position: absolute;
    top: 16px;
}
.contain-4-1 .head .clear{
    width: 30px;
    height: 45px;
    position: absolute;
    top: 0px;
    left: 22px;
}
.contain-4-1 .head .clear img{
    width: 30px;
    height: 30px;
    position: absolute;
    top: 6px;
}
.contain-4-1 .head .clear-text{
    width: 150px;
    height: 45px;
    margin: 0 auto;
    color: #fff;
    font-size: 16px;
    position: relative;
}
.contain-4-1 .head .clear-text p{
    position: absolute;
    left: 25%;
    top: 10px;
    vertical-align: middle;
}
.contain-4-1 ul{
    margin: 15px;
    min-width: 90%;
}
.contain-4-1 ul li{
    margin-bottom: 30px;
    border-bottom: 1px solid #f2f3f5;
    text-align: center;
}
.contain-4-1 ul li p{
    font-size: 20px;
}
.contain-4-1 ul li p img{
    min-width: 100%;
}
</style>
</html>