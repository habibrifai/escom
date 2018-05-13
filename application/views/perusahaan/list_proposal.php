<?php

if ($this->session->userdata('status') != 'login perusahaan') {
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
	<title><?php echo $this->session->userdata('nama'); ?> - List Proposal</title>

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
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard/edit_profil'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Profil Perusahaan</a></li>
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
				<li class="active"><a href="<?php echo base_url('panel_perusahaan/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal</a></li>
				<li><a href="<?php echo base_url('logout'); ?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
			</ul>
		</div>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">List Proposal</li>
				</ol>
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">List Proposal</h1>
				</div>
			</div><!--/.row-->
			
				<div class="row">
					<div class="col-lg-12">
						<table class="table-read" border="2">
							<tr>
								<th>Nama Organisasi</th>
								<th>Tanggal Pengajuan</th>
								<th>Proposal</th>
								<th>Opsi</th>
							</tr>
							<?php
							foreach ($proposal as $qry) { ?>
								<tr>
									<td class="td-read"><!--<img height="140px" width="200px" src="<?php echo base_url('assets/gambar/').$data['foto']; ?>">--><a href=#><?php echo $qry->nama_organisasi; ?></a></td>
									<td class="td-read"><?php echo $qry->tanggal_pengajuan; ?></td>
									<td class="td-read"><a href="<?php echo base_url('assets/proposal/'.$qry->proposal); ?>"><?php echo $qry->proposal; ?></a></td>
									<td>

										<?php if($qry->status_proposal == 'belum disetujui') { ?>

										<div style="margin: 15px;">
											<?=anchor('panel_perusahaan/dashboard/balas_proposal/' . $qry->id_proposal,'Balas', ['class'=>'btn btn-primary btn-sm'])?>
											<?=anchor('panel_perusahaan/dashboard/tolak_proposal/' . $qry->id_proposal,'Tolak',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah Anda yakin ingin menolak proposal?\')'])?>
										</div>
										<?php } elseif($qry->status_proposal == 'Disetujui') { ?>
										<div style="margin: 15px;">
											<button class="btn btn-success btn-sm">Sudah Disetujui</button>
										</div>
										<?php } elseif($qry->status_proposal == 'Ditolak') { ?>
										<div style="margin: 15px;">
											<button class="btn btn-danger btn-sm">Sudah Ditolak</button>
										</div>
										<?php } ?>
									</td>
								</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				
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
