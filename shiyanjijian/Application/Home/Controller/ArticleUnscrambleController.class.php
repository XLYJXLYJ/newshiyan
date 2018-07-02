<?php
namespace Home\Controller;
use Think\Controller;

class ArticleUnscrambleController extends Controller {
	public function ArticleUnscramble() {
		$article =  M('Article');
		$this->assign('g_article',$article->select());
		$this->display();
	}

	public function ArticleUnscrambleDetail() {
		$detail_article =  M('Article');
		$this->assign('deatal_article',$detail_article->find(I('id')));
		$this->display();
	}
}