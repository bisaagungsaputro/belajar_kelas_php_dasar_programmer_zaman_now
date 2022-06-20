<?php


// *** Kode : String Function ***
    // "1, 2, 3 , 4, 5"
    var_dump(join(", ", [1, 2, 3, 4, 5]));
    echo "\n";
    /*
    "Eko"
    "Kurniawan"
    "Khannedy"
    */
    var_dump(explode(" ", "Eko Kurniawan Khannedy"));
    echo "\n";
    // Menjadi Huruf Kecil Semua
    var_dump(strtolower("Atika Nur Aini"));
    echo "\n";
    // Menjadi Huruf Besar Semua
    var_dump(strtoupper("Vira Agistasari"));
    echo "\n";
    // Mengambil Dari Dari 0 Sampai 3 - Hasilnya Mar Karena M Dimulai Dari 0, Sedangkan 3 (M,A,R)
    var_dump(substr("Maria Vania", 0, 3));
    // Di Depan Dan Di Belakangnya Di hilangkan
    echo (trim("             Agung        Saputro           ")) . PHP_EOL;
    // Tanpa trim
    echo "             Agung        Saputro           ";


// ---


// *** String Function ***


// *** String Function ***
// *** Contoh String Function ***
// *** Kode : String Function ***


// *** String Function ***
/*
    String Function
    - Sebelumnya Saya Pernah Menggunakan Beberapa function Bawaan Dari PHP Untuk Memanipulasi Data String
    - Sebenarnya Banyak Sekali function Bawaan PHP Yang Bisa Kita Gunakan Untuk Memanipulasi String
    - link function Bawaan PHP Untuk Memanipulasi Data String :
      https://www.php.net/manual/en/ref.strings.php
*/

// *** Contoh String Function ***
/*
    Contoh String Function
    Function                                    Keterangan
    join() / implode()                          Menggabungkan array Menjadi String
    explode()                                   Memecah String Menjadi array
    strtolower()                                Mengubah String Menjadi Lowercase
    strtoupper()                                Mengubah String Menjadi Uppercase
    substr()                                    Mengambil Sebagian Menjadi String
    trim()                                      Menghapus Whitespace Di Depan Dan Di Belakang String
*/

// *** Kode : String Function ***
/*
    Kode : String Function
    var_dump(join(", ", [1, 2, 3, 4, 5]));
    var_dump(explode(" ", "Eko Kurniawan Khannedy"));
    var_dump(strtolower("Atika Nur Aini"));
    var_dump(strtoupper("Vira Agistasari"));
    var_dump(substr("Maria Vania", 9, 7));
    var_dump(trim("             Agung                   "));
*/



?>