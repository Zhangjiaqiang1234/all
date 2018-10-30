<?php
	// 双语设置语言配置文件
	// error_reporting(0);

	// 中文
	$cn = array(
		'home_page' => '首页', // 导航
		'about' => '关于我们',
		'business_sector' => '业务板块',
		'advantage' => '我们的优势',
		'partner' => '战略合作伙伴',
		'news' => '新闻资讯',
		'news' => '新闻资讯',
		'join_us' => '加入我们',
		'bannerTitle' => ''
	);
	// 英文
	$en = array(
		'home_page' => 'Home',
		'about' => 'About',
		'business_sector' => 
		'Business Sector',
		'advantage' => 'Advantage',
		'partner' => 'Partner',
		'news' => 'News',
		'news' => 'News',
		'join_us' => 'Join Us',
		'bannerTitle' => ''
	);

	// 根据传入参数设置配置语言包
	$lan = $_GET["lan"];
	if($lan !== 'en'){
		$language = 'cn';
		$lan = $cn;
	}else{
		$language = 'en';
		$lan = $en;
	}

?>