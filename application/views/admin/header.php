<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AKBID | Administrator | <?= $s_user->nama ?></title>

	<?php $this->load->view('admin/head_asset'); ?>

	<style type="text/css">
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			/* display: none; <- Crashes Chrome on hover */
			-webkit-appearance: none;
			margin: 0;
			/* <-- Apparently some margin are still there even though it's hidden */
		}

		input[type=number] {
			-moz-appearance: textfield;
			/* Firefox */
		}
	</style>

</head>

<body class="hold-transition layout-fixed sidebar-mini text-sm">

	<div class="modal fade" id="modal-logout">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Konfirmasi Logout</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Anda yakin ingin keluar?</p>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url() ?>logout/dosen" class="btn btn-danger">Keluar</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>


	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand fixed-top navbar-dark navbar-dark">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
			</ul>


			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a href="#" class="nav-link" data-toggle="modal" data-target="#modal-logout">
						Logout
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url() ?>dosen/dashboard" class="brand-link">
				<img src="<?= base_url(); ?>assets/admlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Akbid | Admin</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<span style="font-size: 1rem; color: white;">
							<i class="fas fa-user-circle fa-2x"></i>
						</span>
					</div>
					<div class="info">
						<a href="<?= base_url() ?>dosen/profile/detail/<?= $s_user->username ?>">
							<span class="d-block" style="color: white;"><?= $s_user->nama ?></span>
						</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a id="dashboard" href="<?= base_url(); ?>admin/dashboard" class="nav-link">
								<i class="fas fa-tachometer-alt nav-icon"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<li id="datapegawai" class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									Data Pegawai
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a id="jadsem" href="<?= base_url(); ?>admin/dosen" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Data Dosen</p>
									</a>
								</li>
								<li class="nav-item">
									<a id="jadhis" href="<?= base_url(); ?>admin/staff" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Data Staff</p>
									</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>


		<div style="margin-top: 50px"></div>
