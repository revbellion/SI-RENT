
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
				<a href="<?php echo base_url('admin/mobil') ?>" class="mb-3 btn btn-sm btn-warning float-right"><i class="fa fa-fw fa-rotate-left"></i>Kembali</a>
				<div class="tile-title">Form Ubah </div>
				<form action="<?php echo base_url('admin/pelanggan_ubah') ?>" method="POST">
					<div class="tile-body">
						<div class="form-group">
							<label class="control-label font-weight-bold">Nama Pelanggan</label>
							<input type="hidden" name="id" value="<?php echo $pelanggan['kostumer_id'] ?>">
							<input name="nama" class="form-control" type="text" value="<?php echo $pelanggan['kostumer_nama'] ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Alamat</label>
							<textarea name="alamat" class="form-control" ><?php echo $pelanggan['kostumer_alamat'] ?></textarea>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Jenis Kelamin</label>
							<select name="jk" class="form-control" >
								<option value="">- Pilih Jenis Kelamin -</option>
								 
								<option value="L" <?php echo $pelanggan['kostumer_jk'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
								<option value="P" <?php echo $pelanggan['kostumer_jk'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">No. Telp</label>
							 <input type="number" value="<?php echo $pelanggan['kostumer_hp'] ?>" name="hp" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">No. KTP</label>
							 <input type="number" value="<?php echo $pelanggan['kostumer_ktp'] ?>" name="ktp" class="form-control">
						</div>


					</div>
					<div class="tile-footer">
						<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
						<button type="reset" class="btn btn-secondary"><i class="fa fa-fw fa-lg fa-times"></i>Reset</button>
					</div>
				</form>
			</div>
		</div>