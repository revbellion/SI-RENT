
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-car"></i> Data Mobil</h1>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-fw fa-car"></i>  </li>
			<li class="breadcrumb-item"> Data Mobil</li>
		</ul>
	</div>

	<div class="row">
		<div class="col-lg-6 ">
			<div class="tile">
				<a href="<?php echo base_url('admin/mobil_ubah') ?>" class="mb-3 btn btn-sm btn-warning float-right"><i class="fa fa-fw fa-rotate-left"></i>Kembali</a>
				<div class="tile-title">Form Ubah </div>
				<form action="<?php echo base_url('admin/mobil_ubah') ?>" method="POST">
					<div class="tile-body">
						<div class="form-group">
							<label class="control-label font-weight-bold">Merk Mobil</label>
							<input name="merk" class="form-control" type="text" value="<?php echo $mobil['mobil_merk'] ?>">
							<input name="id" class="form-control" type="hidden" value="<?php echo $mobil['mobil_id'] ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">No. Polisi</label>
							<input name="plat" class="form-control" type="text" value="<?php echo $mobil['mobil_plat'] ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Warna</label>
							<input name="warna" class="form-control" type="text" value="<?php echo $mobil['mobil_warna'] ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Tahun Pembuatan</label>
							<select name="tahun" class="form-control" >
								<option value="">- Pilih Tahun -</option>
								<?php for ($tahun= date('Y'); $tahun > 2000; $tahun--) { ?>
								<option <?php echo $mobil['mobil_tahun'] == $tahun ? 'selected' : ''  ?> value="<?php echo $tahun ?>"><?php echo $tahun ?></option>
								<?php } ?>
							</select>
						</div>


					</div>
					<div class="tile-footer">
						<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
						<button type="reset" class="btn btn-secondary"><i class="fa fa-fw fa-lg fa-times"></i>Reset</button>
					</div>
				</form>
			</div>
		</div>