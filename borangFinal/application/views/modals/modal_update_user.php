<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data User</h3>
      <form method="POST" id="form-update-user">
        <input type="hidden" name="id" value="<?php echo $dataUser->user_id; ?>">
        <!-- Last Name -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2" value="<?php echo $dataUser->username; ?>">
        </div>
        <!-- First Name -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="First Name" name="firstname" aria-describedby="sizing-addon2" value="<?php echo $dataUser->firstname; ?>">
        </div>
        
        <!-- Last Name -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Last Name" name="lastname" aria-describedby="sizing-addon2" value="<?php echo $dataUser->lastname; ?>">
        </div>

        <!-- Password -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="password" name="pwd" aria-describedby="sizing-addon2" value="<?php echo $dataUser->pwd; ?>">
        </div>

          <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="role" class="form-control select2"  aria-describedby="sizing-addon2">
            <?php
            foreach ($dataRole as $data) {
              ?>
              <option name="role" value="<?php echo $data->role_id; ?>" <?php if($data->role_id == $dataUser->role_id){echo "selected='selected'";} ?>><?php echo $data->role_name; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>
