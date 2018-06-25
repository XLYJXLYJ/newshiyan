<?php
/**
 * 系统邮件发送函数
 * @param string $to    接收邮件者邮箱
 * @param string $name  接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body    邮件内容
 * @param string $attachment 附件列表
 * @return boolean
 */
function sendEmail($to, $name, $subject = '', $body = '', $attachment = null) {
	$config = C('EMAIL');
	require_once './Application/Admin/Lib/PHPMailer/class.phpmailer.php';
	//require_once './Lib/PHPmailer/class.phpmailer.php';
	// import("Application.PHPMailer.phpmailer"); //从PHPMailer目录导class.phpmailer.php类文件
	$mail = new PHPMailer(); //PHPMailer对象

	$mail->CharSet = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码

	$mail->IsSMTP(); // 设定使用SMTP服务

	$mail->SMTPDebug = 0; // 关闭SMTP调试功能,1 = errors and messages,2 = messages only

	$mail->SMTPAuth = true; // 启用 SMTP 验证功能

	$mail->SMTPSecure = 'ssl'; // 使用安全协议

	$mail->Host = $config['SMTP_HOST']; // SMTP 服务器

	$mail->Port = $config['SMTP_PORT']; // SMTP服务器的端口号

	$mail->Username = $config['SMTP_USER']; // SMTP服务器用户名

	$mail->Password = $config['SMTP_PASS']; // SMTP服务器密码

	$mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);

	$replyEmail = $config['REPLY_EMAIL'] ? $config['REPLY_EMAIL'] : $config['FROM_EMAIL'];

	$replyName = $config['REPLY_NAME'] ? $config['REPLY_NAME'] : $config['FROM_NAME'];

	$mail->AddReplyTo($replyEmail, $replyName);

	$mail->Subject = $subject;

	$mail->AltBody = "为了查看该邮件，请切换到支持 HTML 的邮件客户端";

	$mail->MsgHTML($body);

	$mail->AddAddress($to, $name);

	if (is_array($attachment)) {
		// 添加附件
		foreach ($attachment as $file) {
			is_file($file) && $mail->AddAttachment($file);
		}
	}

	return $mail->Send() ? true : $mail->ErrorInfo;
}
/**
 * 获得系统内存的使用情况
 * @param int $os_type <系统类型，如果是1表示window，如果是2表示linux>
 * @return array 一个保存系统总的内存和可用内存的数组
 */
function getMemeory($os_type = 1) {
	$mem = array();
	if ($os_type == 1) {
		if (PHP_VERSION >= 5) {
			$objLocator = new COM("WbemScripting.SWbemLocator");
			$wmi = $objLocator->ConnectServer();
			$prop = $wmi->get("Win32_PnPEntity");
			$sysinfo = GetWMI($wmi, "Win32_OperatingSystem", array('LastBootUpTime', 'TotalVisibleMemorySize', 'FreePhysicalMemory', 'Caption', 'CSDVersion', 'SerialNumber', 'InstallDate'));
			$mem['Total'] = size_format($sysinfo[0]['TotalVisibleMemorySize'] * 1024);
			$mem['Free'] = size_format($sysinfo[0]['FreePhysicalMemory'] * 1024);
			$usage = (1 - $sysinfo[0]['FreePhysicalMemory'] / $sysinfo[0]['TotalVisibleMemorySize']) * 100;
			//var_dump($usage);
			$mem['usage'] = $usage;
			//var_dump($mem);
			return $mem;
		}
		return false;
	} else if ($os_type == 2) {
		if (false === ($str = @file("/proc/meminfo"))) {
			return false;
		}
		$str = implode("", $str);
		preg_match_all("/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?Cached\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $matches);
		$mem['Total'] = size_format($matches[1][0] * 1024);
		$mem['Free'] = size_format($matches[2][0] * 1024);
		$usage = (1 - $matches[2][0] / $matches[1][0]) * 100;
		$mem['usage'] = $usage;
		return $mem;
	}
}
/**
 * 用于对内存大小格式匹配
 * @param  int  $bytes    内存的大小，单位为字节
 * @param  integer $decimals [description]
 * @return [type]            [description]
 */
function size_format($bytes, $decimals = 2) {
	$quant = array(
		'TB' => 1099511627776, // pow( 1024, 4)
		'GB' => 1073741824, // pow( 1024, 3)
		'MB' => 1048576, // pow( 1024, 2)
		'KB' => 1024, // pow( 1024, 1)
		'B ' => 1, // pow( 1024, 0)
	);
	foreach ($quant as $unit => $mag) {
		if (doubleval($bytes) >= $mag) {
			return number_format($bytes / $mag, $decimals) . ' ' . $unit;
		}
	}

	return false;
}

function GetWMI($wmi, $strClass, $strValue = array()) {
	$arrData = array();
	$objWEBM = $wmi->Get($strClass);
	$arrProp = $objWEBM->Properties_;
	$arrWEBMCol = $objWEBM->Instances_();
	foreach ($arrWEBMCol as $objItem) {
		@reset($arrProp);
		$arrInstance = array();
		foreach ($arrProp as $propItem) {
			eval("\$value = \$objItem->" . $propItem->Name . ";");
			if (empty($strValue)) {
				$arrInstance[$propItem->Name] = trim($value);
			} else {
				if (in_array($propItem->Name, $strValue)) {
					$arrInstance[$propItem->Name] = trim($value);
				}
			}
		}
		$arrData[] = $arrInstance;
	}
	return $arrData;
}
