<?php


// Menggunakan is_null
$mentor = "David Ismail";
echo "Is Name NULL? : ";
echo is_null($mentor);
echo "\n";

// Menggunakan null
$name = "Agung Saputro";
$name = null;
echo "\n";
echo is_null($name);

// Mengecek null - TRUE Karena Datanya Kosong
$alamat = "Jakarta";
$alamat = null;
$isNull = is_null($alamat);
var_dump($isNull);

// Menghapus Variable Menggunakan unset
$contoh = "Vira Agistasari";
unset($contoh);
echo $contoh;

// isset - Hasilnya FALSE Karena Datanya Tidak Ada
var_dump(isset($contoh));

/*
isset Untuk Mengecek Apakah Sebuah Variable Ada Dan Nilainya Tidak NULL
Hasilnya TRUE Karena Ada Datanya
*/
$praktek = "Atika Nur Aini";
var_dump(isset($praktek));


// ---


// *** Data NULL ***


// *** Data NULL ***
// *** Kode : Data NULL ***
// *** Mengecek Apakah Data NULL ***
// *** Kode : Mengecek NULL ***
// *** Menghapus Variable ***


// *** Data NULL ***
/*
    Data NULL
    - Nilai NULL Merepresentasikan Sebuah Variable Tanpa Nilai
    - Saat Kita Membuat Variable, Lalu Ingin Menghapus Data Yang Terdapat Di Variable Tersebut, 
      Kita Bisa Menggunakan NULL Untuk Mengosongkan Variable Tersebut
    - Untuk Membuat Data NULL, Kita Bisa Menggunakan Kata Kunci NULL (Case Insensitive / Bisa Huruf Besar Dan Kecil)
*/

// *** Kode : Data NULL ***
/*
    Kode : Data NULL
      
    Data Dari $name Akan Dihilangkan
    - $name = "Agung Saputro";
    - $name = NULL;

    Variable NULL Tanpa Nilai
    - $age = NULL;  
*/

// *** Mengecek Apakah Data NULL ***
/*
    Mengecek Apakah Data NULL
    - Kadang Kita Ingin Tahu Apakah Sebuah Data Bernilai NULL Atau Tidak
    - Untuk Mengecek Apakah Sebuah Data Bernilai NULL, Kita Bisa Menggunakan Function is_null($variable)

    => is_null => Return / Hasilnya Boolean
*/

// *** Kode : Mengecek NULL ***
/*
  Kode : Mengecek NULL
  $alamat = "Jakarta";
  $alamat = NULL;
  $isNull = is_null($alamat);
  var_dump($isNull);
*/

// *** Menghapus Variable ***
/*
    Menghapus Variable
    - Selain Mengubah Menjadi NULL, Di PHP Juga Kita Bisa Menghapus Sebuah Variable, Caranya Dengan Menggunakan Function unset($Variable)
      unset($Variable) => Digunakan Untuk Menghapus Variable (Tidak Rekomendasikan Menggunakan NULL)
    - Namun Hati - Hati, Ketika Kita Hapus Variable, Kita Tidak Bisa Lagi Mengakses Variable Tersebut,
      Bahkan Function is_null($Variable) Pun Akan Menjadi Error Jika Mengakses Variable Tersebut
    - Agar Lebih Aman Kita (Tidak Rekomendasikan Menggunakan Function is_null), Kita Bisa Menggunakan Function isset($Variable) Untuk Mengecek Apakah Sebuah Variable Ada Dan Nilainya Tidak NULL
*/



?>