
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-fw fa-car"></i> Data Mobil</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Data Mobil</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-lg">
          <div class="tile">

          	<table id="table" class="table table-bordered table-hover">
          	<thead>
          		<tr>
          			<th>No.</th>
          			<th>Merk Mobil</th>
          			<th>No. Polisi</th>
          			<th>Warna</th>
          			<th>Tahun Pembuatan</th>
          			<th>Status</th>
          			<th><a class="btn btn-sm btn-block btn-dark" href="<?php echo base_url('admin/mobil_tambah') ?>"><i class="fa fa-fw fa-plus"></i> Tambah</a></th>
          		</tr>
          	</thead>
          	<tbody>
          		<?php $no = 1; foreach ($mobil as $m): ?>
          			
          		<tr >
          			<td><?php echo $no++ ?></td>
          			<td><?php echo $m['mobil_merk'] ?></td>
          			<td><?php echo $m['mobil_plat'] ?></td>
          			<td><?php echo $m['mobil_warna'] ?></td>
          			<td><?php echo $m['mobil_tahun'] ?></td>
          			<td><?php echo $m['mobil_status'] == 1 ? '<span class="badge badge-success">Tersedia</span>' : '<span class="badge badge-danger">Dirental</span>' ?> </td>
          			<td align="center">
          				<div class="btn-group">
          				<a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/mobil_ubah/').$m['mobil_id'] ?>"><i class="fa fa-fw fa-edit"></i> Ubah</a>
          				<a onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/mobil_hapus/').$m['mobil_id'] ?>"><i class="fa fa-fw fa-trash"></i> Hapus</a>	
          				</div>
          				
          			</td>
          		</tr>
          		<?php endforeach ?>
          	</tbody>
          </table>
          </div>
      </div>