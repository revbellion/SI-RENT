
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><small><?php echo $this->session->userdata('name'); ?></small></p>
          <p class="app-sidebar__user-designation"><small><i class="fa fa-fw fa-circle text-success"></i> Online</small></p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
          <a class="app-menu__item <?php echo $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'active' : '' ?>" href="<?php echo base_url('admin') ?>">
            <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
         <li>
          <a class="app-menu__item <?php echo $this->uri->segment(2) == 'mobil' ? 'active' : '' ?>" href="<?php echo base_url('admin/mobil') ?>">
            <i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Data Mobil</span></a>
        </li>
         <li>
          <a class="app-menu__item <?php echo $this->uri->segment(2) == 'pelanggan' ? 'active' : '' ?>" href="<?php echo base_url('admin/pelanggan') ?>">
            <i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Data Pelanggan</span></a>
        </li>
         <li>
          <a class="app-menu__item <?php echo $this->uri->segment(2) == 'transaksi' ? 'active' : '' ?>" href="<?php echo base_url('admin/transaksi') ?>">
            <i class="app-menu__icon fa fa-sort"></i><span class="app-menu__label">Transaksi</span></a>
        </li>
         <li>
          <a class="app-menu__item <?php echo $this->uri->segment(2) == 'Laporan' ? 'active' : '' ?>" href="<?php echo base_url('admin/mobil') ?>">
            <i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Laporan</span></a>
        </li>
         
         
      </ul>
    </aside>