<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data User</h3>

  <form id="form-tambah-pegawai" method="POST">
    <!-- First Name -->
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
    <!-- User name -->
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

    <!-- Jabatan -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="role" class="form-control " aria-describedby="sizing-addon2">
        <option disabled selected="">Role</option>
        <?php
        foreach ($dataKota as $kota) {
          ?>
          <option value="<?php echo $kota->id; ?>">
            <?php echo $kota->nama; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>
    <!-- <div class="row">
      <div class="col-md-4">
        <h4 style="display:block; text-align:left;">Role Permission</h4>
      </div>
    </div>
    <div class="input-group form-group" style="display: inline-block;">

      <div class="row">
        <div class="col-md-6 col-md-8">
          <span class="input-group-addon">
            <input type="checkbox" name="mhs_lulusan" value="1" id="mhs_lulusan" class="minimal">
            <label for="mhs_lulusan">Kelola Data Mahasiswa & Lulusan</label>
          </span>

          <span class="input-group-addon">
            <input type="checkbox" name="fakultas_prodi" value="2" id="fakultas_prodi" class="minimal"> 
            <label for="fakultas_prodi">Kelola Fakultas & Prodi </label>
          </span>
        </div>

      </div>
      
      <div class="row">
        <div class="col-md-9 col-md-12">
          <span class="input-group-addon">
            <input type="checkbox" name="keuangan" value="3" id="keuangan" class="minimal">
            <label for="keuangan">Kelola Data Keuangan </label>
          </span>

          <span class="input-group-addon">
            <input type="checkbox" name="logistik" value="4" id="logistik" class="minimal"> 
            <label for="logistik">Kelola Data Logistik</label>
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-md-12">
          <span class="input-group-addon">
            <input type="checkbox" name="dosen" value="4" id="dosen" class="minimal">
            <label for="dosen">Kelola Data Dosen</label>
          </span>

          <span class="input-group-addon">
            <input type="checkbox" name="logistik" value="5" id="logistik" class="minimal"> 
            <label for="logistik">Kelola Data Jurnal dan Artikel Ilmiah</label>
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <span class="input-group-addon">
            <input type="checkbox" name="dosen" value="6" id="dosen" class="minimal">
            <label for="dosen">Kelola Data Borang</label>
          </span>
        </div>
      </div>

    </div> -->

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