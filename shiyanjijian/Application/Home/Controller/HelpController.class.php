<?php
namespace Home\Controller;
use Think\Controller;

class HelpController extends Controller {
	public function help() {
		$this->display();
	}
	public function lawsList(){
		$scale=I('get.scale');
		if(!$scale)$scale=1;
		$db=M('laws');
		$list=$db->where('scale='.$scale)->field('id,title')->select();
		$this->assign('scale',$scale);
		$this->assign('list',$list);
		$this->display();
	}
	public function lawsDetail(){
		$id=I('get.id');
		$db=M('laws');
		$data=$db->where('id='.$id)->select();
		$this->assign('data',$data[0]);
		$this->display();
	}
}