<?php
namespace Home\Controller;
use Think\Controller;

class ReportController extends Controller {
	private $data2="";
	private $iftime=0;
	public function reportList($scale){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');
		$keyword=I('get.keyword');
		$pageNum=10;
		$page=I('get.page');
		if(!$page)$page=1;
		//全部
		if($scale==1){
			$data=M('report')->order("createTime desc")->page($page,$pageNum)->select();
			$maxPage=(int)ceil(count(M('report')->select())/$pageNum);
		}
		//未回复
		else if($scale==2||$scale==6){
			$data=M('report')->where('ifReply  = 0 and ifAgree =1')->order("createTime desc")->page($page,$pageNum)->select();
			$maxPage=(int)ceil(count(M('report')->where('ifReply  = 0 and ifAgree =1')->select())/$pageNum);
		}
		//已回复
		else if($scale==3){
			$data=M('report')->where('ifReply = 1 and ifAgree =1')->order("createTime desc")->page($page,$pageNum)->select();
			$maxPage=(int)ceil(count(M('report')->where('ifReply = 1 and ifAgree =1')->select())/$pageNum);
		}
		//未受理
		else if($scale==4){
			$data=M('report')->where('ifAgree = 0')->order("createTime desc")->page($page,$pageNum)->select();
			$maxPage=(int)ceil(count(M('report')->where('ifAgree = 0')->select())/$pageNum);
		}
		//不受理
		else if($scale==5){
			$data=M('report')->where('ifAgree = 2')->order("createTime desc")->page($page,$pageNum)->select();
			$maxPage=(int)ceil(count(M('report')->where('ifAgree = 2')->select())/$pageNum);
		}
		//关键字搜索结果
		if($keyword){
			$map['a_name|a_work|a_link|a_address|a_company|a_IDcard|a_political|a_email|b_name|b_work|b_level|b_special|b_campany|b_address|b_political|title|scale|contain|result|qrcd']=array('like',"%".$keyword."%");
			$data=M('report')->where($map)->page($page,$pageNum)->select();
			$maxPage=(int)ceil(count(M('report')->where($map)->select())/$pageNum);
		}
		//时间搜索结果
		if($this->iftime==1){
			$data=$this->data2;
			$maxPage=(int)ceil(count($data)/$pageNum);
		}
		$this->assign('data',$data);
		$this->assign('page',$page);
		$this->assign('scale',$scale);
		$this->assign('keyword',$keyword);
		$this->assign('maxPage',$maxPage);
		$this->display('Report:reportList');
	}
	public function reportDetail($id,$scale){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');
		$data=M('report')->where('id='.$id)->select();
		$data['scale']=$scale;
		$this->assign('data',$data);
		$this->display('reportDetail');
	}
	public function reportReply(){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');

		$id=I('get.id');
		$data=M('report')->where('id='.$id)->select();
		$this->assign('data',$data[0]);
		$this->display();
	}
	//回复功能
	public function updateReply(){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');

		$id=$_POST['id'];
		$reply=$_POST['reply'];
		$db=M('report');
		$data['result']=$reply;
		$data['ifReply']=1;
		$data['replyTime']=time();
		if($db->where("id='".$id."'")->save($data)){
			echo 1;
		}
		else{
			echo 0;
		}
	}
	public function delete(){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');

		$id=I('post.id');
		$db=M('report');
		if($db->where('id='.$id)->delete())$result=0;
		else $result=1;
		echo $result;
	}
	// 按时间搜索页面
	public function timePage(){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');

		$this->display();
	}
	// 按时间搜索
	public function timeSearch(){
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');
		
		$start=I('get.start');
		$end=I('get.end');
		$startTime=strtotime($start." 00:00:00");
		$endTime=strtotime($end." 23:59:59");
		$data=M('report')->where('createTime >= '.$startTime.' And createTime <= '.$endTime)->order('createTime desc')->select();
		$this->iftime=1;
		$this->data2=$data;
		$this->reportList(1);
	}
	// 受理功能
	public function agree(){
		tag('login_tag');
		$id=I('get.id');
		$data['ifAgree']=1;
		$data['agreeTime']=time();
		if(M('report')->where('id ='.$id)->save($data))$this->reportDetail($id,2);
		else $this->error('操作失败');
	}
	// 不受理功能
	public function noAgree(){
		tag('login_tag');
		$id=I('post.id');
		$data['noAgreeMsg']=I('post.msg');
		$data['ifAgree']=2;
		if(M('report')->where('id ='.$id)->save($data))echo 1;
		else echo 0;
	}
}