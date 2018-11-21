<!DOCTYPE html>
<html>
<head>
	<title>新闻资讯</title>
	<?php include 'baseMeta.php';?>
	<link rel="stylesheet" type="text/css" href="css/news.css">
</head>
<body>

	<?php $nav[1] = true; include 'header.php';?>

	<!-- 背景图 -->
	<img class="bg-mask" src="img/list-bg.png">
	<div class="phone-bg-mask"></div>
	

	<!-- 页面标题开始 -->
	<div class="phone-page-title">
		<div class="phone-page-title-box">
			<h1>新闻资讯</h1>
			<h2>NEWS</h2>
		</div>
	</div>	
	<!-- 页面标题结束 -->


	<div class="page-show-main">
		<!-- 标题 -->
		<div class="show-page-title">
			<h1 class="show-news-title"></h1>
			<div class="page-title-mes">
				<i class="ball"><div class="line"></div></i>
				<span class="name"></span>
				<span>发布</span>
				<span class="date">2018-10-16&nbsp;&nbsp;17:10<div class="line"></div></span>
			</div>
		</div>
		<!-- 移动端标题 -->
		<div class="phone-show-page-title">
			<div class="time">
				<span class="date"><div class="line"><div class="point"></div></div><span class="text"></span><div class="line"><div class="point"></div></div></span>
			</div>
			<h2></h2>
		</div>
		<!-- 内容开始 -->
		<div class="news-show-content">
			
		</div>
	</div>





	<?php include 'footer.php';?>


<script src="js/newsShow.js"></script>
</body>
</html>