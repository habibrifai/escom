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
				<li class="active"><a href="<?php echo base_url('panel_organisasi/dashboard'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
				<li><a href="<?php echo base_url('panel_organisasi/dashboard/edit_profil'); ?>"><em class="fa fa-dashboard">&nbsp;</em> Edit Profil</a></li>
				<?php if($notif_status == 1){ ?>
					<li><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_terkirim'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Proposal Terkirim &nbsp;<span class="label label-danger"><?php echo $notif_status; ?></span></a></li>
				<?php } else { ?>
					<li><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_terkirim'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Proposal Terkirim</a></li>
				<?php } ?>
				<?php if($notif_spj == 1){ ?>
					<li><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_disetujui'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Kirim SPJ &nbsp;<span class="label label-danger"><?php echo $notif_spj; ?></span></a></li>
				<?php } elseif($notif_spj == 0) { ?>
					<li><a href="<?php echo base_url('panel_organisasi/dashboard/proposal_disetujui'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> Kirim SPJ</a></li>
				<?php } ?>
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
					<p>Filter Kategori : </p>
					<label class="form-check-label">
						<select class="form-check-input" name="kategori" onchange="javascript:handleSelect(this)">
							<option></option>
							<option value="pendidikan">Pendidikan</option>
							<option value="kesenian">Kesenian</option>
							<option value="olahraga">Olahraga</option>
							<option value="sosial">Sosial</option>
							<option value="kesehatan">Kesehatan</option>
						</select>
					</label>
				</div>
			</div><br>

			<script type="text/javascript">
				function handleSelect(elm)
				{
					window.location = "<?php echo base_url('panel_organisasi/dashboard/get/')?>" + elm.value ;
				}
			</script>

			<?php foreach ($qry as $data) { ?>
				<div class="panel panel-container">
					<div class="row">
						<a href="<?php echo base_url('perusahaan/show_perusahaan/').$data['id_user']; ?>">
							<div style="text-align: justify; text-justify: inter-word;" class="col-lg-12">
								<table class="table-read" border="0">
									<tr>
										<td style="width: 300px;" class="td-read"><img style="margin-left: 10px;" height="140px" width="200px" src="<?php echo base_url('assets/gambar/').$data['foto']; ?>"></td>
										<td style="width: 300px;" class="td-read"><?php echo $data['nama_perusahaan'] ?></td>
										<td style="width: 300px;" class="td-read">Kategori <?php echo $data['kategori'] ?></td>
										<td class="td-read"><a href="<?php echo base_url('panel_organisasi/dashboard/kirim_proposal/').$data['id_perusahaan'].'/'.$this->session->userdata('nama'); ?>"><button type="submit" style="margin: 7px;" class="btn btn-sm btn-primary">Ajukan Proposal</button></a></td>
									</tr>

								</table>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div><!--/.row-->

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
