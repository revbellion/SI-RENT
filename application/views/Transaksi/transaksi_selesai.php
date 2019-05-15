
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
				<div class="tile-title">Transaksi Selesai </div>
				<?php foreach ($transaksi as $t): ?>
					
				<form action="<?php echo base_url('admin/transaksi_selesai_act') ?>" method="POST">
					<input type="hidden" name="id" 			value="<?php echo $t['transaksi_id'] ?>">		
					<input type="hidden" name="mobil" 		value="<?php echo $t['transaksi_mobil'] ?>">		
					<input type="hidden" name="tgl_kembali" value="<?php echo $t['transaksi_tgl_kembali'] ?>">		
					<input type="hidden" name="denda" 		value="<?php echo $t['transaksi_denda'] ?>">
					<div class="tile-body">
						<div class="form-group">
							<label class="control-label font-weight-bold">Nama Pelanggan</label>
							<select name="kostumer" class="form-control" disabled>
								<?php foreach ($pelanggan as $p): ?>
									<option <?php echo $p['kostumer_id'] == $t['kostumer_id'] ? 'selected' : '' ?>><?php echo $p['kostumer_nama'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Mobil</label>
							<select name="mobil" class="form-control" disabled>
								<option value="">- Pilih Mobil -</option>
								<?php foreach ($mobil as $m): ?>
									<option <?php echo $m['mobil_id'] == $t['mobil_id'] ? 'selected' : '' ?>><?php echo $m['mobil_merk'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Tanggal Pinjam</label>
							<input disabled type="text" name="tgl_pinjam" class="form-control" value="<?php echo date('d F Y',strtotime($t['transaksi_tgl_pinjam'])) ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Tanggal Kembali</label>
							<input disabled type="text" name="tgl_kembali" class="form-control" value="<?php echo date('d F Y',strtotime($t['transaksi_tgl_kembali'])) ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Harga Rental</label>
							<input disabled type="text" name="harga" class="form-control" value="<?php echo 'Rp. '.number_format($t['transaksi_harga']) ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Denda Rental / Hari</label>
							<input disabled type="text" name="denda" class="form-control" value="<?php echo 'Rp. '.number_format($t['transaksi_denda']) ?>">
						</div>
						<div class="form-group">
							<label class="control-label font-weight-bold">Tanggal dikembalikan oleh pelanggan</label>
							<input type="date" name="tgl_dikembalikan" class="form-control" min="<?php echo date('Y-m-d') ?>">
						</div>
						 


					</div>
					<div class="tile-footer">
						<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
						<button type="reset" class="btn btn-secondary"><i class="fa fa-fw fa-lg fa-times"></i>Reset</button>
					</div>
				</form>
				<?php endforeach ?>
			</div>
		</div>