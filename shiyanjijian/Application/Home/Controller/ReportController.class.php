<?php
namespace Home\Controller;
use Think\Controller;

class ReportController extends Controller {
	public function report() {
		$this->display('report');
	}
	public function verifyCode(){
		$srcstr = "1a2s3d4f5g6hj8k9qwertyupzxcvbnm";
		$len=4;
	    $str = "";
	    for ($i = 0; $i < $len; $i++) {
	        $str .= $srcstr[mt_rand(0, 30)];
	    }
	    $data['str']=$str;
	    $data['img']=__ROOT__.'/Public/code.php?str='.$str;
		echo json_encode($data);
	}
	public function addReport(){
		$data=I('post.');
		// $temp=array('mV863Nr0-i1gTANJoPbnmnRy0Tz4UexyuZKdB_imeXcSeXNZMiBMSMvvKKszJqFP',
		// 'BQ8F8lYxFAME7dt1l7NMmhG8e12qlzqLUhmaglUQ4AR1gs7CC1ahD-um0ZrtGwln');
		// $data['file']=json_encode($temp);
		if($data['file']){
			$path='./Uploads/'.date('Y-m-d').'/';
			if(!is_dir($path))mkdir($path,0777);
			$zip=new \ZipArchive();
			// 压缩包保存路径
			$zipName=$path.time().'.zip';
			if($zip->open($zipName,\ZipArchive::CREATE)===true){
				$serverIds=json_decode(htmlspecialchars_decode($data['file']));
				$access_token=$this->getAccessToken();
				$len=count($serverIds);
				for($i=0;$i<$len;$i++){
					$media_id=$serverIds[$i];
					$url="http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=$access_token&media_id=$media_id";
					$filename[$i]=time().substr($media_id,9,3).'.jpg';
					if($this->getFile($url,$path,$filename[$i],1)){
						if($zip->addFile($path.$filename[$i],$filename[$i])){
							// 如果所有的文件压缩完毕则关闭zip
							if($i==$len-1){
								// 如果关闭成功则删除多余文件
								if($zip->close()){
									for($j=0;$j<$len;$j++){
										unlink($path.$filename[$j]);
									}
								}
							}
						};
					}
				}
			}
			$data['file']=substr($zipName,1,strlen($zipName)-1);
		}
		$data['status']=0;
		$data['createTime']=time();
		$db=M('report');
		if(!$db->add($data)){
			$this->assign('msg',1);
			$this->display('report');
			die();
		};
		//获取id
		$id=$db->order('id desc')->limit(1)->select();
		$id=$id[0]['id'];
		//对id加密生成查询码
		$data2['qrcd']=rand(10000000,99999999);
		// 如果数据库已存在该查询码则重新生成
		while($db->where('qrcd ='.$data2['qrcd'])->find()){
			$data2['qrcd']=rand(10000000,99999999);
		}
		if($db->where('id='.$id)->save($data2)){
			$this->assign('queryCode',$data2['qrcd']);
			$this->display('Query:query');
		}
		else{
			$this->assign('msg',2);
			$this->display('report');
		} 
	}
	// AppId:wxbf37b26e66523f67
	// appSecret:fc6f99a4450e643ac4a71fc8cf187c0e
	// 获取微信接口配置
	public function getSignPackage(){
		$jsapiTicket = $this->getJsApiTicket();
		$url = "http://$_SERVER[HTTP_HOST]/index.php/Home/Report/report.html";
		$timestamp = time();
    	$nonceStr = $this->createNonceStr();
    	// 这里参数的顺序要按照 key 值 ASCII 码升序排序
    	$signature = sha1("jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url");
    	$signPackage = array(
	      "appId"     => 'wxbf37b26e66523f67',
	      "nonceStr"  => $nonceStr,
	      "timestamp" => $timestamp,
	      "url"       => $url,
	      "signature" => $signature,
	      "rawString" => $string,
	    );
	    echo json_encode($signPackage);
	}
	// 获取jsapi_ticket
	private function getJsApiTicket(){
		if(!S('jsApiTicket')){
			$accessToken=$this->getAccessToken();
			$url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";
			$res = json_decode($this->httpGet($url));
			S('jsApiTicket',$res->ticket,$res->expires_in);
		}
		return S('jsApiTicket');
	}
	// 获取accessToken
	private function getAccessToken() {
		if(!S('accessToken')){
			$url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxbf37b26e66523f67&secret=fc6f99a4450e643ac4a71fc8cf187c0e";
			$res = json_decode($this->httpGet($url));
			S('accessToken',$res->access_token,$res->expires_in);
		}
		return S('accessToken');
	}
	// 生成随机字符串
	private function createNonceStr($length = 16) {
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    $str = "";
	    for ($i = 0; $i < $length; $i++) {
	      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
	    }
	    return $str;
	  }
	// 获取url返回的内容
	private function httpGet($url) {
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
	    $output = curl_exec($ch);
	    curl_close($ch);

	    return $output;
	}
	//保存远程图片
	function getFile($url,$save_dir='',$filename='',$type=0){
		if(trim($url)==''){
		   return false;
		}
		if(trim($save_dir)==''){
		   $save_dir='./';
		}
		if(0!==strrpos($save_dir,'/')){
		   $save_dir.='/';
		}
		//创建保存目录
		if(!file_exists($save_dir)&&!mkdir($save_dir,0777,true)){
		   return false;
		}
		//获取远程文件所采用的方法
		if($type){
		  $ch=curl_init();
		  $timeout=5;
		  curl_setopt($ch,CURLOPT_URL,$url);
		  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		  $content=curl_exec($ch);
		  curl_close($ch);
		}else{
		  ob_start();
		  readfile($url);
		  $content=ob_get_contents();
		  ob_end_clean();
		}
		$size=strlen($content);
		 //文件大小
		 $fp2=@fopen($save_dir.$filename,'a');
		 fwrite($fp2,$content);
		 fclose($fp2);
		 unset($content,$url);
		 return array('file_name'=>$filename,'save_path'=>$save_dir.$filename);
		}
}