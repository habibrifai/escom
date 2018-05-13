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
	<title>Admin - Akun Organisasi</title>

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
				<li><a href="<?php echo base_url('admin/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li class="parent active"><a data-toggle="collapse" href="#sub-item-1">
					<em class="fa fa-users">&nbsp;</em> Verifikasi Akun <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_perusahaan'); ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Perusahaan
					</a></li>
					<li><a class="" href="<?php echo base_url('admin/verif_akun/verif_akun_organisasi'); ?>">
						<span class="fa fa-arrow-right">&nbsp;</span> Organisasi
					</a></li>
				</ul>
			</li>
			<li><a href="<?php echo base_url('admin/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
			<li><a href="<?php echo base_url('admin/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal</a></li>
			<li><a href="<?php echo base_url('logout'); ?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
		</ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Verifiksi Akun</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Akun Organisasi</h1>
			</div>
		</div><!--/.row-->

		<?php foreach($qry as $data){ ?>
			<div class="container col-lg-12">
				<div class="list-group">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<strong>
								<?php echo $data['nama_organisasi'] ?>
							</strong>
						</div>
						<div class="panel-body">
							<div style="text-align: center;">
								<img src="<?php echo base_url('assets/gambar/'.$data['foto']); ?>">
							</div>

							<?php echo 'Tahun Berdiri '.$data['tahun_berdiri']; ?><br><br>
							<?php echo 'Alamat '.$data['alamat_organisasi']; ?><br><br>
							<?php echo 'No Telepon '.$data['no_tlp']; ?><br><br>
							<?php echo $data['deskripsi']; ?>
						</div>
						<?php
						if ($data["status"] == "terverifikasi") { ?>
							<div style="text-align: center;">
								<a href=""><button style="margin: 7px; width: 90%;" class="btn btn-md btn-success">Verified</button></a>
							</div><br>
							<?php } elseif ($data["status"] == "belum terverifikasi") { ?>
								<form style="text-align: center;" class="col-md-6" method="POST" action="<?php echo base_url('admin/verif_akun/do_verif_organisasi') ?>">
									<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
									<input type="hidden" name="id_organisasi" value="<?php echo $data['id_organisasi']; ?>">
									<a><button type="submit" style="margin: 7px;" class="btn btn-sm btn-primary">Verifikasi</button></a>
								</form>
								<form style="text-align: center;" class="col-md-6" method="POST" action="lol">
									<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
									<input type="hidden" name="id_organisasi" value="<?php echo $data['id_organisasi']; ?>">
									<a><button type="submit" style="margin: 7px;" class="btn btn-sm btn-danger">Hapus</button></a>
								</form>	
								<?php } ?>
					</div><br>
				</div>
			</div>
		<?php } ?>

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