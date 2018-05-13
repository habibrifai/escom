<?php

if ($this->session->userdata('status') != 'login organisasi') {
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
	<title><?php echo $this->session->userdata('nama'); ?> - Kirim SPJ</title>

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
				<li><a href="<?php echo base_url('panel_organisasi/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="<?php echo base_url('panel_organisasi/dashboard/edit_profil'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Edit Profil</a></li>
				<li><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_terkirim'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Proposal Terkirim</a></li>
				<li class="active"><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_disetujui'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Kirim SPJ</a></li>
				<li><a href="<?php echo base_url('logout'); ?>"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
			</ul>
		</div>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Proposal yang Disetujui</li>
				</ol>
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">List Proposal</h1>
				</div>
			</div><!--/.row-->
	<?php /*if($cek==0){
			echo "<p>Belum pernah mengajukan proposal.</p>";
		} else { */?>
			<div class="container col-lg-12">
				<div class="list-group">
					<?php foreach($proposal as $qry){ ?>
						<div class="panel panel-primary">
							<div class="panel-heading"><strong><?php $searches = array('.pdf', '_'); $replacements = array('', ' '); echo str_replace($searches, $replacements,$qry->proposal)?> Untuk Perusahaan <?php echo $qry->nama_perusahaan?></strong></div>
								<?php if($qry->status_proposal == 'Disetujui' && $qry->status_spj == 'Cleared'){?>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/proposal/<?=$qry->proposal?>" class="list-group-item"><?php echo $qry->proposal?><span style="font-size:15px;" class="badge label label-success"><?php echo $qry->status_proposal?></span></a>
									</div>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/spj/<?=$qry->spj?>" class="list-group-item"><?php echo $qry->spj?><span style="font-size:15px;" class="badge label label-success">SPJ Terkirim</span></a><br>
									</div>
								<?php } elseif($qry->status_proposal == 'Disetujui' && $qry->status_spj == 'idle'){ ?>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/proposal/<?=$qry->proposal?>" class="list-group-item"><?php echo $qry->proposal?><span style="font-size:15px;" class="badge label label-success"><?php echo $qry->status_proposal?></span></a>
									</div>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/spj/<?=$qry->spj?>" class="list-group-item"><?php echo $qry->spj?><span style="font-size:15px;" class="badge label label-default">SPJ Dalam Koreksi</span></a><br>
									</div>
								<?php } elseif($qry->status_proposal == 'Disetujui' && $qry->status_spj == 'Revisi'){ ?>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/proposal/<?=$qry->proposal?>" class="list-group-item"><?php echo $qry->proposal?><span style="font-size:15px;" class="badge label label-success"><?php echo $qry->status_proposal?></span></a>
									</div>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/spj/<?=$qry->spj?>" class="list-group-item"><?php echo $qry->spj?><span style="font-size:15px;" class="badge label label-danger">SPJ Harus Direvisi</span></a><br>
									<?=anchor('panel_organisasi/dashboard/kirim_revisi_spj/'.$qry->id_spj.'/'.$qry->id_proposal.'/'.$qry->id_perusahaan,'Upload Revisi SPJ', ['class'=>'btn btn-primary btn-sm'])?>
									</div>
								<?php } elseif($qry->status_proposal == 'Disetujui'){ ?>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/proposal/<?=$qry->proposal?>" class="list-group-item"><?php echo $qry->proposal?><span style="font-size:15px;" class="badge label label-success"><?php echo $qry->status_proposal?></span></a>
									</div>
									<div class="panel-body"><span style="font-size:15px; float: right;" class="badge label label-default">Belum Upload SPJ</span><br>
									<?=anchor('panel_organisasi/dashboard/lihat_balasan/' . $qry->id_proposal,'Lihat Balasan', ['class'=>'btn btn-primary btn-sm'])?>
									</div>
								<?php } elseif ($qry->status_proposal == 'Ditolak'){ ?>
									<div class="panel-body"><a href="<?php echo base_url(); ?>assets/proposal/<?=$qry->proposal?>" class="list-group-item"><?php echo $qry->proposal?><span style="font-size:15px;" class="badge label label-danger"><?php echo $qry->status_proposal?></span></a></div>
								<?php } ?>
									</div>
					<?php } ?>
								</div>
							</div>
							<?php //} ?>
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
