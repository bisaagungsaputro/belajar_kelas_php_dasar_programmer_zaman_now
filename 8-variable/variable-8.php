<?php


// *** Kode : Variable ***
$age = 23;
$alamat = "Jalan Raya Cilangkap";
$name = "Agung Saputro";

echo "Name : ";
echo $name;
echo "\n";
echo "Umur : ";
echo $age;
echo "\n";
echo "Alamat : ";
echo $alamat;
echo "\n";

// *** Kode : Kode Variables - Tidak Direkomendasikan ***
    $mahasiswa = "Atika Nur Aini";
    $$mahasiswa = "Vira Agistasari";

    echo "Contoh 1 : ";
    echo $mahasiswa;
    echo "\n";

    echo "Contoh 2 : ";
    echo $mahasiswa;
    echo "\n";

    
// ---


// *** Variable ***


// *** Variable ***
// *** Kode : Variable ***
// *** Variable Variables - Tidak Direkomendasikan ***
// *** Kode : Kode Variables - Tidak Direkomendasikan ***


// *** Variable ***
/*
    Variable
    - Variable Adalah Tempat Untuk Menyimpan Data Sehingga Bisa Kita Gunakan Lagi Di Kode Program Selanjutnya
    - Di PHP Variable Bisa Menampung Berbagai Jenis Tipe Data Dan Bisa Berubah - Ubah Tipe Data / Data Lama Di Timpa Dengan Data Baru, Jadi Data Baru Yang MuncuL Dan Lama Kehapus
    - Untuk Membuat Variable Kita Bisa Menggunakan Tanda $(dolar) Diikuti Dengan Nama Variable Nya
    - Penamaan Variable Tidak Boleh Mengandung Spasi
      Contohnya :
      $a = "Agung Saputro";     => Tipe Data String
      $b = 23;                  => Tipe Data INT
      $c = TRUE;                => Tipe Data BOOLEAN
*/

// *** Kode : Variable ***
/*
    Kode : Variable
    $name = "Agung Saputro, Umur : $age";
    $age = 23;
    $alamat = "Jalan Raya Cilangkap";

    echo "Name : ";
    echo $name;
    echo "\n";
    echo "Alamat : ";
    echo "$alamat;
*/

// *** Variable Variables - Tidak Direkomendasikan ***
/*
    Variable Variables
    - PHP Memiliki Kemampuan Variable Variables, Yaitu Membuat Variable Dari String Value Variable
    - Walaupun Fitur Ini Ada, Ini Sangat Membingungkan Jika Digunakan Secara Luas, 
      Jadi Disarankan Untuk Tidak Menggunakan Fitur Ini Kecuali Emang Perlu Digunakan
    - Untuk Membuat Variable Dari Value Variable Kita Bisa Menggunakan $$ Diikuti Dengan Nama Variablenya
*/

// *** Kode : Kode Variables - Tidak Direkomendasikan ***
/*
    Kode : Variable Variables
    $mahasiswa = "Atika Nur Aini";
    $$mahasiswa = "Vira Agistasari";

    echo "Contoh 1 : ";
    echo $mahasiswa;
    echo "\n";

    echo "Contoh 2 : ";
    echo $mahiswa;
    echo "\n";
*/

?>