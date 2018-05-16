<?php

if ($this->session->userdata('status') != 'login admin') {
	redirect(base_url('login'));
} else {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Dashboard</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/styles.css" />

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="#"><span>ESCOM</span></a>
					<a style="float: right; font-size: 15px;" class="navbar-brand" href="#"><span>Welcome <?php echo $this->session->userdata('nama'); ?></span></a>
					
					<!-- <ul class="nav navbar-top-links navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle count-info" href="<?php echo base_url('logout'); ?>">
								<p onMouseOver="this.style.color='#30a5ff'" onMouseOut="this.style.color='#FFF'" style="font-size: 15px; color: #FFF"><i class="fa fa-sign-out fa-fw"></i></p>
							</a>
						</li>
					</ul> -->
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<ul class="nav menu">
				<li class="active"><a href="<?php echo base_url('admin/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

				<?php foreach ($verif_notif as $key) {
					$role[] = $key['role'];
				} ?>

				<?php var_dump($role); ?>

				<?php if (!empty($verif_notif)) {

				foreach ($verif_notif as $key) {				
				if ($key['status'] == 'belum terverifikasi') { ?>

				<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-users">&nbsp;</em> Verifikasi Akun &nbsp;<span class="label label-danger"><?php echo '!'; ?></span><span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
					<!-- <?php if($role == ){ ?> -->
					<!-- kita belum lanjutin yang ini, gimana cara nya nyocokin array role dengan value nya -->
					<?php if($key['role'] == 'organisasi'){ ?>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_perusahaan'); ?>">
							<span class="fa fa-arrow-right">&nbsp;</span> Perusahaan
						</a></li>
						<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_organisasi'); ?>">
							<span class="fa fa-arrow-right">&nbsp;</span> Organisasi &nbsp;<span class="label label-danger"><?php echo '!'; ?></span>
						</a></li>
					</ul>
					<?php } else { ?>
					<ul class="children collapse" id="sub-item-1">
						<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_perusahaan'); ?>">
							<span class="fa fa-arrow-right">&nbsp;</span> Perusahaan
						</a></li>
						<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_organisasi'); ?>">
							<span class="fa fa-arrow-right">&nbsp;</span> Organisasi &nbsp;<span class="label label-danger"><?php echo '!'; ?></span>
						</a></li>
					</ul>
				<?php } ?>
				</li>
					
				<?php } } } else { ?>
					<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-users">&nbsp;</em> Verifikasi Akun<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
						<ul class="children collapse" id="sub-item-1">
							<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_perusahaan'); ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Perusahaan
							</a></li>
							<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_organisasi'); ?>">
								<span class="fa fa-arrow-right">&nbsp;</span> Organisasi
							</a></li>
						</ul>
					</li>
				<?php } ?>

			<?php if($jml!=0) { ?>
				<li><a href="<?php echo base_url('admin/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ &nbsp;<span class="label label-danger"><?php echo $jml; ?></span></a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('admin/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
			<?php } ?>

			<?php foreach ($notif_status as $notif) {

				$awal = $notif['jml_proposal_awal'];
				$ahir = $notif['jumlah_proposal'];
				$hasil[] = $ahir-$awal;

				// $stts[] = $status_notif_admin->status_notif_admin;

				// echo $status_notif_admin->status_notif_admin;

			} ?>

			<?php foreach ($status_notif_admin as $sts) {

				$stts[] = $sts['status_notif_admin'];

				// echo $sts['id_organisasi'];
				// echo $sts['status_notif_admin'];
				
			} ?>

			<?php
				$result = 0;
				for($i = 0; $i < count($hasil); $i++){
					if ($hasil[$i] > 0) {
						$result = 1;
					} 
				}

				$res = 0;
				for($i = 0; $i < count($stts); $i++){
					if ($stts[$i] == 'Disetujui' || $stts[$i] == 'Ditolak') {
						$res = 1;
					} 
				}

			?>

			<?php if($result != 0 || $res != 0) { ?>
				<li><a href="<?php echo base_url('admin/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal &nbsp;<span class="label label-danger"><?php echo '!'; ?></span></a></li>
			<?php }else{ ?>
				<li><a href="<?php echo base_url('admin/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal</a></li>
			<?php }  ?>
			<li><a href="<?php echo base_url('logout'); ?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
		</ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large"><?php echo $spj; ?></div>
							<div class="text-muted">SPJ Terverifikasi</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $per; ?></div>
							<div class="text-muted">Akun Perusahaan Terverifikasi</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $org; ?></div>
							<div class="text-muted">Akun Organisasi Terverifikasi</div>
						</div>
					</div>
				</div>
		<!-- 			<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
						<div class="panel panel-red panel-widget ">
							<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
								<div class="large">25.2k</div>
								<div class="text-muted">Page Views</div>
							</div>
						</div>
					</div> -->
				</div><!--/.row-->
			</div>
			<?php  ?>
		</div><!--/.row-->
	</div>	<!--/.main-->

	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
				responsive: true,
				scaleLineColor: "rgba(0,0,0,.2)",
				scaleGridLineColor: "rgba(0,0,0,.05)",
				scaleFontColor: "#c5c7cc"
			});
		};
	</script>

</body>
</html>
