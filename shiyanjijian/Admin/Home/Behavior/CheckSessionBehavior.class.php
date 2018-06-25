<?php
namespace Home\Behavior;
use Think\Behavior;

/**
 *
 */
class CheckSessionBehavior extends Behavior {

	public function run(&$params) {
		if ($_SESSION['username'] == '' || !isset($_SESSION)) {
			//var_dump($_SESSION);die();
			$url = U('Login/login', '', '');
			echo "<script type='text/javascript'>";
			echo "window.location.href='" . $url . "';";
			echo "</script>";
			/*if (!$_SESSION['username']) {
		header('Location:' . U('Login/login', '', ''));
		}*/
		}

	}
}
