<?php
  foreach ($dataCreateTable as $table) {
   
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $table->judul_butir; ?></td>
      <td style="min-width:230px;"><?php echo $table->isi_form; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-danger konfirmasiHapus-createTable" data-id="<?php echo $table->id_historis."|".$table->nama_table; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>