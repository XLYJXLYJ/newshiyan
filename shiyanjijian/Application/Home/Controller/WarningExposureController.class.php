<?php
namespace Home\Controller;
use Think\Controller;

class  WarningExposureController  extends Controller {
	public function WarningExposure() {
		$article =  M('Warning');
		$this->assign('w_article',$article->select());
		$this->display();
	}

	public function WarningExposureDetail() {
		$detail_article =  M('Warning');
		$this->assign('w_deatal_article',$detail_article->find(I('id')));
		$this->display();
	}
}