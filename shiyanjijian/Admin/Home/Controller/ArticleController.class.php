<?php

namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller {
	public function ArticleUnscramble () {
        if (IS_POST) {
            $article =  D('Article');
            echo $article->add($_POST)?1:0;
            # code...
        }
        $this->display();
    }
}