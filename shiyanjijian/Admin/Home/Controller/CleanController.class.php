<?php

namespace Home\Controller;
use Think\Controller;

class CleanController extends Controller {
	public function CleanAdd () {
        if (IS_POST) {
            $Clean =  D('Clean');

            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     "./Public/upload/clean/"; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->upload();
            var_dump($info);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                $this->success('上传成功！');
                $img_path  = './Public/upload/clean/'.$info['c_img']['savepath'].$info['c_img']['savename'];
                $img_path1 = './Public/upload/clean/'.$info['cc_img1']['savepath'].$info['cc_img1']['savename'];
                $img_path2 = './Public/upload/clean/'.$info['cc_img2']['savepath'].$info['cc_img2']['savename'];
                $img_path3 = './Public/upload/clean/'.$info['cc_img3']['savepath'].$info['cc_img3']['savename'];
                $img_path4 = './Public/upload/clean/'.$info['cc_img4']['savepath'].$info['cc_img4']['savename'];
                $img_path5 = './Public/upload/clean/'.$info['cc_img5']['savepath'].$info['cc_img5']['savename'];
                $img_path6 = './Public/upload/clean/'.$info['cc_img6']['savepath'].$info['cc_img6']['savename'];
                $img_path7 = './Public/upload/clean/'.$info['cc_img7']['savepath'].$info['cc_img7']['savename'];
                $img_path8 = './Public/upload/clean/'.$info['cc_img8']['savepath'].$info['cc_img8']['savename'];
                $img_path9 = './Public/upload/clean/'.$info['cc_img9']['savepath'].$info['cc_img9']['savename'];
                $img_path10 = './Public/upload/clean/'.$info['cc_img10']['savepath'].$info['cc_img10']['savename'];
                // $Clean =  D('Clean');
                // $Clean->img_path = $img_path;
                // $up_img['img_path'] = $img_path;
                // $Clean->img_path1 = $img_path1;
                // $up_img['img_path1'] = $img_path1;
                // $Clean->img_path2 = $img_path2;
                // $up_img['img_path2'] = $img_path2;
                // $Clean->img_path3 = $img_path3;
                // $up_img['img_path3'] = $img_path3;
                // $Clean->img_path4 = $img_path4;
                // $up_img['img_path4'] = $img_path4;
                // $Clean->img_path5 = $img_path5;
                // $up_img['img_path5'] = $img_path5;
                // $Clean->img_path6 = $img_path6;
                // $up_img['img_path6'] = $img_path6;
                // $Clean->img_path7 = $img_path7;
                // $up_img['img_path7'] = $img_path7;
                // $Clean->img_path8 = $img_path8;
                // $up_img['img_path8'] = $img_path8;
                // $Clean->img_path9 = $img_path9;
                // $up_img['img_path9'] = $img_path9;
                // $Clean->img_path10= $img_path10;
                // $up_img['img_path10'] = $img_path10;
                // $Clean->add($up_img);
                $_POST['c_img']=$img_path;
                $_POST['c_img1']=$img_path1;
                $_POST['c_img2']=$img_path2;
                $_POST['c_img3']=$img_path3;
                $_POST['c_img4']=$img_path4;
                $_POST['c_img5']=$img_path5;
                $_POST['c_img6']=$img_path6;
                $_POST['c_img7']=$img_path7;
                $_POST['c_img8']=$img_path8;
                $_POST['c_img9']=$img_path9;
                $_POST['c_img10']=$img_path10;
            }
            $t=time();
            $_POST['c_time']=$t;
            $Clean->add($_POST);

            // $this->redirect('Clean/CleanAddDetail');
        }


        $this->display();
    }

    // public function CleanAddDetail () {
    //     if (IS_POST) {
    //         $Clean =  D('Cleanimg');

    //         $upload = new \Think\Upload();// 实例化上传类
    //         $upload->maxSize   =     3145728 ;// 设置附件上传大小
    //         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    //         $upload->rootPath  =     "./Public/upload/clean/"; // 设置附件上传根目录
    //         $upload->savePath  =     ''; // 设置附件上传（子）目录
    //         // 上传文件 
    //         $info   =   $upload->upload();

    //         if(!$info) {// 上传错误提示错误信息
    //             $this->error($upload->getError());
    //         }else{// 上传成功
    //             // $this->success('上传成功！');
    //             $img_path = './Public/upload/clean/'.$info['cc_img']['savepath'].$info['cc_img']['savename'];
    //             // $Clean =  D('Clean');
    //             // $Clean->img_path = $img_path;
    //             // $up_img['img_path'] = $img_path;
    //             // $Clean->add($up_img);
    //             $_POST['cc_img']=$img_path;
    //         }
    //         // $aa_Clean =  D('Clean');
    //         // $_POST['c_title'] = $aa_Clean['c_title'];

    //         $Clean->add($_POST);
    //         $this->redirect('Clean/CleanAddDetail');
    //     }
    //     $this->display();
    // }
    
    public function CleanCulture () {
        $admin_Clean = D('Clean');
        $this->assign('c_Clean',$admin_Clean->select());
        var_dump(c_Clean);
        $this->display();
    }

    public function CleanDelete () {
        $d_Clean = D('Clean');
        if($d_Clean->delete(I('id'))){
           $this->redirect('Home/Clean/CleanCulture');
        }
        $this->display();
    }

    public function CleanEdit () {
        $e_Clean =  D('Clean');
        if (IS_POST) {
            $e_Clean =  D('Clean');

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
                $img_path  = './Public/upload/clean/'.$info['c_img']['savepath'].$info['c_img']['savename'];
                $img_path1 = './Public/upload/clean/'.$info['cc_img1']['savepath'].$info['cc_img1']['savename'];
                $img_path2 = './Public/upload/clean/'.$info['cc_img2']['savepath'].$info['cc_img2']['savename'];
                $img_path3 = './Public/upload/clean/'.$info['cc_img3']['savepath'].$info['cc_img3']['savename'];
                $img_path4 = './Public/upload/clean/'.$info['cc_img4']['savepath'].$info['cc_img4']['savename'];
                $img_path5 = './Public/upload/clean/'.$info['cc_img5']['savepath'].$info['cc_img5']['savename'];
                $img_path6 = './Public/upload/clean/'.$info['cc_img6']['savepath'].$info['cc_img6']['savename'];
                $img_path7 = './Public/upload/clean/'.$info['cc_img7']['savepath'].$info['cc_img7']['savename'];
                $img_path8 = './Public/upload/clean/'.$info['cc_img8']['savepath'].$info['cc_img8']['savename'];
                $img_path9 = './Public/upload/clean/'.$info['cc_img9']['savepath'].$info['cc_img9']['savename'];
                $img_path10 = './Public/upload/clean/'.$info['cc_img10']['savepath'].$info['cc_img10']['savename'];
                // $Clean =  D('Clean');
                // $Clean->img_path = $img_path;
                // $up_img['img_path'] = $img_path;
                // $Clean->img_path1 = $img_path1;
                // $up_img['img_path1'] = $img_path1;
                // $Clean->img_path2 = $img_path2;
                // $up_img['img_path2'] = $img_path2;
                // $Clean->img_path3 = $img_path3;
                // $up_img['img_path3'] = $img_path3;
                // $Clean->img_path4 = $img_path4;
                // $up_img['img_path4'] = $img_path4;
                // $Clean->img_path5 = $img_path5;
                // $up_img['img_path5'] = $img_path5;
                // $Clean->img_path6 = $img_path6;
                // $up_img['img_path6'] = $img_path6;
                // $Clean->img_path7 = $img_path7;
                // $up_img['img_path7'] = $img_path7;
                // $Clean->img_path8 = $img_path8;
                // $up_img['img_path8'] = $img_path8;
                // $Clean->img_path9 = $img_path9;
                // $up_img['img_path9'] = $img_path9;
                // $Clean->img_path10= $img_path10;
                // $up_img['img_path10'] = $img_path10;
                // $Clean->add($up_img);
                $_POST['c_img']=$img_path;
                $_POST['c_img1']=$img_path1;
                $_POST['c_img2']=$img_path2;
                $_POST['c_img3']=$img_path3;
                $_POST['c_img4']=$img_path4;
                $_POST['c_img5']=$img_path5;
                $_POST['c_img6']=$img_path6;
                $_POST['c_img7']=$img_path7;
                $_POST['c_img8']=$img_path8;
                $_POST['c_img9']=$img_path9;
                $_POST['c_img10']=$img_path10;
            }


            $ee_id = I('id');
            $e_Clean->where('id='.$ee_id)->save($_POST);
        }

        $this->assign('edit_Clean',$e_Clean->find(I('id')));
 
        $this->display();

    }


}