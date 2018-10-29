<!-- 导航开始 -->
<!-- pc导航 -->
<nav class="nav pc-nav">
	<a href="index.php">
		<div class="logo-box textcontainer">
			<span class="logo particletext bubbles"></span>
		</div>
	</a>
	<?php if($index){?>
		<ul class="pc-nav-list">
			<li class="active jump"><a href="###">首页</a></li>
			<li class="jump"><a href="###">关于我们</a></li>
			<li class="jump"><a href="###">业务板块</a></li>
			<li class="jump"><a href="###">我们的优势</a></li>
			<li class="jump"><a href="###">战略合作伙伴</a></li>
			<li class="jump"><a href="###">新闻资讯</a></li>
			<li><a href="news.php">新闻资讯</a></li>
			<li><a href="jobList.php">加入我们</a></li>
			<li class="lan"><a href="javascript:;"><img src="img/EN.png"><span>EN</span></a></li>
		</ul>
	<?php }else{?>
		<ul class="pc-nav-list">
			<li ><a href="index.php">首页</a></li>
			<li class="<?=$nav[1]?'active':''?>"><a href="news.php">新闻资讯</a></li>
			<li class="<?=$nav[2]?'active':''?>"><a href="jobList.php">加入我们</a></li>
		</ul>
	<?php }?>
</nav>
<div class="nav-mask"></div>
<!-- 移动端导航 -->
<nav class="nav phone-nav">
	<img class="logo" src="img/white-logo.png"></img>
	<img class="hanbao" src="img/hanbao.png"></img>
	<?php if($index){?>
		<ul class="phone-nav-list">
			<li class="active jump"><a href="###">首页</a></li>
			<li class="jump"><a href="###">关于我们</a></li>
			<li class="jump"><a href="###">业务板块</a></li>
			<li class="jump"><a href="###">我们的优势</a></li>
			<li class="jump"><a href="###">战略合作伙伴</a></li>
			<li class="jump"><a href="###">新闻资讯</a></li>
			<li><a href="news.php">新闻资讯</a></li>
			<li><a href="jobList.php">加入我们</a></li>
		</ul>
	<?php }else{?>
		<ul class="phone-nav-list">
			<li ><a href="index.php">首页</a></li>
			<li class="<?=$nav[1]?'active':''?>"><a href="news.php">新闻资讯</a></li>
			<li class="<?=$nav[2]?'active':''?>"><a href="jobList.php">加入我们</a></li>
		</ul>
	<?php }?>
</nav>
<!-- 导航结束 -->