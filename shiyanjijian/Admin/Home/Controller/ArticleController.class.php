<?php

namespace Home\Controller;
use Think\Controller;

class ArticleController extends Controller {
	public function ArticleAdd () {
        $article =  D('Article');
        if (IS_POST) {
            // var_dump(I('context_t'));
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     "./Public/upload/"; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();

            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                // $this->success('上传成功！');
                $img_path = './Public/upload/'.$info['title_img']['savepath'].$info['title_img']['savename'];
                // $article =  D('Article');
                // $article->img_path = $img_path;
                // $up_img['img_path'] = $img_path;
                // $article->add($up_img);
                $_POST['img_path']=$img_path;
            }
            $t=time();
            $_POST['c_time']=$t;
            $article->add($_POST);
        }
        $this->display();
    }
    
    public function ArticleUnscramble () {
        $admin_article = D('Article');
        $this->assign('a_article',$admin_article->select());

        $this->display();
    }

    public function ArticleDelete () {
        $d_article = D('Article');
        if($d_article->delete(I('id'))){
           $this->redirect('Home/article/ArticleUnscramble');
        }
        $this->display();
    }

    public function ArticleEdit () {
        $e_article =  D('Article');
        if (IS_POST) {
            $e_article =  D('Article');

            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     "./Public/upload/"; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();

            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                // $this->success('上传成功！');
                $img_path = './Public/upload/'.$info['title_img']['savepath'].$info['title_img']['savename'];
                // $article =  D('Article');
                // $article->img_path = $img_path;
                // $up_img['img_path'] = $img_path;
                // $article->add($up_img);
                $_POST['img_path']=$img_path;
            }


            $ee_id = I('id');
            $e_article->where('id='.$ee_id)->save($_POST);
        }

        $this->assign('edit_article',$e_article->find(I('id')));
 
        $this->display();

    }

}