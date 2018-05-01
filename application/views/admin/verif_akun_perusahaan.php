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
							<a class="dropdown-toggle count-info" href="logout"> 
								<p onMouseOver="this.style.color='#30a5ff'" onMouseOut="this.style.color='#FFF'" style="font-size: 15px; color: #FFF"><i class="fa fa-sign-out fa-fw"></i></p>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
			<ul class="nav menu">
				<li><a href="<?php base_url(); ?>dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<!-- 				<li><a href="tambah_pekerja"><em class="fa fa-user-plus">&nbsp;</em> Tambah Pekerja</a></li> -->
				<li class="active"><a href="<?php base_url(); ?>verif_akun"><em class="fa fa-users">&nbsp;</em> Verifikasi Akun</a></li>
<!-- 				<li><a href="tambah_apd"><em class="fa fa-clone">&nbsp;</em> Tambah Jenis APD</a></li>
	<li><a href="list_apd"><em class="fa fa-database">&nbsp;</em> List Data APD</a></li> -->
	<li><a href="list_permintaan"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
<!-- 				<li><a href="list_pengadaan"><em class="fa fa-plus">&nbsp;</em> Pengadaan APD</a></li>
	<li><a href="ganti_password"><em class="fa fa-plus">&nbsp;</em> Ganti Password</a></li> -->
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
			<h1 class="page-header">Verifikasi Akun Perusahaan</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<table class="table-read" border="2">
				<tr>
					<th>Foto</th>
					<th>Nama Perusahaan</th>
					<th>Deskripsi</th>
					<th>Alamat Perusahaan</th>
					<th>Tahun Berdiri</th>
					<th>E-mail</th>
					<th>No Telepon</th>
					<th>Opsi</th>
				</tr>

				<?php
				foreach ($qry as $data) { ?>					

				<tr>
					<td class="td-read"></td>
					<td class="td-read"><?php echo $data["nama_perusahaan"]; ?></td>
					<td class="td-read"><?php echo $data["deskripsi"]; ?></td>
					<td class="td-read"><?php echo $data["alamat_perusahaan"]; ?></td>
					<td class="td-read"><?php echo $data["tahun_berdiri"]; ?></td>
					<td class="td-read"><?php echo $data["email"]; ?></td>
					<td class="td-read"><?php echo $data["no_tlp"]; ?></td>
					<td>

						<?php
						if ($data["status"] == "terverifikasi") { ?>
							<a href=""><button style="margin: 7px;" class="btn btn-sm btn-success">Verified</button></a>
						<?php } elseif ($data["status"] == "belum terverifikasi") { ?>
						<form method="POST" action="do_verif_perusahaan">
							<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
							<input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>">
							<a><button type="submit" style="margin: 7px;" class="btn btn-sm btn-primary">Verifikasi</button></a>
						</form>
						<form method="POST" action="lol">
							<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
							<input type="hidden" name="id_perusahaan" value="<?php echo $data['id_perusahaan']; ?>">
							<a><button type="submit" style="margin: 7px;" class="btn btn-sm btn-danger">Hapus</button></a>
						</form>		
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