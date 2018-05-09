<?php

if ($this->session->userdata('status') != 'login organisasi') {
	redirect(base_url('login'));
} else {
	if($this->input->post('is_submitted')){
		$nama = set_value('nama');
		$tahun = set_value('tahun');
		$alamat = set_value('alamat');
		$deskripsi = set_value('deskripsi');
		$notelp = set_value('notelp');
		$kategori = set_value('kategori');
		$foto = set_value('foto');

	} else{
		$nama = $profil->nama_perusahaan;
		$tahun = $profil->tahun_berdiri;
		$alamat = $profil->alamat_perusahaan;
		$deskripsi = $profil->deskripsi;
		$notelp = $profil->no_tlp;
		$kategori = $profil->kategori;
		$foto = $profil->foto;
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
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li class="active"><a href="<?php echo base_url('panel_perusahaan/dashboard/edit_profil'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Profil Perusahaan</a></li>
				<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
				<?php if($notif!=0) { ?>
					<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal &nbsp;<span class="label label-danger"><?php echo $notif; ?></span></a></li>
				<?php }else{ ?>
					<li><a href="<?php echo base_url('panel_perusahaan/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal </a></li>
				<?php } ?>
			</ul>
		</div>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Edit Profile</h1>
				</div>
			</div><!--/.row-->

			<?= form_open('panel_perusahaan/dashboard/edit_profil') ?>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputEmail3" name="nama" value="<?=$nama ?>" placeholder="Nama Perusahaan">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Tahun Berdiri</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputPassword3" name="tahun" value="<?=$tahun ?>" placeholder="Tahun Berdiri">
				</div>
			</div>
			<div class="form-group row">
				<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" value="<?=$alamat ?>" placeholder="Deskripsi" rows="3"><?=$alamat ?></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi</label>
				<div class="col-sm-10">
					<textarea name="deskripsi" id="summernote"><?=$deskripsi ?></textarea>
					<!-- <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" value="<?=$deskripsi ?>" placeholder="Deskripsi" rows="3"><?=$deskripsi ?></textarea> -->
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">Nomor Telepon</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="inputPassword3" name="notelp" value="<?=$notelp ?>" placeholder="Nomor Telepon">
				</div>
			</div>
			<fieldset class="form-group">
				<div class="row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Perusahaan</label>
					<div class="col-sm-10">
						<div class="form-check">
							<?php if($kategori != null) echo "<p> Saat Ini : $kategori </p>";
							else echo "<p style=color:red> Saat Ini : Belum Memilih Kategori </p>";
								?>
								<label class="form-check-label">
								</label>
							</div>
						</div>
					</div>
				</fieldset>
				<div class="form-group row">
					<label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Ubah Kategori</label>
					<div class="col-sm-10">
						<select class="form-check-input" name="kategori" value="<?=$kategori ?>">
							<option value="Pendidikan">Pendidikan</option>
							<option value="Sosial">Sosial</option>
							<option value="Kesenian">Kesenian</option>
							<option value="Olahraga">Olahraga</option>
							<option value="Kesehatan">Kesehatan</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<input type="hidden" name="is_submitted" value="1"/>
						<button type="submit" class="btn btn-primary">Update</button>
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
