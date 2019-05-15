
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-fw fa-users"></i> Data Pelanggan</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Data Pelanggan</a></li>
    </ul>
  </div>

  <div class="row">
    <div class="col-lg">
      <div class="tile">

       <div class="table-responsive">
        <table id="table" class="table table-bordered table-hover" width="120%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Pelanggan</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>No. Telp</th>
              <th>No. KTP</th>
              <th><a class="btn btn-sm btn-block btn-dark" href="<?php echo base_url('admin/pelanggan_tambah') ?>"><i class="fa fa-fw fa-plus"></i> Tambah</a></th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach ($pelanggan as $p): ?>

            <tr >
              <td><?php echo $no++ ?></td>
              <td><?php echo $p['kostumer_nama'] ?></td>
              <td><?php echo $p['kostumer_alamat'] ?></td>
              <td><?php echo $p['kostumer_jk'] == 'L' ? '<i class="fa fa-fw fa-mars"></i> Laki-laki' : '<i class="fa fa-fw fa-venus"></i> Perempuan' ?></td>
              <td><?php echo '+62'.substr($p['kostumer_hp'] , 1); ?></td>
              <td><?php echo $p['kostumer_ktp']?> </td>
              <td align="center">
                <div class="btn-group">
                  <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/pelanggan_ubah/').$p['kostumer_id'] ?>"><i class="fa fa-fw fa-edit"></i> Ubah</a>
                  <a onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/pelanggan_hapus/').$p['kostumer_id'] ?>"><i class="fa fa-fw fa-trash"></i> Hapus</a>  
                </div>

              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table> 
    </div>
  </div>
</div>