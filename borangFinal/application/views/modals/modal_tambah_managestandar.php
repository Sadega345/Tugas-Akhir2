<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Standar</h3>

  <form id="form-tambah-manageStandar" method="POST">
    <!-- Nama Butir -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Butir" name="nmbutir" aria-describedby="sizing-addon2">
    </div>

    <!-- Judul Butir -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Judul Butir" name="judulbutir" aria-describedby="sizing-addon2">
    </div>
    <!-- Standar -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="standar" class="form-control " aria-describedby="sizing-addon2">
        <option disabled selected="">Standar</option>
        <?php
        foreach ($dataStandar as $standar) {
          ?>
          <option value="<?php echo $standar->standar_id; ?>">
            <?php echo $standar->standar_name; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>

    <!-- Type Bprang -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="typeborang" class="form-control " aria-describedby="sizing-addon2">
        <option disabled selected="">Type Borang</option>
        <?php
        foreach ($dataTypeBorang as $typeborang) {
          ?>
          <option value="<?php echo $typeborang->type_id; ?>">
            <?php echo $typeborang->type_name; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>

    <!-- Study -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="study" class="form-control " aria-describedby="sizing-addon2">
        <option disabled selected="">Study</option>
        <?php
        foreach ($dataStudy as $study) {
          ?>
          <option value="<?php echo $study->study_id; ?>">
            <?php echo $study->study_name; ?>
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