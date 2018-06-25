<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {

	/**
	 * @author   cmtming@gmail.com
	 * 2015/5/30
	 */

	private $username = 'admin';
	private $password = '202cb962ac59075b964b07152d234b70';
	private $email = 'cmtdee@163.com';
	private $user_id = 0;

	public function index() {
		$this->login();
	}

	public function login() {
		$pswd=cookie('syjj_admin');
		$this->assign('pswd',$pswd);
		// dump($pswd);
		$this->display();
	}

	public function adminLogin() {
		//获取admin模型对象
		$admin = M('admin');
		//调用where，find函数来查询一条记录
		$post_username = I('post.username');
		$post_password = md5(I('post.password'));
		if ($admin->count() > 0) {
			$data = $admin->where('username="' . $post_username . '"')->find();
			if ($data) {
				if ($data['password'] == $post_password) {
					if(I('post.remeber_pswd'))cookie('syjj_admin',I('post.password'));
					else cookie('syjj_admin',null);
					//会话，用于保存用户登录信息
					session('[start]');
					//ses000sion_start();
					//session(array('name' => 'session_id', 'expire' => 7200));
					session('username', $post_username);
					//$_SESSION['username'] = $post_username;
					//session('id', $data['id']);
					//$_SESSION['username'] = $post_username;
					$this->success('登录成功!', U('Report/reportList', array('scale'=>4)));
				} else {
					$this->error('密码错误！');
				}
			} else {
				$this->error('管理员不存在！');
			}
		} else if ($post_username == $this->username) {
			if ($post_password == $this->password) {
				session_start();
				//session(array('name' => 'session_id', 'expire' => 7200));
				$_SESSION['username'] = $post_username;
				//session('id', $this->user_id);
				$this->success('登录成功!', U('Index/index', '', ''));
			} else {
				$this->error('密码错误！');
			}
		} else {
			$this->error('管理员不存在！');
		}

	}

	public function logout() {
		session_destroy();
		$this->success('成功退出！', 'login');
	}

	//--------------------------------修改密码模块-----------------------------------------------------

	/**
	 * 判断输入的邮箱是否正确
	 */
	public function findPW() {
		//echo $r = sendEmail('cmtdee@163.com', 'OYES', '测试', '邮件内容'); //测试用例
		$admin = M('admin');
		$post_email = I('post.email');
		if (($admin->count() > 0)) {
			$data = $admin->where('email="' . $post_email . '"')->find();
			if ($data) {
				if (!empty($post_email)) {
					$this->sendfindPWEmailContent($post_email, $data['id']);
				}
			} else {
				$this->error("输入邮箱有误，请输入正确的邮箱!");
			}
		} else if ($postemail == $this->email) {
			$this->sendfindPWEmailContent($post_email, $user_id);
		} else {
			$this->error("输入邮箱有误，请输入正确的邮箱!");
		}
	}

	/**
	 * 发送找回密码的邮件
	 * @param  String $pw_email 用于找回密码的邮箱
	 * @param  int $id       用户的id
	 * @return
	 */
	private function sendfindPWEmailContent($pw_email, $id) {
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$randKey = "";
		for ($i = 0; $i < 8; $i++) {
			$randKey .= $chars[mt_rand(0, strlen($chars))];
		}
		$currentTime = time();
		$token = md5($randKey . $currentTime);
		session_start();
		session("token", $token);
		$url = U("Login/reset_pw?token=" . $token . "&timestamp=" . $currentTime . "&id=" . $id);
		$host = "http://" . $_SERVER['SERVER_NAME'];
		//$host = "http://localhost";
		$content = "尊敬的" . "先生/女士：<br />    取回密码邮件<br />请点击下面的链接，按流程进行密码重设。
		<a href=" . $host . $url . ">找回密码</a><br>(如果上面不是链接形式，请将地址手工复制下面的链接，粘贴到浏览器地址栏再访问)
		上面的页面打开后，输入新的密码后提交，之后您即可使用新的密码登录了。<br><br>" . $host . $url . "<br>
		此邮件为系统邮件，请勿直接回复";
		// echo $pw_email;die;
		$flag = sendEmail($pw_email, '', 'OYES 取回密码邮件', $content);
		if ($flag == 1) {
			$this->success('成功发送！', 'login');
		} else {
			$this->error($flag);
		}
	}
	/**
	 * 重置密码的界面展示
	 * @return
	 */
	public function reset_pw() {
		$token = I('get.token');
		$timestamp = I('get.timestamp');
		$id = I('get.id');
		$currentTime = time();
		//echo $_SESSION['token'] . "<br>" . $token;die;
		if ($token == $_SESSION['token']) {
			if ((($currentTime - $timestamp) / 60) < 30) {
				$this->assign('id', $id);
				$this->display('reset_pw');
			} else {
				$this->error('该链接已经失效1！', 'login');
			}
		} else {
			$this->error('该链接已经失效！', 'login');
		}

	}
	/**
	 * 判断和保存用户提交的密码
	 * @return
	 */
	public function resetPW() {
		$password = I('post.password');
		$confirm_password = I('post.confirm_password');
		$id = I('post.id');
		if (!empty($password)) {
			if ($password == $confirm_password) {
				$admin = M('admin');
				$data['password'] = md5($password);
				$data['update_time'] = time();
				if ($id != $this->user_id) {
					$flag = $admin->where('id = ' . $id)->save($data);
					if ($flag == 1) {
						$this->success('修改密码成功！', 'login');
					} else {
						$this->error('修改密码失败！');
					}
				} else {
//如果用户修改的是默认的密码，那么就往数据库里面添加一条记录，用于保存用户的修改
					$data['username'] = $this->username;
					$data['email'] = $this->email;
					$data['create_time'] = $data['update_time'] = time();
					$flag = $admin->add($data);
					$this->success('修改密码成功！', 'login');
				}
			} else {
				$this->error('密码不一致！');
			}
		} else {
			$this->error('密码不能为空');
		}

	}

	public function test() {
		$beginToday = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
		$endToday = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
		$currentTime = time();
		echo $beginToday.'<br>';
		echo $endToday.'<br>';
		echo $currentTime.'<br>';

		var_dump($currentTime <= $endToday && $currentTime >= $beginToday);die;

	}

}