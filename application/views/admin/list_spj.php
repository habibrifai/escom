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
	<title>Admin - Verifikasi Akun</title>

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
					<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
							</a>
							<ul class="dropdown-menu dropdown-messages">
								<li>
									<div class="dropdown-messages-box">
										<a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">3 mins ago</small>
											<a href="#">
												<strong>John Doe</strong> commented on <strong>your photo</strong>.
											</a>
											<br /><small class="text-muted">1:24 pm - 25/03/2015</small>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="dropdown-messages-box">
										<a href="profile.html" class="pull-left">
											<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
										</a>
										<div class="message-body"><small class="pull-right">1 hour ago</small>
											<a href="#">New message from <strong>Jane Doe</strong>.
											</a>
											<br /><small class="text-muted">12:27 pm - 25/03/2015</small>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="all-button">
										<a href="#">
											<em class="fa fa-inbox"></em> <strong>All Messages</strong>
										</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
								<em class="fa fa-bell"></em><span class="label label-info">5</span>
							</a>
							<ul class="dropdown-menu dropdown-alerts">
								<li>
									<a href="#">
										<div>
											<em class="fa fa-envelope"></em> 1 New Message
											<span class="pull-right text-muted small">3 mins ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<div>
											<em class="fa fa-heart"></em> 12 New Likes
											<span class="pull-right text-muted small">4 mins ago</span>
										</div>
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="#">
										<div>
											<em class="fa fa-user"></em> 5 New Followers
											<span class="pull-right text-muted small">4 mins ago</span>
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle count-info" href="<?php echo base_url('logout'); ?>">
								<p onMouseOver="this.style.color='#30a5ff'" onMouseOut="this.style.color='#FFF'" style="font-size: 15px; color: #FFF"><i class="fa fa-sign-out fa-fw"></i></p>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<ul class="nav menu">
				<li><a href="<?php echo base_url('admin/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
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
			<li class="active"><a href="<?php echo base_url('admin/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
			<li><a href="<?php echo base_url('admin/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal</a></li>
		</ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">List SPJ</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List SPJ</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<table class="table-read" border="2">
					<tr>
						<th>Nama Organisasi</th>
						<th>Nama Perusahaan</th>
						<th>SPJ</th>
						<th>Opsi</th>
					</tr>
					
					
					<tr>
						<td class="td-read"><?php echo $spj[2][0]['nama_organisasi']; ?></td>
						<td class="td-read"><?php echo $spj[1][0]['nama_perusahaan']; ?></td>
						<td class="td-read"><a href="<?php echo base_url('assets/spj/'.$spj[0]->spj); ?>"><?php echo $spj[0]->spj; ?></a></td>
						<td>
							<div style="margin: 10px;">

								<?=anchor('panel_perusahaan/dashboard/','Teruskan ke Perusahaan', ['class'=>'btn btn-primary btn-sm'])?>
								<?=anchor('panel_perusahaan/dashboard/','Revisi',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah Anda yakin ingin menolak proposal?\')'])?>
							</div>

							<!-- <?=anchor('panel_perusahaan/dashboard/balas_proposal/' . $qry->id_proposal,'Balas', ['class'=>'btn btn-primary btn-sm'])?>
							<?=anchor('panel_perusahaan/dashboard/tolak_proposal/' . $qry->id_proposal,'Tolak',['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah Anda yakin ingin menolak proposal?\')'])?> -->
						</td>
					</tr>
					
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
