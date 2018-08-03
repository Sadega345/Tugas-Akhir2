<?php
  foreach ($datamanageStandar as $standar) {
   
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $standar->standar_name; ?></td>
      <td><?php echo $standar->butir_name; ?></td>
      <td><?php echo $standar->title; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-datamanageStandar" data-id="<?php echo $standar->butir_id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-manageStandar" data-id="<?php echo $standar->butir_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>