<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data</h3>
      <form method="POST" id="form-update-hasilMenu">
        <input type="hidden" name="id" value="<?php echo $dataMenu->id; ?>">
        <input type="hidden" value="<?php echo $_SESSION['table']; ?>" name="tabel">
        <?php 
          $listkolom="";
          $arrayKolom="";
            foreach ($_SESSION['field'] as $hasilKolom) {
              $listkolom = $hasilKolom->column_name;
              $arrayKolom .= "|".$hasilKolom->column_name;
         ?>

        <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-pencil"></i>
          </span>
          <input type="text" class="form-control" name="<?php echo $hasilKolom->column_name; ?>" aria-describedby="sizing-addon2" value="<?php echo $dataMenu->$listkolom?>">
        </div>

      <?php } ?>

      <input type="hidden" value="<?php echo substr($arrayKolom, 1); ?>" name="arrayfield">

        <!-- <div class="input-group form-group">
          <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-user"></i>
          </span>
          <input type="text" class="form-control" placeholder="Menu" name="nmbutir" aria-describedby="sizing-addon2" value="<?php echo $dataMenu->Alamat3; ?>">
        </div> -->
        
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>
