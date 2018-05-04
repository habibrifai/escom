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
							<a class="logo" href="."><img src="assets/img/logo.png" alt="logo"></a>
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
										<a href="#" class="primary-button">Join Us Now!</a>
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
										<a href="#" class="primary-button">Join Us Now!</a>
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
										<a href="#" class="primary-button">Join Us Now!</a>
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
										<a href="#" class="primary-button">Join Us Now!</a>
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
										<a href="#" class="primary-button">Join Us Now!</a>
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
					<div style="text-align: justify; text-justify: inter-word;" class="col-md-12">
						<div class="section-title">
							<h2 class="title">Welcome to ESCOM</h2>
							<p class="sub-title">ESCOM adalah platform aplikasi yang dimaksudkan untuk memungkinkan organisasi atau organisasi menjalin kerjasama sponsorship dengan perusahaan.</p>
						</div>
						<div class="about-content">
							<p>ESCOM didasarkan prinsip crowdfunding yaitu memberi kesempatan untuk mendapatkan pendanaan pada program kegiatan organisasi yang selanjutnya perusahaan menerima keuntungan timbal balik berupa non komersial.  Melalui ESCOM perusahaan yang ingin mendukung kegiatan organisasi tim dapat melakukannya dengan cara yang berbeda. Sebagai imbalannya, pihak yang berkontribusi akan mendapatkan peran partisipasi pada kegiatan tersebut. Menjalin kerjasama  sponsorshipdi ESCOM itu mudah dan hal yang sama berlaku untuk menemukan dan memilih perusahaan potensial yang akan menjadi mitra serta mudah untuk memilih mensponsori dalam sebuah kekgiatan. Menggunakan berbagai metode pembayaran sederhana. Terbentuknya Perusahaan ini dilatarbelakangi oleh fenomena bahwa terdapat demand yang saling menguntungkan antara kebutuhan dana kegiatan organisasi dan kebutuhan akan tanggung jawab serta peningkatan image perusahaan terhadap sosial dan lingkungan melewati sebuah kegiatan.</p>
							<p> Organisasi yang terus memiliki agenda aktif dan berbagai kegiatan dengan harapan dapat terus mendapatkan keterlibatan masyarakat secara luas ternyata terdapat permasalahan di bidang penggalangan dana maupun secara umum berhubungan dengan bagian keuangan. Dewasa ini, perkembangan teknologi informasi merupakan pendukung dan dapat menjadi tren positif yang dapat membantu proses donasi secara lebih masif dan fleksibel, salah satunya melalui crowdfunding. Usulan yang dapat dicermati sebagai solusi dari manajemen fundraising tersebut adalah perlunya sebuah platform yang dapat mendukung peluang agar perusahaan dapat berpartisipasi secara lebih menarik dan  dapat terus memantau serta mendapatkan report yang jelas. Untuk itu ESCOM dipandang sebagai alternatif yang tepat dan terhubung dengan teknologi internet aplikasi yang menjadi bagian penting dari masyarakat masa kini.  ESCOM dilakukan dengan bekerjasama perusahaan jaringan donatur yang beragam, dimana project dari suatu organisasi lingkungan hidup juga diketahui dan memiliki kesempatan untuk mendapatkan dukungan finansial. Selain itu platform ini dapat terhubung dengan sistem yang terintegrasi dengan database sponsorship perusahaan yang dapat membantu dalam relasi paska pendanaan dan ketentuan partisipasi/reward yang tentu saja menjadi penentu loyalitas donatur.</p><br><br>
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

		<!-- FOOTER -->
		<footer id="footer" class="section">
			<!-- container -->
			<div class="container">
				<!-- footer copyright & nav -->
				<div id="footer-bottom" class="row">
					<div class="col-md-6 col-md-push-6">
						
					</div>

					<div class="col-md-6 col-md-pull-6">
						<div class="footer-copyright">
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
