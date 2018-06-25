<?php

namespace 'Test';
use 'Think\Controller';

class testController extends Controller{
	function testEmail(){
		echo $r = sendEmail('cmtdee@163.com', 'OYES', '测试', '邮件内容');
	}
}