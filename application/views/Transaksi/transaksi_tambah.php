
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-fw fa-sort"></i> Data Transaksi</h1>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-fw fa-car"></i>  </li>
			<li class="breadcrumb-item"> Data Transaksi</li>
		</ul>
	</div>

	<div class="row">
		<div class="col-lg-6 ">
			<div class="tile">
				<a href="<?php echo base_url('admin/transaksi') ?>" class="mb-3 btn btn-sm btn-warning float-right"><i class="fa fa-fw fa-rotate-left"></i>Kembali</a>
				<div class="tile-title">Transaksi Baru </div>
				<form action="<?php echo base_url('admin/transaksi_tambah') ?>" method="POST">
					<div class="tile-body">
						<div class="form-group">
							<label class="control-label font-weight-bold">Nama Pelanggan</label>
							<select name="kostumer" class="form-control">
								<option value="">- Pilih Pelanggan -</option>
								<?php foreach ($pelanggan as $p): ?>
									<option value="<?php echo $p['kostumer_id'] ?>"><?php echo $p['kostumer_nama'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Mobil</label>
							<select name="mobil" class="form-control">
								<option value="">- Pilih Mobil -</option>
								<?php foreach ($mobil as $m): ?>
									<option value="<?php echo $m['mobil_id'] ?>"><?php echo $m['mobil_merk'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Tanggal Pinjam</label>
							<input type="date" name="tgl_pinjam" class="form-control" min="<?php echo date('Y-m-d') ?>" value="<?php echo date('Y-m-d') ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Tanggal Kembali</label>
							<input type="date" name="tgl_kembali" class="form-control" min="<?php echo date('Y-m-d') ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Harga Rental</label>
							<input type="number" name="harga" class="form-control" placeholder="Rp.">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Denda Rental / Hari</label>
							<input type="number" name="denda" class="form-control" placeholder="Rp.">
						</div>
						 


					</div>
					<div class="tile-footer">
						<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
						<button type="reset" class="btn btn-secondary"><i class="fa fa-fw fa-lg fa-times"></i>Reset</button>
					</div>
				</form>
			</div>
		</div>