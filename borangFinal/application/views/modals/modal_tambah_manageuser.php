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
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox" name="datauser" value="v">Kelola Data User
      </div>
      <div class="col-md-6">
        <input type="checkbox" name="instrumen" >Kelola Data Instrumen
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox" name="borang" value="v">Kelola Data Borang
      </div>
      <div class="col-md-6">
        <input type="checkbox" name="standar" value="v">Kelola standar
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox" name="mhslulusan" value="v">Kelola Data Mahasiswa dan Lulusan
      </div>
      <div class="col-md-6">
        <input type="checkbox" name="fakultas" value="v">Kelola Fakultas
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox" name="prodi" value="v">Kelola Prodi
      </div>
      <div class="col-md-6">
        <input type="checkbox" name="keuangan" value="v">Kelola Data Keuangan
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox" name="logistik" value="v">Kelola Data Logistik
      </div>
      <div class="col-md-6">
        <input type="checkbox" name="dosen" value="v">Kelola Data Dosen
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <input type="checkbox" name="jurnalilmiah" value="v">Kelola Data Jurnal dan artikel ilmiah
      </div>
      
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