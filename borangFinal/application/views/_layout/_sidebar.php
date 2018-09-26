<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

      <li <?php if ($page == 'manageStandar') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('ManageStandar'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Master Data Standar</span>
        </a>
      </li>

      <li <?php if ($page == 'masterButir') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('MasterButir'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Master Data Butir</span>
        </a>
      </li>

      <li <?php if ($page == 'createTable') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('CreateTable'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Manage Data Butir</span>
        </a>
      </li>

      <li <?php if ($page == 'manageFakulatas') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('ManageFakultas'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Manage Fakultas</span>
        </a>
      </li>
      
    <li <?php if ($page == 'Instrumen') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Instrumen'); ?>">
          <i class="fa fa-file"></i>
          <span>Instrumen</span>
        </a>
    </li>

    

      <?php if($this->session->userdata('fakultas') != ""){?>
        <li <?php if ($page == 'Fakultas') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Fakultas'); ?>">
          <i class="fa fa-user"></i>
          <span>
            <?php 
            // if (!is_null($this->session->userdata('fakultas'))):
            echo $this->session->userdata('fakultas');
            
            ?>
              
            </span>
        </a>
      </li>
     <?php } ?>
     <?php if($this->session->userdata('instrumen') != "") { ?>
      <li <?php if ($page == 'instrumen') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Instrumen'); ?>">
          <i class="fa fa-file"></i>
          <span>
            <?php 
            // if (!is_null($this->session->userdata('fakultas'))):
            echo $this->session->userdata('instrumen'); 
            
            ?></span>
        </a>
      </li>
      <?php } ?>
       <!-- <li <?php if ($page == 'dataBorang') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('dataBorang'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Data Borang</span>
        </a>
      </li> -->
      <?php 
        $menu = explode(',', $_SESSION['nama_modul']);

        foreach ($menu as $value) {  ?>
          <li <?php if ($value == 'menu') {echo 'class="active"';} ?>>
            <a href="<?php echo base_url('Menu/detail/'.$value); ?>">
              <i class="fa fa-briefcase"></i>
              <span><?php echo $value; ?></span>
            </a>
          </li>       
        <?php } ?>
       <li <?php if ($page == 'profile') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Profile'); ?>">
          <i class="fa fa-cog"></i>
          <span>Setting Akun</span>
        </a>
      </li>
      <!-- <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">HTML</a></li>
          <li><a href="#">CSS</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
      </div> -->
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>