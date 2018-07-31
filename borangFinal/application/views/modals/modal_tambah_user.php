<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data User</h3>

  <form id="form-tambah-user" method="POST">
    <!-- User Name -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="User Name" name="username" aria-describedby="sizing-addon2">
    </div>
    <!-- Password -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="password" class="form-control" placeholder="Password" name="pwd" aria-describedby="sizing-addon2">
    </div>
    <!-- First name -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="First Name" name="firstname" aria-describedby="sizing-addon2">
    </div>
    <!-- Last Name -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Last Name" name="lastname" aria-describedby="sizing-addon2">
    </div>
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