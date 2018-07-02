<?php
namespace Home\Controller;
use Think\Controller;

class CleanCultureController extends Controller {
	public function CleanCulture() {
		$admin_Clean = D('Clean');
        $this->assign('c_Clean',$admin_Clean->select());
		$this->display();
	}

	public function CleanCultureDetail() {
		$ci_clean =  M('clean');
		$this->assign('ct',$ci_clean->find(I('id')));
		$this->display();
	}
}