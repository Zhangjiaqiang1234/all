<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<?php include 'baseMeta.php';?>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<?php $index = true; include 'header.php';?>

	<!-- 半透明logo背景 -->
	<div class="bg-logo"></div>
	<div class="jump-pos"></div>
	<!-- pc端banenr开始 -->
	<div class="pc-banner">
		<!-- <div class="pc-banner-bg"></div> -->
		<div class="pc-banner-con">
			<!-- 山峰 -->
			<img id="mountain1" class="pc-mountain1" src="img/mountain1.png">
			<img id="mountain2" class="pc-banner-bg" src="img/mountain2.png">
			<img id="mountain3" class="pc-mountain3" src="img/mountain3.png">
			<img id="banner-logo" class="logo" src="img/banner-logo.svg"></img>
			<div class="textcontainer">
				<span class="logo particletext bubbles"></span>
			</div>
			<p id="banner-text" class="text"><?=$lan['slogan']?></p>
			<img id="big-ball" class="big-ball" src="img/ball.png"></img>
			<img id="sm-ball" class="sm-ball" src="img/ball.png"></img>
		</div>
	</div>	
	<!-- pc端banenr结束 -->

	<!-- 移动端banner开始 -->
	<div class="phone-banner">
		<div class="phone-banner-con">
			<div class="logo-box textcontainer">
				<span class="logo particletext bubbles"></span>
			</div>
			<p class="text"><?=$lan['slogan']?></p>
		</div>
	</div>
	<!-- 移动端banner结束 -->


	<!-- 内容区开始 -->
	<div class="main">
		
		<!-- 关于我们开始 -->
		<div class="about base-wrap jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>1.png"></img>
			<p class="text"><?=$lan['about_us']?></p>
			<!-- 立方体 -->
			<div class="cube-box scroll">
			  <ul class="cube">
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  </ul>
			  <ul class="cube">
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  </ul>
			  <ul class="cube">
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  </ul>
			  <ul class="cube">
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  	<li></li>
			  </ul>
			  <ul class="point">
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			    <li></li>
			  </ul> 
			</div>
		</div>
		<!-- 关于我们结束 -->

		<!-- 业务板块开始 -->
		<div class="plate base-wrap jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>2.png"></img>
			<ul class="title-list">
				<li><?=$lan['plate_title1']?></li>
				<li><?=$lan['plate_title2']?></li>
				<li><?=$lan['plate_title3']?></li> 
			</ul>	
			<ul class="plate-list">
				<li class="icon-box-wrap clearfix">
					<div class="logo-box">
						<div class="icon-box scroll">
							<!-- 实线圆圈 -->
							<div class="solid-line">
								<div class="circle"></div>
								<div class="circle"></div>
							</div>
							<!-- 虚线圈圈 -->
							<div class="line-box">
								<img class="icon_base" src="img/icon_flag.png">
								<img class="icon_light" src="img/icon_flag_blue.png">
							</div>
						</div>	
					</div>
					<div class="plate-con">
						<h2 class="scroll"><?=$lan['plate_list1_h2']?></h2>
						<p class="text scroll"><?=$lan['plate_list1_p']?></p>
					</div>
				</li>
				<li class="icon-box-wrap clearfix">
					<div class="logo-box">
						<div class="logo-box">
						<!-- icon -->
						<div class="icon-box scroll">
							<div class="solid-line">
								<div class="circle"></div>
								<div class="circle"></div>
							</div>
							<div class="line-box">
								<img class="icon_base" src="img/icon_invest.png">
								<img class="icon_light" src="img/icon_invest_blue.png">
							</div>
						</div>	
					</div>
					</div>
					<div class="plate-con">
						<h2 class="scroll"><?=$lan['plate_list2_h2']?></h2>
						<p class="text scroll"><?=$lan['plate_list2_p']?></p>
					</div>
				</li>
				<li class="icon-box-wrap clearfix">
					<div class="logo-box">
						<!-- icon -->
						<div class="icon-box scroll">
							<div class="solid-line">
								<div class="circle"></div>
								<div class="circle"></div>
							</div>
							<div class="line-box">
								<img class="icon_base" src="img/icon_consult.png">
								<img class="icon_light" src="img/icon_consult_blue.png">
							</div>
						</div>	
					</div>
					<div class="plate-con">
						<h2 class="scroll"><?=$lan['plate_list3_h2']?></h2>
						<p class="text scroll"><?=$lan['plate_list3_p']?></p>
					</div>
				</li>
			</ul>	
		</div>
		<!-- 业务板块结束 -->


		<!-- 我们的优势开始 -->
		<div class="advantage base-wrap jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>3.png"></img>
			<!-- 优势板块 -->
			<div class="ad-con">
				<div class="ad-left">
					<!-- 立方体 -->
					<div class="container clearfix">
						<div class="el-row clearfix border-bottom">
							<li class="icon-box-wrap clearfix">
								<div class="ad-cube scroll">
									<div class="sides">
										<div class="top"></div>
										<div class="right"></div>
										<div class="bottom"></div>
										<div class="left"></div>
										<div class="front"></div>
										<div class="back"></div>
									</div>
								</div>
							</li>
							<li class="icon-box-wrap border-left clearfix">
								<!-- icon -->
								<div class="icon-box scroll ad-right-logo">
									<div class="solid-line">
										<div class="circle"></div>
										<div class="circle"></div>
									</div>
									<div class="line-box">
										<img class="icon_base" src="img/icon_team.png">
										<img class="icon_light" src="img/icon_team_blue.png">
									</div>
								</div>	
								<div class="ad-content">
									<h2 class="scroll"><?=$lan['advantage_list1_h2']?></h2>
									<p class="text scroll"><?=$lan['advantage_list1_p']?></p>
								</div>
							</li>
						</div>
						<div class="el-row clearfix">
							<li class="icon-box-wrap border-right clearfix">
								<!-- icon -->
								<div class="icon-box scroll ad-right-logo">
									<div class="solid-line">
										<div class="circle"></div>
										<div class="circle"></div>
									</div>
									<div class="line-box">
										<img class="icon_base" src="img/icon_team.png">
										<img class="icon_light" src="img/icon_team_blue.png">
									</div>
								</div>	
								<div class="ad-content">
									<h2 class="scroll"><?=$lan['advantage_list2_h2']?></h2>
									<p class="text scroll"><?=$lan['advantage_list2_p']?></p>
								</div>
							</li>
							<li class="icon-box-wrap border-left clearfix">
								<!-- icon -->
								<div class="icon-box scroll ad-right-logo">
									<div class="solid-line">
										<div class="circle"></div>
										<div class="circle"></div>
									</div>
									<div class="line-box">
										<img class="icon_base" src="img/icon_team.png">
										<img class="icon_light" src="img/icon_team_blue.png">
									</div>
								</div>	
								<div class="ad-content">
									<h2 class="scroll"><?=$lan['advantage_list3_h2']?></h2>
									<p class="text scroll"><?=$lan['advantage_list3_p']?></p>
								</div>
							</li>
						</div>
					</div>
				</div>
				<ul class="ad-right">
					<li class="phone-logo one">
						<!-- 立方体 -->
						<div class="container">
							<div class="ad-cube scroll">
								<div class="sides">
									<div class="top"></div>
									<div class="right"></div>
									<div class="bottom"></div>
									<div class="left"></div>
									<div class="front"></div>
									<div class="back"></div>
								</div>
							</div>
						</div>
					</li>
					<li class="two icon-box-wrap clearfix">
						<!-- 线 -->
						<div class="line"></div>
						<!-- icon -->
						<div class="icon-box scroll ad-right-logo">
							<div class="solid-line">
								<div class="circle"></div>
								<div class="circle"></div>
							</div>
							<div class="line-box">
								<img class="icon_base" src="img/icon_team.png">
								<img class="icon_light" src="img/icon_team_blue.png">
							</div>
						</div>	
						<div class="ad-content">
							<h2 class="scroll"><?=$lan['advantage_list1_h2']?></h2>
							<p class="text scroll"><?=$lan['advantage_list1_p']?></p>
						</div>
					</li>
					<li class="three icon-box-wrap clearfix">
						<!-- 线 -->
						<div class="line"></div>
						<!-- icon -->
						<div class="icon-box scroll ad-right-logo">
							<div class="solid-line">
								<div class="circle"></div>
								<div class="circle"></div>
							</div>
							<div class="line-box">
								<img class="icon_base" src="img/icon_resource.png">
								<img class="icon_light" src="img/icon_resource_blue.png">
							</div>
						</div>	
						<div class="ad-content">
							<h2 class="scroll"><?=$lan['advantage_list2_h2']?></h2>
							<p class="text scroll"><?=$lan['advantage_list2_p']?></p>
						</div>	
					</li>
					<li class="four icon-box-wrap clearfix">
						<!-- icon -->
						<div class="icon-box scroll ad-right-logo">
							<div class="solid-line">
								<div class="circle"></div>
								<div class="circle"></div>
							</div>
							<div class="line-box">
								<img class="icon_base" src="img/icon_exp.png">
								<img class="icon_light" src="img/icon_exp_blue.png">
							</div>
						</div>
						<div class="ad-content">
							<h2 class="scroll"><?=$lan['advantage_list3_h2']?></h2>
							<p class="text scroll"><?=$lan['advantage_list3_p']?></p>
						</div>	
					</li>
				</ul>
			</div>
			<!-- 小标题 -->
			<h2 class="advan-title"><?=$lan['advan-title']?><i></i></h2>
			<!-- 主导孵化 -->
			<h2 class="hatch-title"><?=$lan['dominant_hatchery']?></h2>
			<div class="hatch scroll">
				<div class="hatch-side hatch-left">
					<ul class="hatch-list">
						<li><img src="img/leading-hatch/1.png"></li>
						<li><img src="img/leading-hatch/2.png"></li>
						<li><img src="img/leading-hatch/3.png"></li>
					</ul>
					<!-- 虚线 -->
					<div class="dashed-line"></div>
					<div class="dashed-line-horizontal"></div>
				</div>
				<div id="animationWindow" class="hatch-mid">
					<div class="hatch-mask"></div>
					<!-- <img src="img/earth.png"> -->
				</div>
				<div class="hatch-side hatch-right">
					<ul class="hatch-list">
						<li><img src="img/leading-hatch/4.png"></li>
						<li><img src="img/leading-hatch/5.png"></li>
						<li><img src="img/leading-hatch/6.png"></li>
					</ul>
					<div class="dashed-line"></div>
					<div class="dashed-line-horizontal"></div>
				</div>
			</div>
			<!-- 移动端下的list -->
			<ul class="phone-hatch-list">
				<div class="el-row scroll bottom2top">
					<li><img src="img/leading-hatch/1.png"></li>
					<li><img src="img/leading-hatch/4.png"></li>
					<li><img src="img/leading-hatch/2.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/leading-hatch/3.png"></li>
					<li><img src="img/leading-hatch/5.png"></li>
					<li><img src="img/leading-hatch/6.png"></li>
				</div>
			</ul>
			<!-- 参与孵化 -->
			<h2 class="join-hatch-title hatch-title"><?=$lan['join_hatch']?></h2>
			<ul class="join-hatch-list">
				<div class="el-row scroll bottom2top">
					<li><img src="img/partake-hatch/1_03.png"></li>
					<li><img src="img/partake-hatch/2_03.png"></li>
					<li><img src="img/partake-hatch/3_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/partake-hatch/4_03.png"></li>
					<li><img src="img/partake-hatch/5_03.png"></li>
					<li><img src="img/partake-hatch/6_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/partake-hatch/7_03.png"></li>
					<li><img src="img/partake-hatch/8_03.png"></li>
					<li><img src="img/partake-hatch/9_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/partake-hatch/10_03.png"></li>
					<li><img src="img/partake-hatch/11_03.png"></li>
					<li><img src="img/partake-hatch/12_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/partake-hatch/13_03.png"></li>
					<li><img src="img/partake-hatch/14_03.png"></li>
					<li><img src="img/partake-hatch/15_03.png"></li>
				</div>
			</ul>	
		</div>
		<!-- 我们的优势结束 -->


		<!-- 战略合作伙伴开始 -->
		<div class="cooper base-wrap jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>4.png"></img>
			<ul class="join-hatch-list phone">
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/1_03.png"></li>
					<li><img src="img/cooper/2_03.png"></li>
					<li><img src="img/cooper/3_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/4_03.png"></li>
					<li><img src="img/cooper/5_03.png"></li>
					<li><img src="img/cooper/6_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/7_03.png"></li>
					<li><img src="img/cooper/8_03.png"></li>
					<li><img src="img/cooper/9_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/10_03.png"></li>
					<li><img src="img/cooper/11_03.png"></li>
					<li><img src="img/cooper/12_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/13_03.png"></li>
					<li><img src="img/cooper/14_03.png"></li>
					<li><img src="img/cooper/15_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/16_03.png"></li>
					<li><img src="img/cooper/17_03.png"></li>
					<li><img src="img/cooper/18_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/19_03.png"></li>
					<li><img src="img/cooper/20_03.png"></li>
					<li><img src="img/cooper/21_03.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/22_03.png"></li>
					<li><img src="img/cooper/23_03.png"></li>
					<li><img src="img/cooper/24_03.png"></li>
				</div>
			</ul>
		</div>
		<!-- 战略合作伙伴结束 -->


		<!-- 新闻资讯开始 -->
		<div class="news base-wrap">
			<a class="news-seemore" href="news.php"><?=$lan['see_more']?>>></a>
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>5.png"></img>
			<ul class="news-list pc">
				<!-- PC端新闻资讯 -->
			</ul>
			<!-- 移动端 -->
			<ul class="news-list phone">
				
			</ul>
		</div>
		<!-- 新闻资讯结束 -->

	</div>
	<!-- 内容区结束 -->

	<?php include 'footer.php';?>

<script src="js/bodymovin.min.js"></script>
<script src="js/index.js?v=2"></script>
</body>
</html>