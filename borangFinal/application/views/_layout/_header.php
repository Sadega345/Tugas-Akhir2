<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url(); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><small><?php echo $userdata->username; ?></small></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b><?php echo $userdata->username; ?></b>
  </a>

  <!-- nav -->
  <?php echo @$_nav; ?>
</header>