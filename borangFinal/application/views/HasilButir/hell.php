<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-4" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-hasilMenu"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <!-- <div class="col-md-3">
        <a href="<?php echo base_url('Pegawai/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-pegawai"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
	<thead>
	<tr>
		<?php foreach ($dataMenuHeader as $header) {?>
		<td><?php echo $header->column_name; ?></td>

		<?php } ?>
		<td style="text-align: center;">Aksi</td>
	</tr>
	</thead>
	<tbody id="data-hasilMenu">
	<?php foreach ($dataMenu as $menu) { ?>
		
		<tr>
			<?php foreach ($dataMenuHeader as $header) {
				$isikolom = $header->column_name;
			?>
			<td><?php echo $menu->$isikolom; ?></td>
			<?php } ?>
			<td class="text-center" style="min-width:100px;">
				<button class="btn btn-warning update-dataHasilMenu" data-id="<?php echo $menu->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
				<button class="btn btn-danger konfirmasiHapus-datahasilMenu" data-id="<?php echo $menu->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus" name="id"><i class="glyphicon glyphicon-remove-sign"></i> Delete </button>
			</td>
		</tr>

	<?php } ?>
	</tbody>
	</table>
  </div>
</div>

<?php echo $modal_tambah_hasilMenu; ?>

<div id="update-dataHasilMenu"></div>


<?php show_my_confirm('konfirmasiHapus', 'hapus-datahasilMenu', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); 
?>
