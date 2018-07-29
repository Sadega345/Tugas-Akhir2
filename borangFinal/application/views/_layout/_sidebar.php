<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->

      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
      
      <li <?php if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-user"></i>
          <span>Kelola Standar</span>
        </a>
      </li>

      <li <?php if ($page == 'instrumen') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Instrumen'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Kelola Data Instrumen</span>
        </a>
      </li>
      
      <li <?php if ($page == 'kota') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Kota'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Kelola Data Borang</span>
        </a>
      </li>

      <li <?php if ($page == 'datauser') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('KelolaUser'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Kelola Data User</span>
        </a>
      </li>
      <li <?php if ($page == 'manageuser') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('ManageUser'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Manage Data User</span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>