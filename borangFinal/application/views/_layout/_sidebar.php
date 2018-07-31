<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
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
      
      <li <?php if ($page == 'dataUser') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('KelolaUser'); ?>">
          <i class="fa fa-user"></i>
          <span>Kelola Data User</span>
        </a>
      </li>

      <li <?php if ($page == 'manageUser') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('ManageUser'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Manage Data User</span>
        </a>
      </li>
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>