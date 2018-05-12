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
	<title>Admin - List Proposal</title>

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
			<li><a href="<?php echo base_url('admin/dashboard/list_spj'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List SPJ</a></li>
			<li class="active"><a href="<?php echo base_url('admin/dashboard/list_proposal'); ?>"><em class="fa fa-envelope-open">&nbsp;</em> List Proposal</a></li>
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

		<?php $lol = 0; ?>

		<?php foreach ($status_notif_admin as $sts) {

			$stts[] = $sts['status_notif_admin'];
			$s[] = $sts['id_organisasi'];

			// echo $sts['status_notif_admin'];

			if ($sts['status_notif_admin'] == 'Disetujui' || $sts['status_notif_admin'] == 'Ditolak') {
				// echo $stts[$i];
				// echo 'disetujui/ditolak';
				$lol = 1;
			}

			
		} ?> 

		<!-- <?php echo $lol; ?> -->

		<!-- <?php $h = count($stts); ?> -->

		<!-- <?php echo $stts[0]; ?>
		<?php echo $stts[1]; ?>
		<?php echo $stts[2]; ?>  -->
		

		



		<?php foreach($profil as $qry){

			$awal = $qry['jml_proposal_awal'];
			$ahir = $qry['jumlah_proposal'];
			$hasil = $ahir - $awal;

			// echo $sts['status_notif_admin'];

			?>

			<div class="col-md-4 col-sm-4">
			<div class="list-group">
				<div class="panel panel-info">
					<div style="text-align:center;" class="panel-heading"><?php echo $qry['nama_organisasi']?></div>
					<div style="font-size:15px; "class="panel-body"><img style="display:block;margin-left:auto;margin-right:auto;width:150px;height:150px;" src="<?php echo base_url().'assets/gambar/'.$qry['foto']?>" alt="logo"></div>
					<div class="panel-footer" style="display: block;">
						<?php $sama = 0; ?>

						<?php for ($i=0; $i < $h; $i++) {
								if ($s[$i] == $qry['id_organisasi']) {
									$sama = 1;
								}
						} ?>

							<!-- <?php var_dump($sts); ?> -->
							

							<?php if($sama = 1) {?>

								<!-- <?php echo $qry['id_organisasi']; ?>
								<?php echo $s[$y]; ?> -->
								

								<?php if($hasil > 0 || $lol == 1){ ?>
									<span style="float: right;" class="label label-danger"><?php echo $hasil; ?></span>
									<?=anchor('admin/dashboard/list_proposal_organisasi/' . $qry['id_organisasi'],'Jumlah Proposal Dikirim : '.$qry['jumlah_proposal'], ['class'=>'btn btn-primary btn-sm', 'style'=>'display:block;margin-left:auto;margin-right:auto;'])?>
								<?php } else { ?>
									<?=anchor('admin/dashboard/list_proposal_organisasi/' . $qry['id_organisasi'],'Jumlah Proposal Dikirim : '.$qry['jumlah_proposal'], ['class'=>'btn btn-primary btn-sm', 'style'=>'display:block;margin-left:auto;margin-right:auto;'])?>
								<?php } ?>
							<?php } else { ?>
								<?=anchor('admin/dashboard/list_proposal_organisasi/' . $qry['id_organisasi'],'Jumlah Proposal Dikirim : '.$qry['jumlah_proposal'], ['class'=>'btn btn-primary btn-sm', 'style'=>'display:block;margin-left:auto;margin-right:auto;'])?>
							<?php } ?>
								
					</div>
				</div>
			</div>
		</div>
		
		<?php } ?>

	</div>

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
