<?php


// *** Single Quote - Tidak Direkomendasikan ***
 echo 'Nama : ';
 echo 'Agung Saputro';

echo "\n";

// *** Double Quote ***
 // Cara Menggunakan \n (ENTER)
 echo "Nama Saya : ";
 echo "Agung Saputro";
 echo "\n";

 // Cara Menggunakan \t (TAB)
 echo "Nama : ";
 echo "Agung\t Saputro\t Bersemangatlah\n";

// *** Heredoc ***
echo <<<AGUNG
      Ini Adalah Contoh String Yang Sangat Panjang
      Dan Juga Gak Perlu Ketik ENTER
      Secara Manual, "Bisa Quote / Petik" Juga
      AGUNG;

echo "\n \n";

// *** Nowdoc ***
echo <<<'AGUNG'
    Ini Adalah Contoh String Yang Sangat Panjang
    Dan Juga Gak Perlu Ketik ENTER \n
    Secara Manual, "Bisa Quote / Petik" Juga
    AGUNG;


// ---


// *** Tipe Data String ***


// *** Tipe Data String ***
// *** Single Quote ***
// *** Double Quote ***
// *** Multiline String ***
// *** Heredoc ***
// *** Nowdoc ***


// *** Tipe Data String ***
/*
    Tipe Data String
    - Tipe Data String Adalah Tipe Data Representasi Dari Teks
    - String Bisa Mengandung Kosong Atau Banyak Karakter
*/

// *** Single Quote - Tidak Direkomendasikan ***
/*
    Single Quote
    - Untuk Membuat String Di PHP, Kita Bisa Menggunakan Single Quote / Kutip 1 Contohnya :
      echo 'Nama : ';
      echo 'Agung Saputro';
      Outpunya : Nama : Agung Saputro
*/

// *** Double Quote ***
/*
    Double Qoute
    Selain Single Quote, Kita Juga Bisa Menggunakan Double Quote, 
    Salah Satu Kelebihan Menggunakan Double Quote Adalah Kita Menggunakan Escape Sequence Untuk Beberapa Hal,
    Seperti \n Untuk ENTER => echo "n"; => echo "Nama Saya\n ";
    \t Untuk TAB => echo "Agung\t Saputro";
    DLL

    Contohnya :
    echo "Agung Saputro";
    echo "\n";

    echo "Nama : ";
    echo "Agung\t Saputro\t Bersemangatlah\n";
*/

// *** Multiline String ***
/*
    Multiline String
    - Kadang Kita Ingin Membuat Data String Yang Lebih Dari Satu Baris. Untuk Melakukan Itu Sebenarnya Kita Bisa Menggunakan \n Sebagai ENTER
    - Namun PHP Memiliki Fitur Yang Lebih Baik, Yaitu Bernama Heredoc Dan Nowdoc
*/

// *** Heredoc ***
/*
    Heredoc
    - Heredoc Adalah Fitur Untuk Membuat String Yang Panjang, Sehingga Kita Tidak Perlu Manual Melakukan ENTER, TAB, DLL Secara Manual
      Contohnya :
      echo <<<AGUNG
      Ini Adalah Contoh String Yang Sangat Panjang
      Dan Juga Gak Perlu Ketik ENTER \n
      Secara Manual, "Bisa Quote / Petik" Juga
      AGUNG;
*/

// *** Nowdoc - Tidak Direkomendasikan ***
/*
    Nowdoc
    Nowdoc Mirip Seperti Heredoc, Yang Membedakan Adalah Pada Nowdoc Tidak Memiliki Kemampuan 
    Parsing Seperti Di Heredoc Atau Double Quote. Masalah Parsing Akan Kita Bahas Di Materi Manipulasi String
    Contohnya :
    echo <<<'AGUNG'
    Ini Adalah Contoh String Yang Sangat Panjang
    Dan Juga Gak Perlu Ketik ENTER \n
    Secara Manual, "Bisa Quote / Petik" Juga
    AGUNG;
    
    => Nowdoc Mirip Seperti Single Quote
*/



?>