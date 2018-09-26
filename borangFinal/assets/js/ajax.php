<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});

	window.onload = function() {
		tampilPegawai();
		tampilPosisi();
		tampilKota();
		tampilUser();
		tampilManageUser();
		tampilInstrumen();
		tampilStandar();
		tampilFakultas();
		tampilButir();
		tampilCreateTable();
		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable();
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	function tampilPegawai() {
		$.get('<?php echo base_url('Pegawai/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-pegawai').html(data);
			refresh();
		});
	}

	var id_pegawai;
	$(document).on("click", ".konfirmasiHapus-pegawai", function() {
		id_pegawai = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPegawai", function() {
		var id = id_pegawai;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pegawai/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPegawai();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataPegawai", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pegawai/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-pegawai').modal('show');
		})
	})

	$('#form-tambah-pegawai').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pegawai/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPegawai();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-pegawai").reset();
				$('#tambah-pegawai').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-pegawai', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pegawai/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPegawai();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-pegawai").reset();
				$('#update-pegawai').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-pegawai').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-pegawai').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Kota
	function tampilKota() {
		$.get('<?php echo base_url('Kota/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-kota').html(data);
			refresh();
		});
	}

	var id_kota;
	$(document).on("click", ".konfirmasiHapus-kota", function() {
		id_kota = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataKota", function() {
		var id = id_kota;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kota/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilKota();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataKota", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kota/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-kota').modal('show');
		})
	})

	$(document).on("click", ".detail-dataKota", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Kota/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-kota').modal('show');
		})
	})

	$('#form-tambah-kota').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Kota/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilKota();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-kota").reset();
				$('#tambah-kota').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-kota', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Kota/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilKota();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-kota").reset();
				$('#update-kota').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-kota').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-kota').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	// Kelola User
	function tampilUser() {
		$.get('<?php echo base_url('KelolaUser/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-user').html(data);
			refresh();
		});
	}

	var id_user;
	$(document).on("click", ".konfirmasiHapus-dataUser", function() {
		id_user = $(this).attr("data-id");

	})
	$(document).on("click", ".hapus-dataUser", function() {
		var id = id_user;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('KelolaUser/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilUser();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataUser", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('KelolaUser/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			
			$('#user-modal').html(data);
			$('#update-user').modal('show');
		})
	})

	$('#form-tambah-user').submit(function(e) {
		var data = $(this).serialize();
		
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('KelolaUser/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			
			var out = jQuery.parseJSON(data);
			tampilUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-user").reset();
				$('#tambah-user').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});


	$(document).on('submit', '#form-update-user', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('KelolaUser/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-user").reset();
				$('#update-user').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-user').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-dataUser').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	// Manage User
	function tampilManageUser() {
		$.get('<?php echo base_url('ManageUser/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-manageUser').html(data);
			refresh();
		});
	}

	var id_manageUser;
	$(document).on("click", ".konfirmasiHapus-manageuser", function() {

		id_manageUser = $(this).attr("data-id");
		// alert(id_manageUser);
	})
	$(document).on("click", ".hapus-datamanageUser", function() {
		var id = id_manageUser;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ManageUser/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');

			tampilManageUser();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-datamanageuser", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ManageUser/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#ubah-manageUser').html(data);
			$('#ubah-manageuser').modal('show');
		})
	})

	$('#form-tambah-manageUser').submit(function(e) {
		var data = $(this).serialize();
		// alert('masuk');
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('ManageUser/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);
			// alert(out);
			tampilManageUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-manageUser").reset();
				$('#tambah-manageUser').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-manageUser', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('ManageUser/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);
			
			tampilManageUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-manageUser").reset();
				$('#ubah-manageuser').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-manageUser').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-manageuser').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Posisi
	function tampilPosisi() {
		$.get('<?php echo base_url('Posisi/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-posisi').html(data);
			refresh();
		});
	}

	var id_posisi;
	$(document).on("click", ".konfirmasiHapus-posisi", function() {
		id_posisi = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPosisi", function() {
		var id = id_posisi;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Posisi/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPosisi();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-dataPosisi", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Posisi/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-posisi').modal('show');
		})
	})

	$(document).on("click", ".detail-dataPosisi", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Posisi/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#tabel-detail').dataTable({
				  "paging": true,
				  "lengthChange": false,
				  "searching": true,
				  "ordering": true,
				  "info": true,
				  "autoWidth": false
				});
			$('#detail-posisi').modal('show');
		})
	})

	$('#form-tambah-posisi').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Posisi/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPosisi();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-posisi").reset();
				$('#tambah-posisi').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-posisi', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Posisi/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPosisi();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-posisi").reset();
				$('#update-posisi').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-posisi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-posisi').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})


	//Instrumen
	function tampilInstrumen() {
		$.get('<?php echo base_url('Instrumen/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-instrumen').html(data);
			refresh();
		});
	}

	var instrumen_id;
	$(document).on("click", ".konfirmasiHapus-instrumen", function() {
		instrumen_id = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-instrumen", function() {
		var id = instrumen_id;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Instrumen/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilInstrumen();
			$('.msg').html(data);
			effect_msg();
		})
	})


	$('#form-tambah-instrumen').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Instrumen/do_upload'); ?>',
			// data: data
			data:new FormData(this), //penggunaan FormData
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
		})
		.done(function(data) {
			// alert('tes');
			var out = jQuery.parseJSON(data);

			tampilInstrumen();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-instrumen").reset();
				$('#tambah-instrumen').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-instrumen').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Manage Standar
	function tampilStandar() {
		$.get('<?php echo base_url('ManageStandar/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-manageStandar').html(data);
			refresh();
		});
	}

	var id_standar;
	$(document).on("click", ".konfirmasiHapus-manageStandar", function() {
		id_standar = $(this).attr("data-id");
		
	})
	$(document).on("click", ".hapus-dataStandar", function() {
		var id = id_standar;
		// alert(id);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ManageStandar/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilStandar();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-datamanageStandar", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ManageStandar/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			// alert('tes');
			$('#ubah-manageStandar').html(data);
			$('#ubah-managestandar').modal('show');
		})
	})

	$('#form-tambah-manageStandar').submit(function(e) {
		var data = $(this).serialize();
		// alert('masuk');
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('ManageStandar/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);
			
			tampilStandar();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-manageStandar").reset();
				$('#tambah-manageStandar').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-manageStandar', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('ManageStandar/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilStandar();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-manageStandar").reset();
				$('#ubah-managestandar').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-manageStandar').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-manageStandar').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Manage Fakultas

	function tampilFakultas() {
		$.get('<?php echo base_url('ManageFakultas/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-manageFakultas').html(data);
			refresh();
		});
	}

	var id_fakultas;
	$(document).on("click", ".konfirmasiHapus-manageFakultas", function() {
		id_fakultas = $(this).attr("data-id");
		
	})
	$(document).on("click", ".hapus-dataFakultas", function() {
		var id = id_fakultas;
		// alert(id);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ManageFakultas/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilFakultas();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-datamanageFakultas", function() {
		var id = $(this).attr("data-id");
		// alert(id)
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('ManageFakultas/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			// alert('tes');
			$('#ubah-manageFakultas').html(data);
			$('#ubah-managefakultas').modal('show');
		})
	})

	$('#form-tambah-manageFakultas').submit(function(e) {
		var data = $(this).serialize();
		// alert('masuk');
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('ManageFakultas/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);
			
			tampilFakultas();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-manageFakultas").reset();
				$('#tambah-manageFakultas').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-manageFakultas', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('ManageFakultas/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilFakultas();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-manageFakultas").reset();
				$('#ubah-managefakultas').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-manageFakultas').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-manageFakultas').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	//Master Butir
	function tampilButir() {
		$.get('<?php echo base_url('MasterButir/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-masterButir').html(data);
			refresh();
		});
	}

	var id_butir;
	$(document).on("click", ".konfirmasiHapus-masterButir", function() {
		id_butir = $(this).attr("data-id");
	
	})
	$(document).on("click", ".hapus-dataButir", function() {
		var id = id_butir;
		// alert(id);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('MasterButir/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilButir();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-datamasterButir", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('MasterButir/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			// alert('tes');
			$('#ubah-masterButir').html(data);
			$('#ubah-masterbutir').modal('show');
		})
	})

	$('#form-tambah-masterButir').submit(function(e) {
		var data = $(this).serialize();
		// alert('masuk');
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('MasterButir/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);
			
			tampilButir();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-masterButir").reset();
				$('#tambah-masterButir').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-masterButir', function(e){
		var data = $(this).serialize();
		// alert('masuk');
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('MasterButir/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilButir();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-masterButir").reset();
				$('#ubah-masterbutir').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-masterButir').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	});

	$('#update-masterButir').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	});


	//ManageButir
	function tampilCreateTable() {
		$.get('<?php echo base_url('CreateTable/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-createTable').html(data);
			refresh();
		});
	}

	var id_butir;
	$(document).on("click", ".konfirmasiHapus-createTable", function() {
		id_butir = $(this).attr("data-id");
	
	})
	$(document).on("click", ".hapus-dataTable", function() {
		var id = id_butir;
		// alert(id);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('CreateTable/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilCreateTable();
			$('.msg').html(data);
			effect_msg();
		})
	})

	$(document).on("click", ".update-datacreateTable", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('CreateTable/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			// alert('tes');
			$('#ubah-createTable').html(data);
			$('#ubah-createTable').modal('show');
		})
	})

	$('#form-tambah-createTable').submit(function(e) {
		var data = $(this).serialize();
		// alert('masuk');
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('CreateTable/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);
			
			tampilCreateTable();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-createTable").reset();
				$('#tambah-createTable').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-createTable').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	});

	// Kelola Hasil Menu
	function tampilhasilMenu() {
		
		$.get('<?php echo base_url('Menu/detail/'.$this->uri->segment(3)); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-hasilMenu').html(data);
			refresh();
		});

	}

	var id_hasilMenu;
	$(document).on("click", ".konfirmasiHapus-datahasilMenu", function() {
		id_hasilMenu = $(this).attr("data-id");
		
	})
	$(document).on("click", ".hapus-datahasilMenu", function() {
		var id = id_hasilMenu;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Menu/delete'); ?>",
			data: "id=" +id+"& tabel=<?php echo $this->uri->segment(3)?>"
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			// tampilhasilMenu();
			$('.msg').html(data);
			effect_msg();
		})
		window.setTimeout(function() {
			location.reload();	
			}, 3000);
	})

	$(document).on("click", ".update-dataHasilMenu", function() {
		var id = $(this).attr("data-id");
		// alert(id);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Menu/update'); ?>",
			data: "id=" +id+"& tabel=<?php echo $this->uri->segment(3)?>"
		})
		.done(function(data) {
			// alert(id);
			$('#update-dataHasilMenu').html(data);
			$('#ubah-datahasilmenu').modal('show');
		})
	})

	$('#form-tambah-hasilMenu').submit(function(e) {
		var data = $(this).serialize();
		// alert(1);
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Menu/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			//alert(data);
			var out = jQuery.parseJSON(data);
			//tampilhasilMenu();
			if (out.status == 'form') {
				
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				// alert(5);
				document.getElementById("form-tambah-hasilMenu").reset();
				$('#tambah-hasilMenu').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
			window.setTimeout(function() {
			location.reload();	
			}, 3000);
			
		})
		// alert(2);
		e.preventDefault();

	});


	$(document).on('submit', '#form-update-hasilMenu', function(e){
		var data = $(this).serialize();
		// alert(data);
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Menu/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			// alert(data);
			var out = jQuery.parseJSON(data);

			// tampilhasilMenu();
			if (out.status == 'form') {
				alert(4);
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				// alert(3);
				document.getElementById("form-update-hasilMenu").reset();
				$('#ubah-datahasilmenu').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
			window.setTimeout(function() {
			location.reload();	
			}, 3000);

		})
		// alert(2);
		e.preventDefault();
	});

	$('#tambah-hasilMenu').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-hasilMenu').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})
</script>