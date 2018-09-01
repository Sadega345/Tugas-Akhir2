<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Tambah Butir</h3>

  <form id="form-tambah-createTable" method="POST">
    <!-- Nama Judul Butir -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="nmbutir" class="form-control " aria-describedby="sizing-addon2">
        <option disabled selected="">Butir</option>
        <?php
        foreach ($dataAsalButir as $butir) {
          ?>
          <option value="<?php echo $butir->butir_name."_".$butir->title."|".$butir->butir_id; ?>">
            <?php echo $butir->butir_name." ".$butir->title; ?>
          </option>
          <?php
        }
        ?>
      </select>
    </div>

    <script>
      function generateKolom(param){
        var htmlnya = "";
        for(var index =1; index <= param.value; index++){
          htmlnya += "<div class='input-group form-group'>"+
          "<span class='input-group-addon' id='sizing-addon2'>"+
        "<i class='glyphicon glyphicon-user'></i>"+
      "</span>"+
          "<input type='text' name='kolom[]' class='form-control' aria-describedby='sizing-addon2'>"+
          "</div>";
        }
        //alert(htmlnya);
        document.getElementById('result').innerHTML  = htmlnya;

      }
    </script>

    <!-- Jumlah Kolom -->
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select name="jmlkolom" id="jmlkolom" onchange="javascript:generateKolom(this)" aria-describedby="sizing-addon2" class="form-control ">
        <option disabled selected="">Jumlah Kolom</option>
        <?php for($i =1; $i <=15; $i++){echo "<option value='".$i."'>".$i."</option>";}?>
        
      </select>
    </div>

    <div id="result" >
      
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