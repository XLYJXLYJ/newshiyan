<?php 
$str=$_GET['str'];
	    //验证码图片的宽度
$width  = 80;      
 
//验证码图片的高度
$height = 35;     
 
//声明需要创建的图层的图片格式
@ header("Content-Type:image/png");
 
//创建一个图层
$im = imagecreate($width, $height);
 
//背景色
$back = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
 
//模糊点颜色
$pix  = imagecolorallocate($im, 187, 230, 247);
 
//字体色
$font = imagecolorallocate($im, 41, 163, 238);
 
//绘模糊作用的点
mt_srand();
for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $pix);
}
 
//输出字符
imagestring($im, 5, 23, 8, $str, $font);
 
//输出矩形
imagerectangle($im, 0, 0, $width -1, $height -1, $font);
 
//输出图片
imagepng($im);
 
imagedestroy($im);
 
?>