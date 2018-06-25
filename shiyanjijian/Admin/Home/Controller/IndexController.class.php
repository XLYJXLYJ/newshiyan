<?php

namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	private $username = '石岩街道纪工委';
	private $password = '202cb962ac59075b964b07152d234b70';
	private $email = 'shiyanjiandu@163.com';
	private $user_id = 0;

	/**
	 * 展示用户信息模块
	 * @return
	 */
	public function index() {
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');
		$user = array();
		$admin = M('admin');
		if ($admin->count() <= 0) {
			$user['email'] = $this->email;
			$user['username'] = $this->username;
			$user['update_time'] = date('Y-m-d H:i:s', time());
			$user['id'] = $id;
		} else {
			//$admin = M('admin');
			$data = $admin->getField('id,username,email,update_time');
			//$user = $data[1];
			foreach ($data as $value) {
				$user = $value;
			}
			$user['update_time'] = date('Y-m-d H:i:s', $user['update_time']);
		}
		$this->assign('user', $user);
		$this->display();

	}

	//----------------------------------用户信息模块-----------------------------------------------

	/**
	 * 用户账户信息的重置处理模块
	 * @return
	 */
	public function resetAccount() {
		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');
		$admin = M('admin');
		$data['email'] = $this->email;
		$data['password'] = $this->password;
		$data['username'] = $this->username;
		$data['update_time'] = time();
		//$id = $_SESSION['id'];
		if ($admin->count() > 0) {
			$id = $admin->getField('id');
			//echo $id;die;
			$flag = $admin->where('id = ' . $id)->save($data);
			if ($flag < 1) {
				$this->error('重置账户信息错误');
			}
		} else {
			$data['create_time'] = $data['update_time'];
			$admin->add($data);
		}
		$this->success('重置账户信息成功');
	}
	
	/**
	 * 修改用于信息模块
	 * @returns
	 */
	public function modifyAccount() {

		tag('login_tag'); // 添加my_tag 标签侦听
		// 下面的写法作用一致
		\Think\Hook::listen('login_tag');
		
		$data['username'] = I('post.username');
		$data['email'] = I('post.email');
		$data['update_time'] = time();
		$id = I('post.id');
		$admin = M('admin');
		if ($id != $this->user_id) {
			$id = $admin->where('id = ' . $id)->save($data);
		} else {
			$data['password'] = $this->password;
			$data['create_time'] = $data['update_time'];
			$id = $admin->add($data);
		}
		//$_SESSION['id'] = $id;
		$this->success('修改信息成功！', 'index');
	}

	/**
	 * 判断和保存用户提交的密码
	 * @return
	 */
	public function resetPW1() {
		$password = I('post.password');
		$confirm_password = I('post.confirm_password');
		$id = I('post.id');
		if (!empty($password)) {
			if ($password == $confirm_password) {
				$data['password'] = md5($password);
				$data['update_time'] = time();
				if(M('admin')->where('id = '.$id)->save($data))$this->success('修改密码成功');
			} else {
				$this->error('密码不一致！');
			}
		} else {
			$this->error('密码不能为空');
		}

	}

}