var keyword = document.getElementById('keyword');
var cari = document.getElementById('cari');

keyword.addEventListener('keyup', function(){


    // set up AJAX
    var xhr = new XMLHttpRequest();

    // cek kesiapan Ajax
    xhr.onreadystatechange = function(){
        if( xhr.readyState == 4 && xhr.status == 200){
            // responseText brfungsi utk menampilkan smua text dalam file yg di ambil dri open();
            // ganti semua isi container dgn semua nilai yg di respon dari hal buku.php
            container.innerHTML = xhr.responseText;
            // console.log(xhr.responseText);
        }
    }

    // eksekusi AJAX open (requert method, sumber file, asycrounus/sycrounus)
    // ambil data dri buku.php dan juga kirim data ke buku.php.
    xhr.open("GET", 'ajax/buku.php?keyword='+keyword.value, true);
    xhr.send();
});