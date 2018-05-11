<?php

if ($this->session->userdata('status') != 'login perusahaan') {
	redirect(base_url('login'));
} else {
	if($this->input->post('is_submitted')){
		$isi = set_value('isi_balasan');
	} else{
		$id = $propos->id_proposal;
		$proposal = $propos->proposal;
		$tanggal = $propos->tanggal_pengajuan;
	}
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
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li class="active"><a href="<?php echo base_url('panel_perusahaan/dashboard/edit_profil'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Profil Perusahaan</a></li>
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
				<?php if($notif!=0) { ?>
					<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal &nbsp;<span class="label label-danger"><?php echo $notif; ?></span></a></li>
				<?php }else{ ?>
					<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal </a></li>
				<?php } ?>
				<li><a href="<?php echo base_url('logout'); ?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
			</ul>
		</div>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Balasan Proposal <?=str_replace('.pdf','',$proposal) ?></h1>
				</div>
			</div><!--/.row-->

			<?= form_open('panel_perusahaan/dashboard/balas_proposal/' .$id) ?>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Pengajuan</label>
				<div class="col-sm-10">
					<p><?=$tanggal ?></p>
				</div>
			</div>
			<div class="form-group row">
				<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-10">
					<textarea name="balasan" id="summernote" required=""></textarea>
					<!-- <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" value="<?=$deskripsi ?>" placeholder="Deskripsi" rows="3"><?=$deskripsi ?></textarea> -->
				</div>
			</div>
			<div class="form-group row">
					<div class="col-sm-10">
						<input type="hidden" name="is_submitted" value="1"/>
						<button type="submit" class="btn btn-primary">Balas</button>
					</div>
				</div>
				<?= form_close() ?>
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
		document.getElementById('sel').value = 'bike';
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
