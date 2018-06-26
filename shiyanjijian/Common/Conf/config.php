<?php
return array(
//数据库配置
	/*'DB_TYPE' => 'mysql',
	'DB_HOST' => 'sdm163501653.my3w.com',
	'DB_NAME' => 'sdm163501653_db',
	'DB_USER' => 'sdm163501653',
	'DB_PWD' => 'oyes2015',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'oy_',*/
	//本地配置
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'syjj_db',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	// 'DB_USER' => 'yxj',
	// 'DB_PWD' => 'Yxjorhs13',
	// 'DB_PWD' => '',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'syjj_',
	//邮件配置
	// 'EMAIL' => array(
	// 	'SMTP_HOST' => 'smtp.163.com', //SMTP服务器

	// 	'SMTP_PORT' => '465', //SMTP服务器端口

	// 	'SMTP_USER' => 'woai511shijie@163.com', //SMTP服务器用户名

	// 	'SMTP_PASS' => 'woaizhangqin', //SMTP服务器密码

	// 	'FROM_EMAIL' => 'woai511shijie@163.com', //发件人EMAIL

	// 	'FROM_NAME' => '石岩纪检', //发件人名称

	// 	'REPLY_EMAIL' => 'cmtdee@163.com', //回复EMAIL（留空则为发件人EMAIL）

	// 	'REPLY_NAME' => 'OYES', //回复名称（留空则为发件人名称）
	// ),
	'LOAD_EXT_FILE' => 'functions',//项目中的conf.php
	'TMPL_CACHE_ON' => false,//禁止模板编译缓存
	'HTML_CACHE_ON' => false,//禁止静态缓存

);
