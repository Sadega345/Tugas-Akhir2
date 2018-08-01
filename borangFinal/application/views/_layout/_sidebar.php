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
          <i class="fa fa-user"></i>
          <span>Manage Data User</span>
        </a>
      </li>
      <?php if ($this->session->userdata('fakultas') == 'v'): ?>
        <li <?php if ($page == 'manageUser') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('ManageUser'); ?>">
          <i class="fa fa-user"></i>
          <span><?php echo $this->session->userdata('fakultas'); ?></span>
        </a>
      </li>
      <?php endif ?>

      <?php if ($this->session->userdata('instrumen') == ''): ?>
        <li <?php if ($page == 'manageUser') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('ManageUser'); ?>">
          <i class="fa fa-user"></i>
          <span><?php echo $this->session->userdata('instrumen'); ?></span>
        </a>
      </li>
      <?php endif ?>
      
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>