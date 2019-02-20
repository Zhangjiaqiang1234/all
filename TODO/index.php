<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<?php include 'baseMeta.php';?>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/new_index.css">
</head>
<body>

	<?php $index = true; include 'header.php';?>

	<!-- 半透明logo背景 -->
	<div class="pc-jump-pos phone-jump-pos"></div>

	<!-- 新版PC端banner开始 -->
	<div class="new-pc-banner">
		<div class="new-pc-banner-con">
			<!-- 文字区域 -->
			<img class="logo" src="img/banner-logo.svg"></img>
			<div class="textcontainer">
				<span class="logo particletext bubbles"></span>
			</div>
			<p class="text"><?=$lan['slogan']?></p>
		</div>
	</div>
	<!-- 新版PC端banne结束 -->

	<!-- 新版移动端banner开始 -->
	<div class="new-phone-banner">
		<div class="logo-box textcontainer">
			<span class="logo particletext bubbles"></span>
		</div>
		<p class="text"><?=$lan['slogan']?></p>
	</div>
	<!-- 新版移动端banner结束 -->


	<!-- 内容区开始 -->
	<div class="main">
		
		<!-- 关于我们开始 -->
		<div class="about base-wrap pc-jump-pos phone-jump-pos">
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

		<!-- 媒体矩阵 -->
		<div class="content clear content-1 pc-bg-gray phone-bg-gray base-wrap pc-jump-pos phone-jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>2.png"></img>
			<h2 class="con-title">1.TODO媒体矩阵</h2>
			<p class="text">TODO MEDIA 旗下包含区块链生态媒体矩阵：TODO情报局，分秒区块链，区块链见闻，无心日志，VV评级，空投大师，币值瞭望，区块链Hunter等多家排名前100区块链垂直媒体，自媒体。TODO MEDIA为行业输出大量优质内容，资讯推动行业良性发展的同时，采用媒体+社区的运营模式汇聚200万+的流量为项目服务提供了强有力的市场流量支撑。同时我们服务还可以覆盖全球各个国家地区的区块链媒体</p>
			<!-- logo区域 -->
			<div class="content-1-logo">
				<ul class="left">
					<li><img src="img/con-left1.png"></li>
					<li><img src="img/con-left2.png"></li>
					<li><img src="img/con-left3.png"></li>
				</ul>
				<div class="mid">
					<div class="line"></div>
					<div class="line"></div>
					<img src="img/con-1-mid.png">
				</div>
				<ul class="right">
					<div class="ver-line"></div>
					<li>
						<div class="line"></div>
						<img src="img/con-righ1.png">
					</li>
					<li>
						<div class="line"></div>
						<img src="img/con-righ2.png">
					</li>
					<li>
						<div class="line"></div>
						<img src="img/con-righ3.png">
					</li>
					<li>
						<div class="line"></div>
						<img src="img/con-righ4.png">
					</li>
				</ul>
			</div>
		</div>

		<!-- 媒体矩阵2 -->
		<div class="content content-1-1 pc-bg-gray">
			<p class="text">其中包含 -- Reddit/btc，cointelegraph,ph，crytocoins-news.com(ccn(ccn)，coindesk，Bitcoin Magazine，金色财经，币世界，巴比特，核财经，火星财经，耳朵财经等行业优质媒体平台。coinmarketcap.com，cry，om，crytodelv-er.com，bit，om，bitcoin.info，myt，fo，mytoken.com 非小号 非小号等全球数字货币行情资讯平台。</p>
			<div class="con-brank">
				<div class="row">
					<div><img src="img/media/01_03.png"></div>
					<div><img src="img/media/02_03.png"></div>
					<div><img src="img/media/03_03.png"></div>
				</div>
				<div class="row">
					<div><img src="img/media/04_03.png"></div>
					<div><img src="img/media/05_03.png"></div>
					<div><img src="img/media/06_03.png"></div>
				</div>
				<div class="row">
					<div><img src="img/media/07_03.png"></div>
					<div><img src="img/media/08_03.png"></div>
					<div><img src="img/media/09_03.png"></div>
				</div>
				<div class="row">
					<div><img src="img/media/10_03.png"></div>
					<div><img src="img/media/11_03.png"></div>
					<div><img src="img/media/12_03.png"></div>
				</div>
				<div class="row">
					<div><img src="img/media/13_03.png"></div>
					<div><img src="img/media/14_03.png"></div>
					<div><img src="img/media/15_03.png"></div>
				</div>
			</div>
		</div>

		<!-- 虚线组件 -->
		<div class="dash-line"></div>

		<!-- TODO Fund -->
		<h2 class="con-title phone-bg-gray not-margin">2.TODO Fund</h2>
		<div class="content content-2 phone-bg-gray">
			<p class="text">投资的新型投资机构，我们拥有多年数字货币投资经验、领先行业的投资模型、投资工具。ToDo Fund将秉承投融资、风险控制、资产管理，“三位一体”的运作模式，投资主流概念和潜力型项目，项目范围涵盖底层公链、分布式能源、溯源、物联网，AI智能，医疗等内容。<br/>投资的优质案例有：ADA，NANO，AE，PPT，ELF，IOST，PATH，ETZ</p>
			<div class="con-brank">
				<div class="row">
					<div><img src="img/fund/1.png"></div>
					<div><img src="img/fund/2.png"></div>
					<div><img src="img/fund/3.png"></div>
					<div><img src="img/fund/4.png"></div>
				</div>
				<div class="row">
					<div><img src="img/fund/5.png"></div>
					<div><img src="img/fund/6.png"></div>
					<div><img src="img/fund/7.png"></div>
					<div><img src="img/fund/8.png"></div>
				</div>
			</div>
		</div>

		<!-- 虚线组件 -->
		<div class="dash-line reverse"></div>

		<!-- 项目市值管理 -->
		<h2 class="con-title not-margin">3.项目市值管理</h2>
		<div class="content content-2 content-3 ">
			<p class="text">TODO是一家区块链服务商，专门助力与解决区块链企业发展中运营难题。市值管理运用市场营销以及资本市场组合拳法，最大化项目的市值。同时我们拥有经验风骨的TOKEN市值管理以及流通性管理操盘手，我们可以根据具体项目需求，定制专业专属的市值管理方案。<br/>部分参与并且服务过的项目：ETZ  SKM  GSE  ETZ ONERPOOT</p>
			<div class="con-brank">
				<div class="row">
					<div><img src="img/manager/1.png"></div>
					<div><img src="img/manager/2.png"></div>
					<div><img src="img/manager/3.png"></div>
				</div>
				<div class="row">
					<div><img src="img/manager/4.png"></div>
					<div><img src="img/manager/5.png"></div>
					<div class="hidden" style="opacity: 0"></div>
				</div>
			</div>
		</div>

		<!-- 虚线组件 -->
		<div class="dash-line"></div>

		<!-- 项目孵化 -->
		<div class="content content-4 pc-bg-gray">
			<h2 class="con-title not-margin">4.项目孵化</h2>
			<p class="text">TODO拥有专业的区块链人才团队，为区块链初创项目提供行业全方位服务，包括对项目团队进行经济与业务模式的设计辅导、战略梳理规划、区块链技术支持、资本和交易所对接、全球合法合规化、媒体宣传、市场推广、法律咨询等服务。<br/><br/>>>成功参与服务的案例：ETZ  VECTORAIC  FPRBES  BDD交易所 CARLIFE  GELOS</p>
			<ul class="con4-brand">
				<li><img src="img/fuhua/1.png"></li>
				<li><img src="img/fuhua/2.png"></li>
				<li><img src="img/fuhua/3.png"></li>
				<li><img src="img/fuhua/4.png"></li>
				<li><img src="img/fuhua/5.png"></li>
				<li><img src="img/fuhua/6.png"></li>
			</ul>
		</div>

		<!-- PC端我们的优势 -->
		<div class="new-pc-advantage pc-bg-gray pc-jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>3.png"></img>
			<ul class="new-ad-con">
				<li class="icon-box-wrap">
					<!-- 图标 -->
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
					<h2><?=$lan['advantage_list1_h2']?></h2>
					<p style="<?=$language=='en'?'':'text-align: center;'?>" class="text scroll"><?=$lan['advantage_list1_p']?></p>
				</li>
				<li class="icon-box-wrap">
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
					<h2><?=$lan['advantage_list2_h2']?></h2>
					<p style="<?=$language=='en'?'':'text-align: center;'?>" class="text scroll"><?=$lan['advantage_list2_p']?></p>
				</li>
				<li class="icon-box-wrap">
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
					<h2><?=$lan['advantage_list3_h2']?></h2>
					<p style="<?=$language=='en'?'':'text-align: center;'?>" class="text scroll"><?=$lan['advantage_list3_p']?></p>
				</li>
			</ul>
		</div>

		<!-- 我们的优势开始 -->
		<div class="advantage base-wrap jump-pos phone-jump-pos">
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
									<p style="<?=$language=='en'?'':'text-align: center;'?>" class="text scroll"><?=$lan['advantage_list1_p']?></p>
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
									<p style="<?=$language=='en'?'':'text-align: center;'?>" class="text scroll"><?=$lan['advantage_list2_p']?></p>
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
									<p style="<?=$language=='en'?'':'text-align: center;'?>" class="text scroll"><?=$lan['advantage_list3_p']?></p>
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
		</div>
		<!-- 我们的优势结束 -->


		<!-- 战略合作伙伴开始 -->
		<div class="cooper base-wrap pc-jump-pos phone-jump-pos">
			<img class="base-title" src="img/sm-title/<?=$language=='en'?'en':'cn'?>4.png"></img>
			<ul class="join-hatch-list phone">
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/1.png"></li>
					<li><img src="img/cooper/2.png"></li>
					<li><img src="img/cooper/3.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/4.png"></li>
					<li><img src="img/cooper/5.png"></li>
					<li><img src="img/cooper/6.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/7.png"></li>
					<li><img src="img/cooper/8.png"></li>
					<li><img src="img/cooper/9.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/10.png"></li>
					<li><img src="img/cooper/11.png"></li>
					<li><img src="img/cooper/12.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/13.png"></li>
					<li><img src="img/cooper/14.png"></li>
					<li><img src="img/cooper/15.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/16.png"></li>
					<li><img src="img/cooper/17.png"></li>
					<li><img src="img/cooper/18.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/19.png"></li>
					<li><img src="img/cooper/20.png"></li>
					<li><img src="img/cooper/21.png"></li>
				</div>
				<div class="el-row scroll bottom2top">
					<li><img src="img/cooper/22.png"></li>
					<li><img src="img/cooper/23.png"></li>
					<li><img src="img/cooper/24.png"></li>
				</div>
			</ul>
		</div>
		<!-- 战略合作伙伴结束 -->


		

	</div>
	<!-- 内容区结束 -->

	<?php include 'footer.php';?>

<script src="js/bodymovin.min.js"></script>
<script src="js/index.js?v=2"></script>
</body>
</html>