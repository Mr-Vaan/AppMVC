// $ -> ini adalah jquery
// Ketika dokumennya sudah siap, jalankan fungsi yang ada di dalamnya.
$(function() {

    //  Ini Artinya, Jquery tolong carikan saya sebuah elemen yang nama classnya '.tampilModalUbah';
    // lalu, ketikka di klik berarti .on('click', function) , jalankan fungsi berikut ini  function().
    $('.tampilModalUbah').on('click', function() {

        $('#formModalLabel').html('Ubah Data Mahasiswa'); 

    });

});








