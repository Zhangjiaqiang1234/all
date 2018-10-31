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
			<li class="active jump"><a href="javascript:;"><?=$lan['home_page']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['about']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['business_sector']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['advantage']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['partner']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['news']?></a></li>
			<li><a href="news.php"><?=$lan['news']?></a></li>
			<li><a href="jobList.php"><?=$lan['join_us']?></a></li>
			<li class="lan"><a href="javascript:;"><img src="img/<?=$language=='en'?'EN':'CN'?>.svg"><span><?=$language=='en'?'EN':'CN'?></span></a></li>
		</ul>
	<?php }else{?>
		<ul class="pc-nav-list">
			<li ><a href="index.php"><?=$lan['home_page']?></a></li>
			<li class="<?=$nav[1]?'active':''?>"><a href="news.php"><?=$lan['news']?></a></li>
			<li class="<?=$nav[2]?'active':''?>"><a href="jobList.php"><?=$lan['join_us']?></a></li>
			<li class="lan"><a href="javascript:;"><img src="img/<?=$language=='en'?'EN':'CN'?>.svg"><span><?=$language=='en'?'EN':'CN'?></span></a></li>
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
			<li class="active jump"><a href="javascript:;"><?=$lan['home_page']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['about']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['business_sector']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['advantage']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['partner']?></a></li>
			<li class="jump"><a href="javascript:;"><?=$lan['news']?></a></li>
			<li><a href="news.php"><?=$lan['news']?></a></li>
			<li><a href="jobList.php"><?=$lan['join_us']?></a></li>
		</ul>
	<?php }else{?>
		<ul class="phone-nav-list">
			<li ><a href="index.php"><?=$lan['home_page']?></a></li>
			<li class="<?=$nav[1]?'active':''?>"><a href="news.php"><?=$lan['news']?></a></li>
			<li class="<?=$nav[2]?'active':''?>"><a href="jobList.php"><?=$lan['join_us']?></a></li>
		</ul>
	<?php }?>
	<div class="lan phone-lan"><a href="javascript:;"><img src="img/<?=$language=='en'?'EN':'CN'?>.svg"><span><?=$language=='en'?'EN':'CN'?></span></a></div>
</nav>
<!-- 导航结束 -->