<?php
	// 双语设置语言配置文件
	// error_reporting(0);

	// 中文
	$cn = array(
		'bannerTitle' => ''
	);
	// 英文
	$en = array(
		'bannerTitle' => ''
	);

	// 根据传入参数设置配置语言包
	$lan = $_GET["lan"];
	if($lan !== 'en'){
		$lan = $cn;
	}else{
		$lan = $en;
	}

?>