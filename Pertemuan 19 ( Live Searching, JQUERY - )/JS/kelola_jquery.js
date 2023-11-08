// hubungkan ke JQUERY dan cek kesiapannya
$(document).ready( function(){

    // hilangkan tombol cari
    $('#cari').hide();
    // hilangkan icon loader
    $('.loader').hide();

    // cari id keyword trus ketika event keyUp dikerjakan pd id keyword/tombol searchnya
    $('#keyword').on('keyup', function(){

        // tampilkan icon loader
        $('.loader').show();

         // kirim data ke buku.php dari id keyword/search yg di isi oleh user dan ambil 
        //  data dri buku.php di masukkan dan menggantikan semua isi di container
        $.get('ajax/buku.php?keyword='+ $('#keyword').val(), function($data){
                $('#container').html($data);
                $('.loader').hide();
        });


        // menggunakan load
        // $('#container').load('ajax/buku.php?keyword='+ $('#keyword').val() );

    });
});