<?php
  foreach ($datamanageFakultas as $fakultas) {
   
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $fakultas->faculty_name; ?></td>
      
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-datamanageFakultas" data-id="<?php echo $fakultas->faculty_id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-manageFakultas" data-id="<?php echo $fakultas->faculty_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>