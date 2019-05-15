
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-fw fa-sort"></i> Data Transaksi</h1>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>
		</ul>
	</div>

	<div class="row">
		<div class="col-lg">
			<div class="tile">
				<a href="<?php echo base_url('admin/transaksi_tambah') ?>" class="btn btn-sm btn-dark mb-3"><i class="fa fa-fw fa-plus"></i>Tambah</a>
				<div class="table-responsive">
					<table id="table" class="table table-bordered table-hover" width="170%">
						<thead>
							<tr>
								<th >No.</th>
								<th >Tanggal Input</th>
								<th >Pelanggan</th>
								<th >Mobil</th>
								<th >Tanggal Pinjam</th>
								<th >Tanggal Kembali</th>
								<th >Harga Rental</th>
								<th >Denda/Hari</th>
								<th >Tanggal di kembalikan</th>
								<th >Total Denda</th>
								<th >Status</th>
								<th >Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach ($transaksi as $t): ?>

							<tr>
								<td ><?php echo $no++; ?></td>
								<td  ><?php echo date('d F Y',strtotime($t['transaksi_tgl'])); ?></td>
								<td><?php echo $t['kostumer_nama']; ?></td>
								<td><?php echo $t['mobil_merk']; ?></td>
								<td><?php echo date('d F Y',strtotime($t['transaksi_tgl_pinjam'])); ?></td>
								<td><?php echo date('d F Y',strtotime($t['transaksi_tgl_kembali'])); ?></td>				
								<td><?php echo "Rp. ".number_format($t['transaksi_harga']); ?></td>
								<td><?php echo "Rp. ".number_format($t['transaksi_denda']); ?></td>
								<td>
									<?php 
									if($t['transaksi_tgldikembalikan'] =="0000-00-00"){
										echo "-";
									}else{
										echo date('d F Y',strtotime($t['transaksi_tgldikembalikan'])); 						
									}
									?>
								</td>				
								<td><?php echo "Rp. ". number_format($t['transaksi_totaldenda'])." ,-"; ?></td>
								<td><?php echo $t['transaksi_status'] == 1 ? "<span class='badge badge-success'><i class='fa fa-fw fa-check'></i> Selesai</span>" : "-" ?>					
							</td>
							<td> 		
								<?php 
								if($t['transaksi_status'] == "1"){
									echo "-";
								}else{
									?>
									<div class="btn-group">
										<a class="btn btn-sm btn-primary" href="<?php echo base_url().'admin/transaksi_selesai/'.$t['transaksi_id']; ?>"><i class="fa fa-fw fa-check"></i>Transaksi Selesai</a>
									<a onclick="return confirm('Apakah anda yakin ?')" class="btn btn-sm btn-danger" href="<?php echo base_url().'admin/transaksi_hapus/'.$t['transaksi_id']; ?>"><i class="fa fa-fw fa-times"></i>Batalkan Transaksi</a>
									</div>
									<?php
								}
								?>			
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>