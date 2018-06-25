<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	public function index() {
		$this->display();
	}
	
	public function test(){
		if(I('get.string') == 'baixiao')
			{
				$data = M('syjj_laws');
				dump($data);die();
			}
	}
}
