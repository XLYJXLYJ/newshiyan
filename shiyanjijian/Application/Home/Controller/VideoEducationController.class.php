<?php
namespace Home\Controller;
use Think\Controller;

class VideoEducationController extends Controller {

	public function index() {
		$this->display('query');
	}
	public function query(){
		$queryCode=I('post.queryCode');
		$db=M('report');
		$data=$db->where('qrcd ="%s" ',$queryCode)->find();
		if(!$data)$result=array('code'=>1,'msg'=>'查询码不存在。');
		else if($data['ifAgree']==0)$result=array('code'=>2,'msg'=>'您反映的问题处理中，<br />请耐心等待。');
		else if($data['ifAgree']==1&&$data['ifReply']==0)$result=array('code'=>3,'msg'=>'您反映的问题已受理，<br />请耐心等待回复。');
		else if($data['ifAgree']==1&&$data['ifReply']==1)$result=array('code'=>0,'data'=>$data['result']);
		else if($data['ifAgree']==2)$result=array('code'=>4,'msg'=>$data['noAgreeMsg']);
		echo json_encode($result);
	}
}