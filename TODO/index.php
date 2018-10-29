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
			<img id="banner-logo" class="logo" src="img/banner-logo.png"></img>
			<div class="textcontainer">
				<span class="logo particletext bubbles"></span>
			</div>
			<p id="banner-text" class="text">TODO速度，专注区块链服务</p>
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
			<p class="text">TODO速度，专注区块链服务</p>
		</div>
	</div>
	<!-- 移动端banner结束 -->


	<!-- 内容区开始 -->
	<div class="main">
		
		<!-- 关于我们开始 -->
		<div class="about base-wrap jump-pos">
			<img class="base-title" src="img/sm-title/1.png"></img>
			<p class="text">    ToDo Incubator成立于澳州，是一家专业为区块链企业提供全方位深度商业服务的公司，核心业务包括：项目孵化、企业咨询、区块链一级、二级市场投资、量化投资等服务。ToDo Inculbator放眼全球，拥有优秀的国际化团队，以技术、人才、资本、国内外媒体资源为优势，为区块链初创企业提供快而有力的加速服务。</p>
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
			<img class="base-title" src="img/sm-title/2.png"></img>
			<ul class="title-list">
				<li>重技术</li>
				<li>强团队</li>
				<li>深运营</li> 
			</ul>	
			<ul class="plate-list">
				<li class="icon-box-wrap">
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
						<h2 class="scroll">项目孵化：重技术，强团队，深运营 </h2>
						<p class="text scroll">为区块链初创项目提供行业全方位服务，包括对项目团队进行业务模式的设计辅导、战略梳理规划、区块链技术支持、资 本和交易所对接、合规化、媒体宣传、市场推广、法律咨询等服务。成功孵化过EtherZero、ABO、福布斯、obpro、vt、bdd等近十个项目。</p>
					</div>
				</li>
				<li class="icon-box-wrap">
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
						<h2 class="scroll">资本投资：专注投资早期区块链项目和企业</h2>
						<p class="text scroll">TODO旗下的ToDo Fund是一家专注于数字货币行业投资的新型投资机构，我们拥有多年数字货币投资经验、领先行业的 投资模型、投资工具。ToDo Fund将秉承投融资、风险控制、资产管理，“三位一体”的运作模式，投资主流概念和潜力型项目，如底层工链、分布式能源、溯源、物联网等。</p>
					</div>
				</li>
				<li class="icon-box-wrap">
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
						<h2 class="scroll">咨询服务：为初创企业赋能</h2>
						<p class="text scroll">为区块链初创企业、机构以及计划转型区块链的企业提供咨询、培训、技术支持等服务，ToDo Incubator以丰富的行业 经验和雄厚的资源，助力区块链企业和个人爱好者更好更快融入区块链行业。</p>
					</div>
				</li>
			</ul>	
		</div>
		<!-- 业务板块结束 -->


		<!-- 我们的优势开始 -->
		<div class="advantage base-wrap jump-pos">
			<img class="base-title" src="img/sm-title/3.png"></img>
			<!-- 优势板块 -->
			<div class="ad-con">
				<div class="ad-left">
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
					<li class="two icon-box-wrap">
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
							<h2 class="scroll">团队</h2>
							<p class="text scroll">名校海归成员，<br/>多年区块链从业经验，激情饱满</p>
						</div>	
					</li>
					<li class="three icon-box-wrap">
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
							<h2 class="scroll">资源</h2>
							<p class="text scroll">主流交易所，快速上币<br/>知名VC，战略投资<br/>行业IP，强势加盟<br/>媒体资源，覆盖百万用户</p>
						</div>	
					</li>
					<li class="four icon-box-wrap">
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
							<h2 class="scroll">经验</h2>
							<p class="text scroll">数十个成功孵化推广案例，<br/>累计百倍投资收益率</p>
						</div>	
					</li>
				</ul>
			</div>
			<!-- 小标题 -->
			<h2 class="advan-title">服务过的项目<i></i></h2>
			<!-- 主导孵化 -->
			<h2 class="hatch-title">主导孵化</h2>
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
			<h2 class="join-hatch-title hatch-title">参与孵化与市场推广项目</h2>
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
			<img class="base-title" src="img/sm-title/4.png"></img>
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
		<div class="news base-wrap jump-pos">
			<a class="news-seemore" href="news.php">查看更多>></a>
			<img class="base-title" src="img/sm-title/5.png"></img>
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


<script src="js/jquery.min.js"></script>
<script src="js/bodymovin.min.js"></script>
<script src="js/base.js"></script>
<script src="js/index.js"></script>
</body>
</html>