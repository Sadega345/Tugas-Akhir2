<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Standar</h3>
      <form method="POST" id="form-update-manageStandar">
        <input type="hidden" name="id" value="<?php echo $dataManageStandar->butir_id; ?>">
        <!-- Nama Butir -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Nama Butir" name="nmbutir" aria-describedby="sizing-addon2" value="<?php echo $dataManageStandar->butir_name; ?>">
        </div>

        <!-- Judul Butir -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Judul Butir" name="judulbutir" aria-describedby="sizing-addon2" value="<?php echo $dataManageStandar->title; ?>">
        </div>

        <!-- Standar -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="standar" class="form-control select2"  aria-describedby="sizing-addon2">
            <?php
            foreach ($dataStandar as $standar) {
              ?>
              <option value="<?php echo $standar->standar_id; ?>" <?php if($standar->standar_id == $dataManageStandar->standar_id){echo "selected='selected'";} ?>><?php echo $standar->standar_name; ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        
        <!-- Type Borang -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="typeborang" class="form-control select2"  aria-describedby="sizing-addon2">
            <?php
            foreach ($dataTypeBorang as $typeborang) {
              ?>
              <option value="<?php echo $typeborang->type_id; ?>" <?php if($typeborang->type_id == $dataManageStandar->type_borang){echo "selected='selected'";} ?>><?php echo $typeborang->type_name; ?></option>
              <?php
            }
            ?>
          </select>
        </div>

        <!-- Study -->
        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-home"></i>
          </span>
          <select name="study" class="form-control select2"  aria-describedby="sizing-addon2">
            <?php
            foreach ($dataStudy as $study) {
              ?>
              <option value="<?php echo $study->study_id; ?>" <?php if($study->study_id == $dataManageStandar->study_id){echo "selected='selected'";} ?>><?php echo $study->study_name; ?></option>
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
