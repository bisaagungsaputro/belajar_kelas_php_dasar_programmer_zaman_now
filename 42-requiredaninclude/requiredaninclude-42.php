<?php


// *** Kode : File MyFunction.php ***
    function sayHello (string $firstName, string $lastName): string {
        return "Hello $firstName $lastName";
    }


//  ---


// *** Require Dan Include ***


// *** Require Dan Include ***
// *** Kode : File MyFunction.php ***
// *** Posisi Require Dan Include ***
// *** Kode : Posisi Include Salah ***
// *** Require_Once Dan Include_Once ***
// *** Kode : Include Berkali - Kali ***
// *** Kode : Include_Once ***


// *** Require Dan Include ***
/*
    Require Dan Include
    - Saat Membuat Aplikasi, Ada Baiknya Tidak Dibuat Dalam Satu File
    - Lebih Baik Dipisah Ke Beberapa File Agar Kode Program Tidak Terlalu Bertumpuk Di Satu File
    - PHP Memiliki function require Dan include Yang Bisa Kita Gunakan Untuk Mengambil File PHP Lain
    - Lantas Apa Bedanya require Dan include?
    - Pada require, Jika File Yang Kita Ambil Tidak Ada, Maka Akan Terjadi Error Dan Program Berhenti
    - Pada include, Jika File Yang Kita Ambil Tidak Ada, Maka Hanya Akan Memberi Peringatan,
      Namun Program Akan Tetap Dilanjutkan
*/

// *** Kode : File MyFunction.php ***
/*
    Kode : File MyFunction.php
    function sayHello (string $firstName, string $lastName): string {
        return "Hello $firstName $lastName";
    }
*/

// *** Posisi Require Dan Include ***
/*
    Posisi Require Dan Include
    - Kode Program PHP Akan Dibaca Dari Atas Ke Bawah, Oleh Karena Itu Pastikan Posisi require Dan
      include Sesuai Dengan Yang Kita Inginkan
    - Misal Jika Sampai Kita Salah Menempatkan Posisi require Dan include,
      Bisa Jadi Kita Malah Memanggil function Yang Belum Ada
*/

// *** Kode : Posisi Include Salah ***
/*
    Kode : Posisi Include Salah
    echo sayHello("Eko", "Kurniawan");

    require "requiredaninclude-42.php";

    => Karena Include Taruh Bawah, Seharusnya Taruh Di Paling Atas
*/

// *** Require_Once Dan Include_Once ***
/*
    Require_Once Dan Include_Once
    - function require dan include Akan Selalu Mengambil File Yang Kita Inginkan
    - Jika Kita Beberapa Kali Menggunakan require dan include File Yang Sama,
      Maka File Tersebut Akan Berkali - Kali Pula Kita Ambil
    - Hal Ini Akan Menjadi Masalah Jika Misal Dalam File Yang Kita Ambil Terdapat Definisi function,
      Sehingga Jika Diambil Berkali - Kali Akan Menyebabkan Error Redeclare function
    - Untungnya Di PHP Terdapat function require_once Dan include_once, function Ini Bisa Mendeteksi,
      Jika Kita Sebelumnya Pernah Mengambil File Yang Sama, Maka Tidak Akan Diambil Lagi
*/

// *** Kode : Include Berkali - Kali ***
/*
    Kode : Include Berkali - Kali
    include "requiredaninclude-42.php";
    include "requiredaninclude-42.php";
    
    echo sayHello("Eko", "Kurniawan");
*/

// *** Kode : Include_Once ***
/*
    Kode : Include_Once
    include_once "requiredaninclude-42.php";
    include_once "requiredaninclude-42.php";

    echo sayHello("Eko", "Kurniawan");
*/



?>