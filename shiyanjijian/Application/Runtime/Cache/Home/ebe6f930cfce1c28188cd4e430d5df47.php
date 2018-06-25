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
        <div class="head"><img src="/shiyanjijian/Public/images/StudyAnswer/know.png" alt=""></div>
        <div class="one">
            <form action="">
                <input class="form-control" type="text" placeholder="姓名"><br/>
                <input class="form-control" type="text" placeholder="年龄"><br/>
                <select class="form-control top-distance">
                        <option>男</option>
                        <option>女</option>
                </select>
                <input class="form-control" type="text" placeholder="所在部门"><br/>
                <select class="form-control top-distance">
                        <option>政治面貌</option>
                        <option>党员</option>
                        <option>团员</option>
                        <option>民主党派</option>
                        <option>无党派人士</option>
                        <option>群众</option>
                </select>
                <input class="form-control" type="text" placeholder="职务"><br/>
                <select class="form-control top-distance">
                        <option>职级</option>
                        <option>科级以下</option>
                        <option>科级</option>
                        <option>处级</option>
                        <option>局级</option>
                        <option>局级以上</option>
                        <option>其他</option>
                </select>
                <a href="./Answer.html"><input type="button" class="form-control submit-color" value="提 交"></a> 
            </form>
        </div>
    </div>
</body>
<style>
.contain-8{
    min-width: 100%;
    background-color: #b00017ab;
    padding-bottom: 40px;
    min-height: 100%;
}
.contain-8 .head img{
    min-width: 100%;
    margin-bottom: 20px;
}
.contain-8 .one{
    text-align: center;
    margin: 0 auto;
    width: 70%;
}
.contain-8 option{
    min-width: 100%；
}
.top-distance{
    margin-bottom: 20px;
}
.submit-color{
    color: #fff;
    background-color: #fdb1a1;
}
input{
    outline: none;
}
</style>
</html>