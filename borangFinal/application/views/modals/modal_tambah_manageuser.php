<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Manage User</h3>

  <form id="form-tambah-manageUser" method="POST">
    <!-- Jabatan -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="role" class="form-control " aria-describedby="sizing-addon2">
        <option disabled selected="">Role</option>
        <?php
        foreach ($dataRole as $role) {
          ?>
          <option value="<?php echo $role->role_id; ?>">
            <?php echo $role->role_name; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <!-- Checkbox -->
    <div class="input-group form-group">      
        <?php
        foreach ($dataMenu as $menu) {
          ?>
          <input type="hidden" name="id[]" value="<?php echo $menu->id_historis; ?>">
          <input type="checkbox" name="menu[]" value="<?php echo $menu->nama_table; ?>">
          <?php echo $menu->nama_table; ?>
          <br>
          <?php
        }
        ?>    
    </div>

    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>


<!-- <script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script> -->