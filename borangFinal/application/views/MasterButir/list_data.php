<?php
  foreach ($datamasterButir as $butir) {
   
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $butir->butir_name; ?></td>
      <td style="min-width:230px;"><?php echo $butir->title; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-datamasterButir" data-id="<?php echo $butir->butir_id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-masterButir" data-id="<?php echo $butir->butir_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>