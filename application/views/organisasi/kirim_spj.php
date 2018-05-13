<?php

if ($this->session->userdata('status') != 'login organisasi') {
	redirect(base_url('login'));
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $this->session->userdata('nama'); ?> - Kirim SPJ</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/datepicker3.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/styles.css" />

	<link href="<?php echo base_url(); ?>assets/dist/summernote.css" rel="stylesheet">

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
				<li ><a href="<?php echo base_url('panel_organisasi/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="<?php echo base_url('panel_organisasi/dashboard/edit_profil'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Edit Profil</a></li>
				<li><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_terkirim'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Proposal Terkirim</a></li>
				<li class="active"><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_disetujui'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Kirim SPJ</a></li>
				<li><a href="<?php echo base_url('logout'); ?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
			</ul>
		</div>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Kirim SPJ</h1>
				</div>
			</div><!--/.row-->

			<form enctype="multipart/form-data" action="<?php echo base_url('panel_organisasi/dashboard/upload_spj')?>" method="POST">

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
					<div class="col-sm-10">
						<input type="hidden" name="id_proposal" value="<?php echo $data['id_proposal']; ?>">
						<input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $data['nama_perusahaan']; ?>" disabled>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Upload SPJ</label>
					<div class="col-sm-10">
						<input type="file" name="spj" value="" required="">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Kirim SPJ</button>
					</div>
				</div>
			</form>
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
	<script src="<?php echo base_url(); ?>assets/dist/summernote.js"></script>
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
	<script>
		$(document).ready(function() {
			$('#summernote').summernote({
				height: 300,
			});
		});
	</script>

</body>
</html>
