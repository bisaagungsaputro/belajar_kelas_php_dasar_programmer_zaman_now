<?php


// Kode : Tipe Data Integer
echo "Decimal : ";
var_dump(1234);

echo "\n";

echo "Octal : ";
var_dump(0123);

echo "\n";

echo "Hexadecimal : ";
var_dump(0x1A);

echo "\n";

echo "Binary : ";
var_dump(0b11111111);

echo "\n";

echo "Underscore Di Number : ";
var_dump(1_234_567);

echo "\n";

echo "==================================\n";

echo "\n";

// Kode : Tipe Data Floating Point (float)
echo "Floating Point : \n";
var_dump(1.234);

echo "\n";

echo "Floating Point Dengan E Notation Plus (1.2 x 1000) : ";
var_dump(1.7e3);

echo "\n";

echo "Floating Point Dengan E Notation Minus (7 x 0.001) : ";
var_dump(1.7e-3);

echo "\n";

echo "Underscore Di Floating Point : \n";
var_dump(1_234.123);

echo "\n";

echo "==================================\n";

echo "\n";

echo "Integer Overflow : ";
var_dump(9223372036854775807);

echo "\n";

// Apabila Sudah Melewati Batasnya, Maka Akan Muncul
// float (98832482483274982749)
var_dump(98832482483274982749);


// ---


// *** Tipe Data Number ***


// *** Tipe Data Number ***
// *** Kode : Tipe Data Integer ***
// *** Integer Overflow ***


// *** Tipe Data Number ***
/*
    Tipe Data Number
    Di PHP Terdapat 2 Jenis Tipe Data Number / Angka :
    1. int => Bilangan Bulat Decimal (Base 10), Hexadecimal (Base 16), Octa (Base 8), Binary (Base 2) => Bilangan Yang Tidak Ada Komanya / , Contohnya :
       10, 8, 20, 12
    2. float => Bilangan Pecahan => Bilangan Yang Ada Komanya / , Kalau Di Indonesia Pakainya Koma / , => Kalau Di Bahasa Pemprograman PHP Menggunakan Titik / . Contohnya :
       20.5 , 10.5 , 11.8 , 85.1   

    - Di PHP Kita Bisa Menambahkan _(Garis Bawah) Di Angka, Ini Hanya Untuk Agar Mudah Dibaca, Saat Dijalankan _(Garis Bawah) Tersebut Akan Di Ignore / Diabaikan Contohnya :
      1_000
      Outputnya : 1000

    - Untuk Angka Negatif, Kita Bisa Menggunakan Tanda -(Minus) Di Depan Angka
    - Untuk Angka Positif Tidak Perlu Menggunakan Tanda Didepan Angka
*/

// *** Kode : Tipe Data Integer ***
/*
   Kode : Tipe Data Integer
   - var_dump Merupakan Sebuah Function Yang Digunakan Untuk Pengen Liat Datanya Apa, Tipe Datanya Apa Biar Kita Beneran Tau
*/

// *** Integer Overflow ***
/*
   Integer Overflow
   - Secara Default, Kapasitas Maksimum Integer Di PHP Ada Batasnya, 2147483647 Untuk Sistem Operasi 32 Bit,
     Dan 9223372036854775807 Untuk Sistem Operasi 64 Bit
   - Jika Kita Membuat Number Integer Yang Melebihi Nilai Tersebut, 
     Maka Secara Otomatis Tipe Numbernya Akan Berubah Menjadi Floating Point
*/



?>