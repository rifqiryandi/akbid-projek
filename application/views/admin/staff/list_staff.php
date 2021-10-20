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
					<a href="<?= base_url(); ?>admin/staff/create_staff" class="btn btn-success ">Add New(+)</a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Pendidikan</th>
								<th>Nip</th>
								<th>Jabatan</th>
								<th>Email</th>
								<th>Foto</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$allData = $this->session->all_data;
							$start = 0;
							foreach ($allData as $data) {
								$no = 1 + $start;
							?>

								<tr>
									<td><?= $no ?></td>
									<td><?= $data->nama ?></td>
									<td><?= $data->pendidikan_terakhir ?></td>
									<td><?= $data->nip_staff ?></td>
									<td><?= $data->jabatan ?></td>
									<td><?= $data->email ?></td>
									<td><img src="<?= base_url(); ?>upload/staff/<?= $data->foto ?>" class="rounded" width='70' height='90'></td>
									<td>
										<center>
											<?php if ($data->status == "aktif") { ?>
												<button class="btn btn-info" disabled>Aktif</button>
											<?php } elseif ($data->status == "non-aktif") { ?>
												<button class="btn btn-danger" disabled>Non-Aktif</button>
											<?php } ?>
										</center>
									</td>
									<td>
										<a href="<?= base_url(); ?>admin/staff/detail_staff?id=<?= $data->staff_id ?>" class="btn btn-info">Detail</a>
										<a href="#" class="btn btn-danger " onclick="return confirm('Ingin Menghapus?')">Hapus</a>
									</td>
								</tr>

							<?php $start = 1 + $start;
							} ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
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
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
</body>

</html>
