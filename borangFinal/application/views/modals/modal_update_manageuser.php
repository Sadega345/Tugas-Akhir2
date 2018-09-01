<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data User</h3>
      <form method="POST" id="form-update-manageUser">
        <input type="hidden" name="id" value="<?php echo $dataManageUser->permission_id ?>">
        <!-- Jabatan -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="role" class="form-control select2"  aria-describedby="sizing-addon2">
            <?php
            foreach ($dataRole as $data) {
              ?>
              <option value="<?php echo $data->role_id; ?>" <?php if($data->role_id == $dataManageUser->role_id){echo "selected='selected'";} ?>><?php echo $data->role_name; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <!-- Checkbox -->
        <div class="input-group form-group">      
        <?php
        $idx = 0;
        foreach ($dataMenu as $menu) {
          ?>
            <input type="hidden" name="id[]" value="<?php echo $menu->id_historis; ?>">
            <input type="checkbox" name="menu[]" value="<?php echo $menu->nama_table; ?>" >
          <?php echo $menu->nama_table."<br>"; ?>

            <input type="checkbox" name="menu[]" value="<?php echo $menu->nama_table; ?>" <?php if($menu->nama_table == $dataManageUser->nama_modul){ echo "checked"; }else{ echo $menu->nama_table; ?> >
          <?php echo $menu->nama_table."<br>"; ?>
          <br>
          <?php }  ?>
          
          <?php
        }
        ?>    
        </div>

        <!-- <div class="row">
          
          <div class="col-md-6">
          <?php 
            foreach ($dataPermission as $data) {
          ?>
            <input type="checkbox" name="datauser" value="Data User" <?php if ($data->data_user == "Data User") {
              echo "checked";
            } ?>>Kelola Data User
            <?php } ?>
          </div> -->
    
        
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>
