<?php
  $no=1;
  foreach ($instrumen as $instrumen) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $no++; ?></td>
      <td><?php echo $instrumen->instrumen_name; ?></td>
      <td><?php echo $instrumen->file; ?></td>
      <td class="text-center" style="min-width:230px;">
        <!-- <button class="btn btn-warning update-dataUser" data-id="<?php echo $user->user_id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button> -->
        <button class="btn btn-danger konfirmasiHapus-instrumen" data-id="<?php echo $instrumen->instrumen_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    
    <?php
  }
?>