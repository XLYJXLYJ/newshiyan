<?php
namespace Home\Controller;
use Think\Controller;

class ArticleUnscrambleController extends Controller {
	public function ArticleUnscramble() {
		$article =  M('Article');
		$this->assign('g_article',$article->select());
		$this->display();
	}
}