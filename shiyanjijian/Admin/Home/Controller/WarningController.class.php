<?php

namespace Home\Controller;
use Think\Controller;

class WarningController extends Controller {
	public function WarningAdd () {

        $Warning =  D('Warning');
        if (IS_POST) {

            // $upload = new \Think\Upload();// 实例化上传类
            // $upload->maxSize   =     3145728 ;// 设置附件上传大小
            // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            // $upload->rootPath  =     "./Public/upload/"; // 设置附件上传根目录
            // $upload->savePath  =     ''; // 设置附件上传（子）目录
            // // 上传文件 
            // $info   =   $upload->upload();

            // if(!$info) {// 上传错误提示错误信息
            //     $this->error($upload->getError());
            // }else{// 上传成功
            //     // $this->success('上传成功！');
            //     $img_path = './Public/upload/'.$info['w_img']['savepath'].$info['w_img']['savename'];
            //     $_POST['w_img']=$img_path;
            // }
            $wt=time();
            $_POST['w_time']=$wt;
            $Warning->add($_POST);
        }
        $this->display();

    }
    
    public function WarningExposure () {
        $admin_Warning = D('Warning');
        $this->assign('w_Warning',$admin_Warning->select());
        $this->display();
    }

    public function WarningDelete () {
        $d_Warning = D('Warning');
        if($d_Warning->delete(I('id'))){
           $this->redirect('Home/Warning/WarningExposure');
        }
        $this->display();
    }

    public function WarningEdit () {
        $w_Warning =  D('Warning');

        if (IS_POST) {
            $e_Warning =  D('Warning');

            // $upload = new \Think\Upload();// 实例化上传类
            // $upload->maxSize   =     3145728 ;// 设置附件上传大小
            // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            // $upload->rootPath  =     "./Public/upload/"; // 设置附件上传根目录
            // $upload->savePath  =     ''; // 设置附件上传（子）目录
            // // 上传文件 
            // $info   =   $upload->upload();

            // if(!$info) {// 上传错误提示错误信息
            //     $this->error($upload->getError());
            // }else{// 上传成功
            //     // $this->success('上传成功！');
            //     $img_path = './Public/upload/'.$info['w_img']['savepath'].$info['w_img']['savename'];
            //     $_POST['w_img']=$img_path;
            // }

            
            $w_id = I('id');
            var_dump(I('id'));
            $e_Warning->where('id='.$w_id)->save($_POST);
        }

        $this->assign('w_Warning',$w_Warning->find(I('id')));

        $this->display();

    }

}