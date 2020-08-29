$(function(){
    //Tambah Kabupaten
    $('.tampilTambah').on('click',function(){
        $('#judulForm').html('Tambah Data Kabupaten');
        $('.kaki button[type=submit]').html('Tambah');
        $('.badan form').attr('action','http://cuacajateng.com/prakiraan/admin/tambahkab');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getKab',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val('');
                $('#kabu').val('');
            }
        });
    });
    //Ubah Kabupaten
    $('.tampilUbah').on('click',function(){
        $('#judulForm').html('Ubah Data Kabupaten');
        $('.kaki button[type=submit]').html('Ubah');
        $('.badan form').attr('action','http://cuacajateng.com/prakiraan/admin/ubahkab');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getKab',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val(data.id);
                $('#kabu').val(data.nm_kab);
            }
        });
    });
    //Tambah File Terkini
    $('.tampilTambahFile').on('click',function(){
        $('#judulFormFile').html('Tambah Data File Kabupaten terkini');
        $('.fot button[type=submit]').html('Tambah');
        $('.bod form').attr('action','http://cuacajateng.com/prakiraan/admin/tambah/');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getKab',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val('');
                //$('#kab').val('--Pilih Kab--');
            }
        });
    });
    //Ubah File Terkini
    $('.tampilUbahFile').on('click',function(){
        $('#judulFormFile').html('Ubah Data File Kabupaten terkini');
        $('.fot button[type=submit]').html('Ubah');
        $('.bod form').attr('action','http://cuacajateng.com/prakiraan/admin/ubah');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getFile',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val(data.id);
                $('#kabt').val(data.nm_kab);
                
            }
        });
    });
    //Tambah Peringatan Dini
    $('.tampilTambahDini').on('click',function(){
        $('#judulFormDini').html('Posting Data Peringatan Dini');
        $('.fote button[type=submit]').html('Post');
        $('.bodi form').attr('action','http://cuacajateng.com/prakiraan/admin/tambah_dini/');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getDini',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val('');
                $('#jdl').val('');
                $('#tem').val('');
                $('#ket').val('');
            }
        });
    });
    //Ubah Peringatan Dini
    $('.UbahD').on('click',function(){
        $('#judulFormDini').html('Ubah Data Peringatan Dini');
        $('.fote button[type=submit]').html('Ubah');
        $('.bodi form').attr('action','http://cuacajateng.com/prakiraan/admin/ubah_dini/');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getDini',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val(data.id);
                $('#jdl').val(data.judul);
                $('#tem').val(data.tempat);
                $('#ket').val(data.ket);
                
            }
        });
    });
    //Tambah File Esok
    $('.TambahFileEsok').on('click',function(){
        $('#judulFormFileEsok').html('Tambah Data File Kabupaten Esok');
        $('.fo button[type=submit]').html('Tambah');
        $('.bo form').attr('action','http://cuacajateng.com/prakiraan/admin/tambah_esok/');

        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getFile_esok',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val('');
                //$('#kab').val('--Pilih Kab--');
            }
        });
    });
    //Ubah File Esok
    $('.UbahFileEsok').on('click',function(){
        $('#judulFormFileEsok').html('Ubah Data File Kabupaten Esok');
        $('.fo button[type=submit]').html('Ubah');
        $('.bo form').attr('action','http://cuacajateng.com/prakiraan/admin/ubah_esok');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://cuacajateng.com/prakiraan/admin/getFile_esok',
            data: {id:id},
            method:'post',
            dataType:'json',
            success: function(data){
                $('#id').val(data.id);
                $('#kabt').val(data.nm_kab);
                
            }
        });
    });
    //Tambah Infografis
	$('.tampilTambahGrafis').on('click', function () {
		$('#judulFormGrafis').html('Posting Data Infografis');
		$('.kaki button[type=submit]').html('Post');
		$('.badan form').attr('action', 'http://cuacajateng.com/prakiraan/admin/tambah_grafis/');

		const id = $(this).data('id');
		$.ajax({
			url: 'http://cuacajateng.com/prakiraan/admin/getGrafis',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#id').val('');
				$('#jdl').val('');
			}
		});
	});
	//Ubah Infografis
	$('.UbahInfo').on('click', function () {
		$('#judulFormGrafis').html('Ubah Data Infografis');
		$('.kaki button[type=submit]').html('Ubah');
		$('.badan form').attr('action', 'http://cuacajateng.com/prakiraan/admin/ubah_grafis/');

		const id = $(this).data('id');
		$.ajax({
			url: 'http://cuacajateng.com/prakiraan/admin/getGrafis',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#id').val(data.id);
				$('#jdl').val(data.judul);
			}
		});
	});
})