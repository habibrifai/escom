<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Charity HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"/>

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- NAVGATION -->
			<nav id="main-navbar">
				<div class="container">
					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a class="logo" href="."><img src="<?php echo base_url() ?>assets/bg/logo.jpg" alt="logo"></a>
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
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div> -->
					<!-- Search -->

					<!-- Nav menu -->
					<ul class="navbar-menu nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="<?php echo base_url('about'); ?>">Tentang Kami</a></li>
						<!-- <li><a href="#">About</a></li> -->
						<li class="has-dropdown"><a href="#">Pengguna</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url('perusahaan'); ?>">Perusahaan</a></li>
								<li><a href="<?php echo base_url('organisasi'); ?>">Organisasi</a></li>
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

			<!-- Page Header -->
			<div id="page-header">
				<!-- section background -->
				<div class="section-bg" style="background-image: url(<?php echo base_url() ?>assets/bg/organisasi.jpg);"></div>
				<!-- /section background -->

				<!-- page header content -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="header-content">
								<h1>Daftar Organisasi</h1>
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Organisasi yang Terdaftar</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /page header content -->
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /HEADER -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- MAIN -->
					<main id="main" class="col-md-9">
						<!-- article -->

						<?php

						// $r = random_int(0, $jml_data_p - 1);

						foreach ($organisasi as $i => $val) {

							if($i == 0){ ?>

							<div style="text-align: justify; text-justify: inter-word;" class="article causes-details">
								<!-- article img -->
								<div class="article-img">
									<img style="max-width: 70%;" src="<?php echo base_url('assets/gambar/').$val['foto']; ?>" alt="">
								</div>
								<div class="article-content">
									<!-- article title -->
									<h2 class="article-title"><?php echo $val['nama_organisasi']; ?></h2>

									<?php echo htmlspecialchars_decode($val['deskripsi']); ?>
								</div>
							</div>
							<?php } } ?>
						</main>
						<!-- /MAIN -->

						<!-- ASIDE -->
						<aside id="aside" class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Organisasi Lain</h3>
								<?php
								foreach ($list_o as $list_organisasi) { ?>
								<div class="widget-post">
									<a href="<?php echo base_url('organisasi/show_organisasi/').$list_organisasi['id_user']; ?>">
										<div class="widget-img">
											<img height="80px" width="auto" src="<?php echo base_url('assets/gambar/').$list_organisasi['foto']; ?>" alt="">
										</div>
										<div class="widget-content">
											<?php echo $list_organisasi['nama_organisasi']; ?>
										</div>
									</a>
								</div>
								<?php } ?>
							</div>
							<div class="widget">
								<h3 class="widget-title">Perusahaan yang Terdaftar</h3>
								<?php
								foreach ($list_p as $list_perusahaan) { ?>
								<div class="widget-post">
									<a href="<?php echo base_url('perusahaan/show_perusahaan/').$list_perusahaan['id_user']; ?>">
										<div class="widget-img">
											<img height="80px" width="auto" src="<?php echo base_url('assets/gambar/').$list_perusahaan['foto']; ?>" alt="">
										</div>
										<div class="widget-content">
											<?php echo $list_perusahaan['nama_perusahaan']; ?>
										</div>
									</a>
								</div>
								<?php } ?>
							</div>

						</aside>
						<!-- /ASIDE -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION -->

			<!-- FOOTER -->
			<footer id="footer" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<!-- <div class="row"> -->
						<!-- footer contact -->
					<!-- <div class="col-md-4">
						<div class="footer">
							<div class="footer-logo">
								<a class="logo" href="#"><img src="./img/logo.png" alt=""></a>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul class="footer-contact">
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
								<li><i class="fa fa-phone"></i> 607-279-9246</li>
								<li><i class="fa fa-envelope"></i> <a href="#">Charity@email.com</a></li>
							</ul>
						</div>
					</div> -->
					<!-- /footer contact -->

					<!-- footer galery -->
					<!-- <div class="col-md-4">
						<div class="footer">
							<h3 class="footer-title">Galery</h3>
							<ul class="footer-galery">
								<li><a href="#"><img src="assets/img/galery-1.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-2.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="assets/img/galery-6.jpg" alt=""></a></li>
							</ul>
						</div>
					</div> -->
					<!-- /footer galery -->

					<!-- footer newsletter -->
					<!-- <div class="col-md-4">
						<div class="footer">
							<h3 class="footer-title">Newsletter</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
							<form class="footer-newsletter">
								<input class="input" type="email" placeholder="Enter your email">
								<button class="primary-button">Subscribe</button>
							</form>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div> -->
					<!-- /footer newsletter -->
					<!-- </div> -->
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
			<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
			<script src="<?php echo base_url() ?>assets/js/main.js"></script>

		</body>
		</html>
