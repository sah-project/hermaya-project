<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>HERMAYA - PROJECT</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="<?=base_url();?>dashboard/assets/fonts/font.css" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="<?=base_url();?>dashboard/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="<?=base_url();?>dashboard/assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>dashboard/assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="<?=base_url();?>dashboard/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>dashboard/assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="<?=base_url();?>dashboard/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url();?>dashboard/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>


	<body class="smoothscroll enable-animation">

		


		<!-- wrapper -->
		<div id="wrapper">
			<!-- Top Bar -->
			<div id="topBar">
				<div class="container">
					<!-- right -->
					<ul class="top-links list-inline pull-right">
						<li class="text-welcome hidden-xs">Selamat datang di Website kami, <strong></strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href=""><i class="fa fa-user hidden-xs"></i> LOGIN</a>
						</li>
					</ul>
					<!-- left -->
				</div>
			</div>
			<!-- /Top Bar -->

			<div id="header" class="sticky shadow-after-3 clearfix">
				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">
						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">
							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a class="pull-right" href="#">
									<i class="fa fa-user"></i> 
								</a>
							</li>
							<!-- /QUICK SHOP CART -->
						</ul>
						<!-- /BUTTONS -->
						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="<?=base_url();?>dashboard/assets/images/logo_dark.png" alt="" />
						</a>
					<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="active"><!-- HOME -->
										<a href="#slider">
											HOME
										</a>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											PROFILE
										</a>
										<ul class="dropdown-menu">
											<li><a href="page-careers.html">PROFIL DESA</a></li>
											<li><a href="page-sitemap.html">STRUKTUR ORGANISASI</a></li>
											<li><a href="page-blank.html">ORGANISAI NAUNGAN DESA</a></li>
										</ul>
									</li>
									<li>
										<a href="#">DATA DESA</a>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											BERITA
										</a>
										<ul class="dropdown-menu">
											<li><a href="page-careers.html">AGENDA</a></li>
											<li><a href="page-careers.html">GALLERY</a></li>
											<li><a href="page-sitemap.html">BERITA TERKINI</a></li>
										</ul>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											TRANSPARANSI
										</a>
										<ul class="dropdown-menu">
											<li><a href="page-careers.html">APBD</a></li>
											<li><a href="page-careers.html">RKPD</a></li>
											<li><a href="page-sitemap.html">RKJM</a></li>
										</ul>
									</li>
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>



			<!-- REVOLUTION SLIDER -->
			<div class="slider fullwidthbanner-container roundedcorners">
				<div class="fullwidthbanner" data-height="600" data-shadow="0" data-navigationStyle="preview2">
					<ul class="hide">

						<!-- SLIDE  1-->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Slide 1" style="background-color: #F6F6F6;">

							<img src="<?=base_url();?>dashboard/assets/images/backgrounds/grey-noise-min.jpg" alt="video" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat">
							<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="155"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">PELAYANAN INFORMASI TRANSPARANSI </span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="205"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								SELAMAT DATANG DI WEBSITE KAMI
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
								data-x="center"
								data-y="295"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
								Website ini kami hadirkan sebagai media informasi Pemerintahan Desa kepada masyarakat. Juga sebagai sarana interaksi, komunikasi dan transparansi publik sesuai dengan Undang-undang keterbukaan informasi.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="383"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<a href="#purchase" class="btn btn-default btn-lg">
									<span>Lebih lanjut</span> 
								</a>
							</div>

						</li>

						<!-- SLIDE  2-->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide 2">
							<img src="<?=base_url();?>dashboard/assets/images/1x1.png" data-lazyload="<?=base_url();?>dashboard/assets/images/demo/index-min.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />
							<div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>
						</li>

						<!-- SLIDE  3-->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-link="http://www.stepofweb.com/" data-title="Slide 4" data-target="_blank" data-saveperformance="off">

							<img src="<?=base_url();?>dashboard/assets/images/1x1.png" data-lazyload="<?=base_url();?>dashboard/assets/images/demo/wall.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
						</li>

						<!-- SLIDE 4 -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide 5">

							<img src="<?=base_url();?>dashboard/assets/images/1x1.png" data-lazyload="<?=base_url();?>dashboard/assets/images/demo/1200x800/24-min.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />
						</li>

						
					</ul>

					<div class="tp-bannertimer"><!-- progress bar --></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->

			<!-- WELCOME -->
			<section class="nopadding-bottom">
				<div class="container">
					<header class="text-center margin-bottom-40">
						<h1 class="weight-300">VISI DESA</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>KAMI BERKOMITMEN DENGAN VISI KAMI</span></h2>
					</header>
					<div class="text-center">
						<p class="lead">
							Membangun	 Tata kelola Pemerintahan Desa yang baik dan bersih guna terwujudnya kehidupan masyarakat desa yang adil, makmur dan sejahtera serta berbudaya dan berakhlaq mulia.
						</p>
						<div class="margin-top-40">
						</div>
					</div>
				</div>
			</section>
			<!-- /WELCOME -->
			<!-- -->
			<section class="alternate">
				<div class="container">
				<header class="text-center margin-bottom-40">
						<h1 class="weight-300">MISI DESA</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>MISI DESA YANG SELALU MENJADI TUJUAN KAMI</span></h2>
					</header>
					<div class="row">
						<div class="col-md-6">
							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-balance-scale"></i>
								<a class="box-icon-title" href="#">
									<h2>Pemerintahan</h2>
								</a>
								<p>Meningkatkan tata pemerintahan yang demokratis, trasparan, akuntabel, efisien dan efektif.</p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-building-o"></i>
								<a class="box-icon-title" href="#">
									<h2>Infrastruktur</h2>
								</a>
								<p>Meningkatkan pembangunan ifrastruktur pedesaan yang terarah dan berkualitas.</p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-users"></i>
								<a class="box-icon-title" href="#">
									<h2>Organisasi</h2>
								</a>
								<p>Meningkatkan Peran Kelembagaan dan Masyarakat Desa dalam mendorong pembangunan Desa</p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="box-icon box-icon-side box-icon-color box-icon-round">
								<i class="fa fa-bar-chart-o"></i>
								<a class="box-icon-title" href="#">
									<h2>Perekonomian</h2>
								</a>
								<p>Meningkatan kemandirian ekonomi masyarakat melalui program-program yang terencana dan berdampak</p>
							</div>
						</div>

						
					</div>

				</div>
			</section>
			<!-- / -->
			<!-- COLOR BOXES -->
			<section class="nopadding noborder">
				<div class="row box-gradient box-gray">
					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-map fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">300</h2>
						<p>LUAS WILAYAH (Ha)</p>
					</div>

					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-users fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">5033</h2>
						<p>JUMLAH PENDUDUK</p>
					</div>

					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-book fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">25</h2>
						<p>LEMBAGA PENDIDIKAN</p>
					</div>

					<div class="col-xs-6 col-sm-3">
						<i class="fa fa-building-o fa-4x"></i>
						<h2 class="countTo font-raleway" data-speed="3000">68</h2>
						<p>FASILITAS KESEHATAN DAN PELAYANAN PUBLIK</p>
					</div>
				</div>
			</section>
			<!-- /COLOR BOXES -->




			<!-- Features -->
			<section>
\
			</section>
			<!-- /Features -->




			<!-- CALLOUT -->
			<section class="callout-dark heading-title heading-arrow-bottom">
				<div class="container">

					<header class="text-center">
						<h1 class="weight-300 size-40">GALERRY</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>POTRET KAMI</span></h2>
					</header>
				</div>
			</section>
			<!-- /CALLOUT -->
			<!-- WORK -->
			<section class="nopadding">
				<div id="portfolio" class="portfolio-nogutter">
					<div class="row mix-grid">
						<div class="col-md-3 col-sm-3 mix development"><!-- item -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/1-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>
									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/1-min.jpg" width="600" height="399" alt="">
								</figure>
								<div class="item-box-desc">
									<h3>Nature Photography</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">Photography</a></li>
										<li><a href="#">Design</a></li>
									</ul>
								</div>
							</div>
						</div><!-- /item -->
						<div class="col-md-3 col-sm-3 mix development"><!-- item -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
											<!-- details -->
										</span>
									</span>
									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
								</figure>
								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>
							</div>
						</div><!-- /item -->
						<div class="col-md-3 col-sm-3 mix photography"><!-- item -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>
									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/20-min.jpg" width="600" height="399" alt="">
								</figure>
								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>
							</div>
						</div><!-- /item -->
						<div class="col-md-3 col-sm-3 mix design"><!-- item -->
							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>
									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/19-min.jpg" width="600" height="399" alt="">
								</figure>
								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>
							</div>
						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>

									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix development"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>

									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix photography"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>

									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->


						<div class="col-md-3 col-sm-3 mix design"><!-- item -->

							<div class="item-box">
								<figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="<?=base_url();?>dashboard/assets/images/demo/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus size-20"></span>
											</a>
										</span>
									</span>

									<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/mockups/600x399/15-min.jpg" width="600" height="399" alt="">
								</figure>

								<div class="item-box-desc">
									<h3>Kegiatan 1</h3>
									<ul class="list-inline categories nomargin">
										<li><a href="#">RT 12</a></li>
										<li><a href="#">21 Januari 2019</a></li>
									</ul>
								</div>

							</div>

						</div><!-- /item -->

					</div>

				</div>
			</section>
			<!-- /WORK -->




			<!-- -->
			<section>
				<div class="container">
					<header class="text-center margin-bottom-40">
						<h1 class="weight-300">ANGGARAN DAN TRANSPARANSI</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>RESUME ANGGARAN DAN PROYEK DESA</span></h2>
					</header>
					<div class="row">

						<!-- toggle -->
						<div class="col-md-6 col-sm-6">
							<div class="toggle toggle-accordion toggle-transparent toggle-bordered-full">

								<div class="toggle active">
									<label>Proyek Pembangunan Jalan RT 12-20</label>
									<div class="toggle-content">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									</div>
								</div>

								<div class="toggle">
									<label>Program Pembagian Bantuan Sembako</label>
									<div class="toggle-content">
										<p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
									</div>
								</div>

								<div class="toggle">
									<label>Beasiswa Prestasi Desa </label>
									<div class="toggle-content">
										<p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
									</div>
								</div>

							</div>
						</div>
						<!-- /toggle -->

						<!-- skills -->
						<div class="col-md-6 col-sm-6">
							<h4>Resume Penggunaan Anggaran</h4>

							<label>
								<span class="pull-right">60%</span>
								INFRASTRUKTUR
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">88%</span>
								PENDIDIKAN
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">93%</span>
								KESEHATAN
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 93%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">77%</span>
								KEGAITAN DESA / MASYARAKAT
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 77%; min-width: 2em;"></div>
							</div>

							<label>
								<span class="pull-right">99%</span>
								LAIN LAIN
							</label>
							<div class="progress progress-xxs">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%; min-width: 2em;"></div>
							</div>
						</div>
						<!-- /skills -->
					</div>
				</div>
			</section>
			<!-- / -->
			<!-- TEAM -->
			<section>
				<div class="container">
					<header class="text-center margin-bottom-60">
						<h1 class="weight-300">TOKOH KAMI</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>MEREKA YANG TELAH BERJASA</span></h2>
					</header>
					<div class="row">
						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<!-- <img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/people/460x700/7-min.jpg" alt="" /> -->
											<h2>KH. MUH. IHSAN</h2>
											<small>Kases ke II (1993)</small>
										</div>
									</div>
								</div>
								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Felica Doe</h4>
										<small>CEO</small>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
										<hr />
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<!-- <img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/people/460x700/7-min.jpg" alt="" /> -->
											<h2>KH. MUH. IHSAN</h2>
											<small>Kases ke II (1993)</small>
										</div>
									</div>
								</div>
								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Felica Doe</h4>
										<small>CEO</small>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
										<hr />
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<!-- <img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/people/460x700/7-min.jpg" alt="" /> -->
											<h2>KH. MUH. IHSAN</h2>
											<small>Kases ke II (1993)</small>
										</div>
									</div>
								</div>
								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Felica Doe</h4>
										<small>CEO</small>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
										<hr />
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="col-md-3 col-sm-6">
							<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
								<div class="front">
									<div class="box1 box-default">
										<div class="box-icon-title">
											<!-- <img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/people/460x700/7-min.jpg" alt="" /> -->
											<h2>KH. MUH. IHSAN</h2>
											<small>Kases ke II (1993)</small>
										</div>
									</div>
								</div>
								<div class="back">
									<div class="box2 box-default">
										<h4 class="nomargin">Felica Doe</h4>
										<small>CEO</small>
										<hr />
										<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
										<hr />
									</div>
								</div>
							</div>
						</div>
						<!-- /item -->
					</div>
				</div>
			</section>
			<!-- /TEAM -->




			<!-- RECENT NEWS -->
			<section>
				<div class="container">

					<header class="text-center margin-bottom-60">
						<h1 class="weight-300">Berita Terkini</h1>
						<h2 class="weight-300 letter-spacing-1 size-13"><span>Update Berita Terkini Tentang Kami</span></h2>
					</header>
					<div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/24-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/17-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/30-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/26-min.jpg" alt="">
							</a>

							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/18-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/34-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/37-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
						<div class="img-hover">
							<a href="blog-single-default.html">
								<img class="img-responsive" src="<?=base_url();?>dashboard/assets/images/demo/451x300/23-min.jpg" alt="">
							</a>
							<h4 class="text-left margin-top-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
							<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
							<ul class="text-left size-12 list-inline list-separator">
								<li>
									<i class="fa fa-calendar"></i> 
									29th Jan 2015
								</li>
								<li>
									<a href="blog-single-default.html#comments">
										<i class="fa fa-comments"></i> 
										3
									</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</section>
			<!-- /RECENT NEWS -->
			<div class="text-center margin-top-30 margin-bottom-30">
			</div>


			<!-- FOOTER -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<!-- Footer Logo -->
							<img class="footer-logo" src="<?=base_url();?>dashboard/assets/images/footer.png" alt="" />

							<!-- Small Description -->
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

							<!-- Contact Address -->
							<address>
								<ul class="list-unstyled">
									<li class="footer-sprite address">
										PO Box 21132<br>
										Here Weare St, Melbourne<br>
										Vivas 2355 Australia<br>
									</li>
									<li class="footer-sprite phone">
										Phone: 1-800-565-2390
									</li>
									<li class="footer-sprite email">
										<a href="mailto:support@yourname.com">support@yourname.com</a>
									</li>
								</ul>
							</address>
							<!-- /Contact Address -->

						</div>


						<div class="col-md-6">

							<!-- Links -->
							<h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">Profile</a></li>
								<li><a href="#">Data</a></li>
								<li><a href="#">Berita</a></li>
								<li><a href="#">Transparansi</a></li>
								<li><a href="#">Log In</a></li>
							</ul>
							<!-- /Links -->

						</div>


					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li>&bull;</li>
							<li><a href="#">Privacy</a></li>
						</ul>
						&copy; All Rights Reserved, Company LTD
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->
		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
			<script type="text/javascript">var plugin_path = '<?=base_url();?>dashboard/assets/plugins/';</script>
		<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="<?=base_url();?>dashboard/assets/js/scripts.js"></script>
		
		<!-- STYLESWITCHER - REMOVE -->
		<!-- <script async type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/styleswitcher/styleswitcher.js"></script> -->

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>dashboard/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>dashboard/assets/js/view/demo.revolution_slider.js"></script>

	</body>
</html>