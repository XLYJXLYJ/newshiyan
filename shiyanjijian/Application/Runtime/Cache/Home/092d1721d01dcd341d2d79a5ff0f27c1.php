<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/shiyanjijian/Public/css/init.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>学习问答</title>
</head>
<body>
    <div class="contain-8">
        <div class="aswer-img"><img src="/shiyanjijian/Public/images/StudyAnswer/know.png" alt=""></div>
        <div class="one" id="one">
            <p>你的得分:<span>80分</span></p>
            <p>你所在部分平均分:<span>80分</span></p>
            <p>你所在部门排名:<span>第一名</span></p>
            <button type="submit" class="btn btn-default" id="submit-answer">重新答题</button>
        </div>
    </div>
</body>
<style>
.contain-8{
    min-width: 100%;
    background-color: #fdb1a1;
    padding-bottom: 40px;
    min-height: 100%;
}
.contain-8 .aswer-img img{
    min-width: 100%;
}
.contain-8 .one{
    text-align: center;
    line-height: 38px;
    margin-top: 20%;
}
.contain-8 .one p{
    font-size: 20px;
    font-weight: 600;
}
.contain-8 .one span{
    font-size: 20px;
    font-weight: 600;
}
.contain-8 button{
    margin-top: 30px;
    color: #fff;
    background-color: #b10018;
    border: none;
}
.contain-8 .btn{
    padding-left: 20px;
    padding-right: 20px;
}
</style>
<script>


$('#submit-answer').click(
    function(){
        $("#one").addClass('showclose');
        // $('#two').removeClass('showclose');
    }
)
</script>
<!-- <script type="text/javascript" src="/shiyanjijian/Public/js/study.js"></script> -->
</html>