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
	<div class="pc-page-title">
		<h1>新闻资讯</h1>
		<h2>/<b></b>NEWS<b></b>/</h2>
		<p>行业最新动态，最新新闻资讯分享</p>
	</div>
	<div class="phone-page-title">
		<div class="phone-page-title-box">
			<h1>新闻资讯</h1>
			<h2>NEWS</h2>
		</div>
	</div>	
	<!-- 页面标题结束 -->


	<!-- 新闻资讯开始 -->
	<div class="news-main">
		<ul class="news-list">
			<!-- 新闻资讯列表 -->
		</ul>
	</div>
	<!-- 新闻资讯结束 -->






	<?php include 'footer.php';?>


<script src="js/jquery.min.js"></script>
<script src="js/base.js"></script>
<script src="js/news.js"></script>
</body>
</html>