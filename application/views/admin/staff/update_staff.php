<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Staff</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Staff</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card">

				<div class="card-header">
					<h3 class="card-title">Edit Data Staff</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<form class="form-horizontal" method="POST" action="<?= base_url(); ?>admin/staff/edit_staff" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama Staff :</label>
								<div class="col-sm-6">
									<input class="form-control" id="nofak" type="hidden" value="<?= $data[0]->staff_id ?>" name="staff_id" required>
									<input class="form-control" id="nofak" type="text" value="<?= $data[0]->nama ?>" name="nama_staff" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Pendidikan Terakhir :</label>
								<div class="col-sm-6">
									<input class="form-control" id="kodsu" type="text" value="<?= $data[0]->pendidikan_terakhir ?>" name="pendidikan_terakhir" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nip Staff :</label>
								<div class="col-sm-6">
									<input class="form-control" type="number" value="<?= $data[0]->nip_staff ?>" name="nip_staff" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Jabatan :</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" value="<?= $data[0]->jabatan ?>" name="jabatan" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Email :</label>
								<div class="col-sm-6">
									<input class="form-control" type="email" value="<?= $data[0]->email ?>" name="email" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nomor Telepon :</label>
								<div class="col-sm-6">
									<input class="form-control" type="number" value="<?= $data[0]->nomor_telp ?>" name="nomor_telp" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Foto :</label>
								<div class="col-sm-6">
									<!-- old foto -->
									<input class="form-control" type="hidden" value="<?= $data[0]->foto ?>" name="old_foto" required>
									<input class="form-control-sm" type="file" name="foto" id="formFile">
									<?php if (isset($data[0]->foto)) { ?>
										<img src="<?= base_url(); ?>upload/staff/<?= $data[0]->foto ?>" width='70' height='90'>
									<?php } ?>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 ">Status :</label>
								<div class="col-sm-6">
									<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status">
										<?php if ($data[0]->status == "aktif") { ?>
											<option value="aktif" selected>Aktif</option>
											<option value="non-aktif">Non-Aktif</option>
										<?php } else { ?>
											<option value="aktif">Aktif</option>
											<option value="non-aktif" selected>Non-Aktif</option>
										<?php } ?>
									</select>
								</div>
							</div>

						</div>
				</div>
				<!-- /.card-body -->
				<!-- card-footer -->
				<div class="card-footer">
					<button type="submit" class="btn btn-success" onclick="return confirm('Simpan Perubahan?')">Save</button>
					<a href="<?= base_url(); ?>admin/staff" class="btn btn-danger " onclick="return confirm('Ingin Kembali?')">Back</a>
				</div>
				</form>
			</div>

			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('admin/foot_asset'); ?>
<script type="text/javascript">
</script>
</body>

</html>
