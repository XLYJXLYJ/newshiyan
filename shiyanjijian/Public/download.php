<?php 
function downfile($fileurl,$type)
{
 ob_start(); 
 $filename=$fileurl;
 $date=time();
 header( "Content-type:  application/octet-stream "); 
 header( "Accept-Ranges:  bytes "); 
 header( "Content-Disposition:  attachment;  filename= {$date}.".$type); 
 $size=readfile($filename); 
  header( "Accept-Length: " .$size);
}
 $url=$_GET['url'];
 $type=$_GET['type'];
 downfile($url,$type);
?> 