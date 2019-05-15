
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-car fa-3x"></i>
            <div class="info">
              <h5>MOBIL</h5>
              <p><b><?php echo $mobil ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h5>CUSTOMERS</h5>
              <p><b><?php echo $pelanggan ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-recycle fa-3x"></i>
            <div class="info">
              <h5>ON PROCESS</h5>
              <p><b><?php echo $transaksi ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-check-square fa-3x"></i>
            <div class="info">
              <h5>TRANSAKSI SELESAI</h5>
              <p><b><?php echo $transaksi_selesai ?></b></p>
            </div>
          </div>
        </div>
      </div>