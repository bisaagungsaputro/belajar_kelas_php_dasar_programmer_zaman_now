<?php


// *** Kode : Function ***
function sayaprogrammer () {

    // Untuk Menyimpan Data Function Saja
    echo "Hello Function" . PHP_EOL;
}
// Untuk Menjalankan Function
sayaprogrammer();
sayaprogrammer();

// *** Kode : Lokasi Function ***
$buat = true;

if ($buat) {
    function coba () {
        echo "Pakai if" . PHP_EOL;
    }
}

coba();


// ---


// *** Function ***


// *** Function ***
// *** Kode : Function ***
// *** Lokasi Function ***
// *** Kode : Lokasi Function ***


// *** Function ***
/*
    Function
    - function Adalah Block Kode Program Yang Akan Berjalan Saat Kita Panggil
    - Sebelumnya Kita Sudah Menggunakan function isset(), count() Dan Lain - Lain
    - Untuk Membuat function Di PHP, Kita Bisa Menggunakan Kata Kunci function, Lalu Diikuti Dengan
      Nama function, Kurung () Dan Diakhiri Dengan Block
    - Kita Bisa Memangil function Dengan Menggunakan Nama function Lalu Diikuti Dengan Kurung ()
    - Di Bahasa Pemprograman Lain, function Juga Disebut Dengan method
*/

// *** Kode : Function ***
/*
    Kode : Function
    function sayaprogrammer () {
        echo "Hello Function" . PHP_EOL;
    }

    sayaprogrammer();
*/

// *** Lokasi Function ***
/*
    Lokasi Function
    - PHP Sangat Flexible Dalam Pembuatan function
    - Tidak Seperti Bahasa Pemprograman Lain Yang Harus Ada Aturan Lokasi Dimana Membuat function
    - Di PHP Kita Bebas Membuat function Dimanapun, Bisa Di Dalam if Statement, Di Dalam function Dan Sebagainya
    - Namun Perlu Diingat, Jika Kode function Yang Belum Dieksekusi Oleh PHP, Maka function Tersebut Tidak Akan Bisa Digunakan
*/

// *** Kode : Lokasi Function ***
/*
    Kode : Lokasi Function
    $buat = false;

    if ($buat) {
        function coba () {
            echo "Pakai if" . PHP_EOL;
        }
    }

    coba();
*/



?>