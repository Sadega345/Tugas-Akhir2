<?php
  foreach ($datamanageUser as $manageuser) {
   
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $manageuser->role_name; ?></td>
      <td><?php echo $manageuser->nama_modul; ?></td>
      
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-datamanageuser" data-id="<?php echo $manageuser->permission_id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-manageuser" data-id="<?php echo $manageuser->permission_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>