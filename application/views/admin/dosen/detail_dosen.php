  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">Data Dosen</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="#">Home</a></li>
  						<li class="breadcrumb-item active">Dashboard</li>
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
  					<h3 class="card-title">Detail Data Dosen</h3>
  				</div>
  				<!-- /.card-header -->
  				<div class="card-body">
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Nama Dosen :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->nama ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Nidn Dosen :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->nidn_dosen ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Nip Dosen :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->nip_dosen ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Prodi :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->prodi ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Email :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->email ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Jabatan Struktural :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->jabatan_struktural ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Nomor telepon :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="font-size: 19px;"><?= $data[0]->nomor_telp ?></label>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Foto :</label>
  						<div class="col-sm">
  							<img src="<?= base_url(); ?>upload/dosen/<?= $data[0]->foto ?>" class="rounded" width='354' height='472'>
  						</div>
  					</div>
  					<div class="form-group row">
  						<label class="col-sm-2 col-form-label" style="font-size: 19px;">Status :</label>
  						<div class="col-sm">
  							<label class="col-form-label" style="text-transform: uppercase; font-size: 19px;"><?= $data[0]->status ?></label>
  						</div>
  					</div>
  				</div>
  				<!-- /.card-body -->
  				<!-- card-footer -->
  				<div class="card-footer">
  					<a href="<?= base_url(); ?>admin/dosen/update_dosen?id=<?= $data[0]->dosen_id ?>" class="btn btn-success">Edit</a>
  					<a href="<?= base_url(); ?>admin/dosen" class="btn btn-danger " onclick="return confirm('Ingin Kembali?')">Back</a>

  				</div>
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
