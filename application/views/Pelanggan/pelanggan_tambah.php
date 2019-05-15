
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-car"></i> Data Pelanggan</h1>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-fw fa-car"></i>  </li>
			<li class="breadcrumb-item"> Data Pelanggan</li>
		</ul>
	</div>

	<div class="row">
		<div class="col-lg-6 ">
			<div class="tile">
				<a href="<?php echo base_url('admin/pelanggan') ?>" class="mb-3 btn btn-sm btn-warning float-right"><i class="fa fa-fw fa-rotate-left"></i>Kembali</a>
				<div class="tile-title">Form Tambah </div>
				<form action="<?php echo base_url('admin/pelanggan_tambah') ?>" method="POST">
					<div class="tile-body">
						<div class="form-group">
							<label class="control-label font-weight-bold">Nama Pelanggan</label>
							<input name="nama" class="form-control" type="text">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Alamat</label>
							<textarea name="alamat" class="form-control" ></textarea>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Jenis Kelamin</label>
							<select name="jk" class="form-control" >
								<option value="">- Pilih Jenis Kelamin -</option>
								 
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">No. Telp</label>
							 <input type="number" name="hp" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">No. KTP</label>
							 <input type="number" name="ktp" class="form-control">
						</div>


					</div>
					<div class="tile-footer">
						<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
						<button type="reset" class="btn btn-secondary"><i class="fa fa-fw fa-lg fa-times"></i>Reset</button>
					</div>
				</form>
			</div>
		</div>