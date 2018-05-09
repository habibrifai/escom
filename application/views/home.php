<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Escom</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="assets/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!-- HEADER -->
		<header id="home">
			<!-- NAVGATION -->
			<nav id="main-navbar">
				<div class="container">
					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a class="logo" href="."><img src="assets/bg/logo.jpg" alt="logo"></a>
						</div>
						<!-- Logo -->

						<!-- Mobile toggle -->
						<button class="navbar-toggle-btn">
							<i class="fa fa-bars"></i>
						</button>
						<!-- Mobile toggle -->

						<!-- Mobile Search toggle -->
						<button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button>
						<!-- Mobile Search toggle -->
					</div>

					<!-- Search -->
					<!-- <div class="navbar-search">
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<ul class="dropdown">
							<li><a href="blog">Blog Page</a></li>
							<li><a href="single_blog">Single Blog</a></li>
						</ul>
					</div> -->
					<!-- Search -->

					<!-- Nav menu -->
					<ul class="navbar-menu nav navbar-nav navbar-right">
						<li><a href=".">Home</a></li>
						<li><a href="<?php echo base_url('about'); ?>">Tentang Kami</a></li>
						<!-- <li><a href="#">About</a></li> -->
						<li class="has-dropdown"><a href="#">Pengguna</a>
							<ul class="dropdown">
								<li><a href="perusahaan">Perusahaan</a></li>
								<li><a href="organisasi">Organisasi</a></li>
							</ul>
						</li>
						<!-- <li class="has-dropdown"><a href="#">Events</a>
							<ul class="dropdown">
								<li><a href="single_event">Single event</a></li>
							</ul>
						</li>
						<li class="has-dropdown"><a href="#">Blog</a>
							<ul class="dropdown">
								<li><a href="blog">Blog Page</a></li>
								<li><a href="single_blog">Single Blog</a></li>
							</ul>
						</li>
						<li><a href="#">Contact</a></li> -->

						<?php if ($this->session->userdata('nama')) { ?>
							<li><a href="login"><?php echo $this->session->userdata('nama'); ?></a></li>
							<?php } else { ?>
								<li><a href="login">Login</a></li>
								<?php } ?>
							</ul>
							<!-- Nav menu -->
						</div>
					</nav>
					<!-- /NAVGATION -->

					<!-- HOME OWL -->
					<div id="home-owl" class="owl-carousel owl-theme">
						<!-- home item -->
						<div class="home-item">
							<!-- section background -->
							<div class="section-bg" style="background-image: url(<?php echo base_url(); ?>assets/bg/a.jpg);"></div>
							<!-- /section background -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-8">
											<div class="home-content">
												<h1>Art</h1>
												<p class="lead">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang kesenian.</p>
												<a href="<?php echo base_url('login'); ?>" class="primary-button">Join Us Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->

						<!-- home item -->
						<div class="home-item">
							<!-- Background Image -->
							<div class="section-bg" style="background-image: url(<?php echo base_url(); ?>assets/bg/b.jpg);"></div>
							<!-- /Background Image -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-8">
											<div class="home-content">
												<h1>Education</h1>
												<p class="lead">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang pendidikan.</p>
												<a href="<?php echo base_url('login'); ?>" class="primary-button">Join Us Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->

						<!-- home item -->
						<div class="home-item">
							<!-- Background Image -->
							<div class="section-bg" style="background-image: url(<?php echo base_url(); ?>assets/bg/c.jpg);"></div>
							<!-- /Background Image -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-8">
											<div class="home-content">
												<h1>Sport</h1>
												<p class="lead">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang olahraga.</p>
												<a href="<?php echo base_url('login'); ?>" class="primary-button">Join Us Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->

						<!-- home item -->
						<div class="home-item">
							<!-- Background Image -->
							<div class="section-bg" style="background-image: url(<?php echo base_url(); ?>assets/bg/d.jpg);"></div>
							<!-- /Background Image -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-8">
											<div class="home-content">
												<h1>Health</h1>
												<p class="lead">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang kesehatan.</p>
												<a href="<?php echo base_url('login'); ?>" class="primary-button">Join Us Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->

						<!-- home item -->
						<div class="home-item">
							<!-- Background Image -->
							<div class="section-bg" style="background-image: url(<?php echo base_url(); ?>assets/bg/e.jpg);"></div>
							<!-- /Background Image -->

							<!-- home content -->
							<div class="home">
								<div class="container">
									<div class="row">
										<div class="col-md-8">
											<div class="home-content">
												<h1>Social</h1>
												<p class="lead">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang sosial.</p>
												<a href="<?php echo base_url('login'); ?>" class="primary-button">Join Us Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /home content -->
						</div>
						<!-- /home item -->
					</div>
					<!-- /HOME OWL -->
				</header>
				<!-- /HEADER -->

				<!-- ABOUT -->
				<div id="about" class="section">
					<!-- container -->
					<div class="container">
						<!-- row -->
						<div class="row">
							<!-- about content -->
							<div style="text-align: center; margin-bottom: 30px;" class="col-md-12">
								<div class="section-title">
									<h2 class="title">Welcome to ESCOM</h2>
									<p class="sub-title">ESCOM adalah platform aplikasi yang dimaksudkan untuk memungkinkan organisasi atau organisasi menjalin kerjasama sponsorship dengan perusahaan.</p>
								</div>
								<div class="about-content">
									<p>ESCOM didasarkan prinsip crowdfunding yaitu memberi kesempatan untuk mendapatkan pendanaan pada program kegiatan organisasi yang selanjutnya perusahaan menerima keuntungan timbal balik berupa non komersial.</p>
									<p>Melalui ESCOM perusahaan yang ingin mendukung kegiatan organisasi tim dapat melakukannya dengan cara yang berbeda. Sebagai imbalannya, pihak yang berkontribusi akan mendapatkan peran partisipasi pada kegiatan tersebut.</p>
									<a href="<?php echo base_url('about'); ?>" class="primary-button">Read More</a>
								</div>
							</div><br>
							<!-- /about content -->

							<!-- about video -->
					<!-- <div class="col-md-offset-1 col-md-6">
						<a href="#" class="about-video">
							<i class="play-icon fa fa-play"></i>
							<img src="assets/img/about.jpg" alt="">
						</a>
					</div> -->
					<!-- /about video -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /ABOUT -->

		<!-- CAUSESS -->
		<!-- <div id="causes" class="section"> -->
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- row -->
				<!-- <div class="row"> -->

					<!-- section title -->
					<!-- <div class="col-md-8 col-md-offset-2">
						<div class="section-title text-center">
							<h2 class="title">Our Causes</h2>
							<p class="sub-title">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
						</div>
					</div> -->
					<!-- section title -->

					<!-- causes -->
					<!-- <div class="col-md-4">
						<div class="causes">
							<div class="causes-img">
								<a href="single-cause.html">
									<img src="assets/img/post-1.jpg" alt="">
								</a>
							</div>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: 87%;">
										<span>87%</span>
									</div>
								</div>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span>
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div>
							<div class="causes-content">
								<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
								<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
							</div>
						</div>
					</div> -->
					<!-- /causes -->

					<!-- causes -->
					<!-- <div class="col-md-4">
						<div class="causes">
							<div class="causes-img">
								<a href="single-cause.html">
									<img src="assets/img/post-2.jpg" alt="">
								</a>
							</div>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: 53%;">
										<span>53%</span>
									</div>
								</div>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span>
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div>
							<div class="causes-content">
								<h3><a href="single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
								<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
							</div>
						</div>
					</div> -->
					<!-- /causes -->

					<!-- causes -->
					<!-- <div class="col-md-4">
						<div class="causes">
							<div class="causes-img">
								<a href="single-cause.html">
									<img src="assets/img/post-3.jpg" alt="">
								</a>
							</div>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: 72%;">
										<span>72%</span>
									</div>
								</div>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span>
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div>
							<div class="causes-content">
								<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
								<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
							</div>
						</div>
					</div> -->
					<!-- /causes -->

					<!-- <div class="clearfix visible-md visible-lg"></div> -->

					<!-- causes -->
					<!-- <div class="col-md-4">
						<div class="causes">
							<div class="causes-img">
								<a href="single-cause.html">
									<img src="assets/img/post-4.jpg" alt="">
								</a>
							</div>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: 64%;">
										<span>64%</span>
									</div>
								</div>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span>
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div>
							<div class="causes-content">
								<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
								<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
							</div>
						</div>
					</div> -->
					<!-- /causes -->

					<!-- causes -->
					<!-- <div class="col-md-4">
						<div class="causes">
							<div class="causes-img">
								<a href="single-cause.html">
									<img src="assets/img/post-5.jpg" alt="">
								</a>
							</div>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: 72%;">
										<span>72%</span>
									</div>
								</div>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span>
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div>
							<div class="causes-content">
								<h3><a href="single-cause.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
								<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
							</div>
						</div>
					</div> -->
					<!-- /causes -->

					<!-- causes -->
					<!-- <div class="col-md-4">
						<div class="causes">
							<div class="causes-img">
								<a href="single-cause.html">
									<img src="assets/img/post-6.jpg" alt="">
								</a>
							</div>
							<div class="causes-progress">
								<div class="causes-progress-bar">
									<div style="width: 53%;">
										<span>53%</span>
									</div>
								</div>
								<div>
									<span class="causes-raised">Raised: <strong>52.000$</strong></span>
									<span class="causes-goal">Goal: <strong>90.000$</strong></span>
								</div>
							</div>
							<div class="causes-content">
								<h3><a href="single-cause.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
								<a href="single-cause.html" class="primary-button causes-donate">Donate Now</a>
							</div>
						</div>
					</div> -->
					<!-- /causes -->
					<!-- </div> -->
					<!-- /row -->
					<!-- </div> -->
					<!-- /container -->
					<!-- </div> -->
					<!-- /CAUSESS -->

					<!-- NUMBERS -->
					<div id="numbers" class="section">
						<!-- container -->
						<div class="container">
							<!-- row -->
							<div class="row">
								<!-- number -->
								<div class="col-md-4 col-sm-6">
									<div class="number">
										<i class="fas fa-book"></i>
										<h3>-</h3>
										<span>Proposal Terdanai</span>
									</div>
								</div>
								<!-- /number -->

								<!-- number -->
								<div class="col-md-4 col-sm-6">
									<a href="<?php echo base_url('perusahaan'); ?>">
										<div class="number">
											<i class="fas fa-building"></i>
											<h3><?php echo $per; ?></h3>
											<span>Perusahaan yang Terdaftar</span>
										</div>
									</a>
								</div>
								<!-- /number -->

								<!-- number -->
								<div class="col-md-4 col-sm-6">
									<a href="<?php echo base_url('organisasi'); ?>">
										<div class="number">
											<i class="fas fa-sitemap"></i>
											<h3><?php echo $org; ?></h3>
											<span>Organisasi yang Terdaftar</span>
										</div>
									</a>
								</div>
								<!-- /number -->

								<!-- number -->
					<!-- <div class="col-md-3 col-sm-6">
						<div class="number">
							<i class="fa fa-handshake-o"></i>
							<h3>357</h3>
							<span>Volunteers</span>
						</div>
					</div> -->
					<!-- /number -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NUMBERS -->

		<!-- CTA -->
		<div id="cta" class="section">
			<!-- background section -->
			<div class="section-bg" style="background-image: url(<?php echo base_url('assets/bg/c.jpg'); ?>);" data-stellar-background-ratio="0.5"></div>
			<!-- /background section -->

			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- cta content -->
					<div class="col-md-offset-2 col-md-8">
						<div class="cta-content text-center">
							<h1>Jadilah Bagian Dari Kami</h1>
							<p class="lead">Jadilah bagian dari kami sebagai pemberi sponsor atau penerima sponsor.</p>
							<a href="<?php echo base_url('register'); ?>" class="primary-button">Join Us Now!</a>
						</div>
					</div>
					<!-- /cta content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /CTA -->

		<!-- EVENTS -->
		<!-- <div id="events" class="section"> -->
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- row -->
				<!-- <div class="row"> -->
					<!-- section title -->
					<!-- <div class="col-md-8 col-md-offset-2">
						<div class="section-title text-center">
							<h2 class="title">Upcoming Events</h2>
							<p class="sub-title">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
						</div>
					</div> -->
					<!-- /section title -->

					<!-- event -->
					<!-- <div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<a href="single-event.html">
									<img src="assets/img/event-1.jpg" alt="">
								</a>
							</div>
							<div class="event-content">
								<h3><a href="single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<ul class="event-meta">
									<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
									<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /event -->

					<!-- event -->
					<!-- <div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<a href="single-event.html">
									<img src="assets/img/event-2.jpg" alt="">
								</a>
							</div>
							<div class="event-content">
								<h3><a href="single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
								<ul class="event-meta">
									<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
									<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /event -->

					<!-- <div class="clearfix visible-md visible-lg"></div> -->

					<!-- event -->
					<!-- <div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<a href="single-event.html">
									<img src="assets/img/event-3.jpg" alt="">
								</a>
							</div>
							<div class="event-content">
								<h3><a href="single-event.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<ul class="event-meta">
									<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
									<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /event -->

					<!-- event -->
					<!-- <div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<a href="single-event.html">
									<img src="assets/img/event-4.jpg" alt="">
								</a>
							</div>
							<div class="event-content">
								<h3><a href="single-event.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
								<ul class="event-meta">
									<li><i class="fa fa-clock-o"></i> 24 October, 2018 | 8:00AM - 11:00PM</li>
									<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /event -->
					<!-- </div> -->
					<!-- /row -->
					<!-- </div> -->
					<!-- /container -->
					<!-- </div> -->
					<!-- /EVENTS -->

					<!-- TESTIMONIAL -->
					<!-- <div id="testimonial" class="section"> -->
						<!-- background section -->
						<!-- <div class="section-bg" style="background-image: url(assets/img/background-2.jpg);" data-stellar-background-ratio="0.5"></div> -->
						<!-- /background section -->

						<!-- container -->
						<!-- <div class="container"> -->
							<!-- row -->
							<!-- <div class="row"> -->
								<!-- Testimonial owl -->
					<!-- <div class="col-md-12">
						<div id="testimonial-owl" class="owl-carousel owl-theme"> -->
							<!-- testimonial -->
							<!-- <div class="testimonial">
								<div class="testimonial-meta">
									<div class="testimonial-img">
										<img src="assets/img/avatar-1.jpg" alt="">
									</div>
									<h3>John Doe</h3>
									<span>Volunteer</span>
								</div>
								<div class="testimonial-quote">
									<blockquote>
										<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
									</blockquote>
								</div>
							</div> -->
							<!-- /testimonial -->

							<!-- testimonial -->
							<!-- <div class="testimonial">
								<div class="testimonial-meta">
									<div class="testimonial-img">
										<img src="assets/img/avatar-2.jpg" alt="">
									</div>
									<h3>John Doe</h3>
									<span>Volunteer</span>
								</div>
								<div class="testimonial-quote">
									<blockquote>
										<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
									</blockquote>
								</div>
							</div> -->
							<!-- /testimonial -->

							<!-- testimonial -->
							<!-- <div class="testimonial">
								<div class="testimonial-meta">
									<div class="testimonial-img">
										<img src="assets/img/avatar-1.jpg" alt="">
									</div>
									<h3>John Doe</h3>
									<span>Volunteer</span>
								</div>
								<div class="testimonial-quote">
									<blockquote>
										<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
									</blockquote>
								</div>
							</div> -->
							<!-- /testimonial -->

							<!-- testimonial -->
							<!-- <div class="testimonial">
								<div class="testimonial-meta">
									<div class="testimonial-img">
										<img src="assets/img/avatar-2.jpg" alt="">
									</div>
									<h3>John Doe</h3>
									<span>Volunteer</span>
								</div>
								<div class="testimonial-quote">
									<blockquote>
										<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
									</blockquote>
								</div>
							</div> -->
							<!-- /testimonial -->
						<!-- </div>
						</div> -->
						<!-- /Testimonial owl -->
						<!-- </div> -->
						<!-- /Row -->
						<!-- </div> -->
						<!-- /container -->
						<!-- </div> -->
						<!-- /TESTIMONIAL -->

						<!-- BLOG -->
						<!-- <div id="blog" class="section"> -->
							<!-- container -->
							<!-- <div class="container"> -->
								<!-- row -->
								<!-- <div class="row"> -->
									<!-- section title -->
					<!-- <div class="col-md-8 col-md-offset-2">
						<div class="section-title text-center">
							<h2 class="title">Our Blog</h2>
							<p class="sub-title">Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
						</div>
					</div> -->
					<!-- /section title -->

					<!-- blog -->
					<!-- <div class="col-md-4">
						<div class="article">
							<div class="article-img">
								<a href="single-blog.html">
									<img src="assets/img/post-1.jpg" alt="">
								</a>
							</div>
							<div class="article-content">
								<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<ul class="article-meta">
									<li>12 November 2018</li>
									<li>By John doe</li>
									<li>0 Comments</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /blog -->

					<!-- blog -->
					<!-- <div class="col-md-4">
						<div class="article">
							<div class="article-img">
								<a href="single-blog.html">
									<img src="assets/img/post-2.jpg" alt="">
								</a>
							</div>
							<div class="article-content">
								<h3 class="article-title"><a href="single-blog.html">Vix fuisset tibique facilisis cu. Justo accusata ius at</a></h3>
								<ul class="article-meta">
									<li>12 November 2018</li>
									<li>By John doe</li>
									<li>0 Comments</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /blog -->

					<!-- blog -->
					<!-- <div class="col-md-4">
						<div class="article">
							<div class="article-img">
								<a href="single-blog.html">
									<img src="assets/img/post-3.jpg" alt="">
								</a>
							</div>
							<div class="article-content">
								<h3 class="article-title"><a href="single-blog.html">Possit nostro aeterno eu vis, ut cum quem reque</a></h3>
								<ul class="article-meta">
									<li>12 November 2018</li>
									<li>By John doe</li>
									<li>0 Comments</li>
								</ul>
								<p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor di bidang </p>
							</div>
						</div>
					</div> -->
					<!-- /blog -->
					<!-- </div> -->
					<!-- /row -->
					<!-- </div> -->
					<!-- /container -->
					<!-- </div> -->
					<!-- /BLOG -->

					<!-- FOOTER -->
					<footer id="footer" class="section">
						<!-- container -->
						<div class="container">
							<!-- row -->
							<div class="row">
								<div style="text-align: center;" class="section-title">
									<h3 class="title">Contact Us</h3>
								</div>
								<!-- footer contact -->
								<div style="text-align: center;" class="col-md-6">
									
									<div class="footer">
										<div class="footer-logo">
											<img style="width: 150px; border-radius: 15px;" src="assets/bg/logo.jpg" alt="">
										</div>						
									</div>
								</div>
								<div class="col-6">
									<div class="footer">
										<!-- <p>Jadilah bagian dari kami sebagai penyedia atau penerima sponsor.</p> -->
										<ul class="footer-contact">
											<li><i class="fa fa-phone"></i><a> 081 - 217 - 131 - 747</a></li>
											<li><i class="fa fa-envelope"></i><a href="https://www.gmail.com"> escom0518@gmail.com</a></li>
											<li><i class="fab fa-facebook-square"></i><a> escom</a></li>
											<li><i class="fab fa-instagram"></i><a> escom0518</a></li>
											<li><i class="fab fa-line"></i><a> @svs9858v</a></li>
										</ul>
									</div>
								</div>
								<!-- /footer contact -->

								<!-- footer galery -->
					<!-- <div class="col-md-4">
						<div class="footer"> -->
							<!-- <h3 class="footer-title">Galery</h3>
							<ul class="footer-galery">
								<li><a href="#"><img src="assets/img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-6.jpg" alt=""></a></li>
							</ul> -->
						<!-- </div>
						</div> -->
						<!-- /footer galery -->

						<!-- footer newsletter -->
					<!-- <div class="col-md-4">
						<div class="footer"> -->
							<!-- <h3 class="footer-title">Newsletter</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
							<form class="footer-newsletter">
								<input class="input" type="email" placeholder="Enter your email">
								<button class="primary-button">Subscribe</button>
							</form> -->
							<!-- <ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul> -->
						<!-- </div>
						</div> -->
						<!-- /footer newsletter -->
					</div>
					<!-- /row -->

					<!-- footer copyright & nav -->
					<div id="footer-bottom" class="row">
						<div class="col-md-6 col-md-push-6">
						<!-- <ul class="footer-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Causes</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
						</ul> -->
					</div>

					<div class="col-md-12">
						<div class="footer-copyright">
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved || Colorlib || edited by Sistem Informasi ITS '15
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>
					<!-- /footer copyright & nav -->
				</div>
				<!-- /container -->
			</footer>
			<!-- /FOOTER -->

			<!-- jQuery Plugins -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/owl.carousel.min.js"></script>
			<script src="assets/js/jquery.stellar.min.js"></script>
			<script src="assets/js/main.js"></script>

		</body>

		</html>
