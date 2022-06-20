<?php


// *** Kode : Perulangan Tanpa Henti ***
// Perulangan Tanpa Henti Karena Kondisinya Bersifat true
// for (; ;) {
//  echo "Hello for Loop Unlimited" . PHP_EOL;
// }

// *** Kode : Perulangan Dengan Kondisi ***
$counter = 1;

for ( ; $counter <= 10;){
    echo "Perulangan Sampai Ke : $counter" . PHP_EOL;
    $counter++;
}

// *** Kode : Perulangan Dengan Init Statement ***
for ($barbar = 1; $barbar <= 10;) {
    echo "Hello For Loop Ke : $barbar" . PHP_EOL;
    $barbar++;
}

// *** Kode : Perulangan Dengan Post Statement ***
for ($hari = 1; $hari <= 10; $hari++){
    echo "Hari Ke Berapa Sekarang : $hari" . PHP_EOL;
}

// *** Kode : Perulangan Dengan Post Statement - Decrement ***
for ($hari = 10; $hari >= 1; $hari--){
    echo "Hari Ke Berapa Sekarang : $hari" . PHP_EOL;
}

// *** Kode : Syntax Alternatif For Loop : endfor ***
for ($bulan = 1; $bulan <= 10; $bulan++) :
    echo "Bulan Ke Berapa Sekarang : $bulan" . PHP_EOL;
endfor;


// ---


// *** For Loop ***


// *** For Loop ***
// *** Syntax Perulangan For ***
// *** Kode : Perulangan Tanpa Henti ***
// *** Kode : Perulangan Dengan Kondisi ***
// *** Kode : Perulangan Dengan Init Statement ***
// *** Kode : Perulangan Dengan Post Statement ***
// *** Kode : Syntax Alternatif For Loop : endfor ***


// *** For Loop ***
/*
    For Loop
    - for Adalah Salah Satu Kata Kunci Yang Bisa Digunakan Untuk Melakukan Perulangan
    - Block Kode Yang Terdapat Di Dalam for Akan Selalu Diulangi Selama Kondisi for Terpenuhi
*/

// *** Syntax Perulangan For ***
/*
    Syntax Perulangan For
    for (Init Statement; Kondisi; Post Statement){
        //* Block Perulangan
    }

    - Init Statement Akan Dieksekusi Hanya Sekali Di Awal Sebelum Perulangan
    - Kondisi Akan Dilakukan Pengecekan Dalam Setiap Perulangan, Jika true Perulangan Akan Dilakukan, Jika false Perulangan Akan Berhenti
    - Post Statement Akan Dieksekusi Setiap Kali Diakhir Perulangan
    - Init Statement, Kondisi Dan Post Statement Tidak Wajib Diisi, Jika Kondisi Tidak Diisi, Berarti Kondisi Selalu Bernilai true
*/

// *** Kode : Perulangan Tanpa Henti ***
/*
    Kode : Perulangan Tanpa Henti
    //* Perulangan Tanpa Henti Karena Kondisinya Bersifat true
    for (; ;) {
        echo "Hello for Loop Unlimited" . PHP_EOL;
    }
*/

// *** Kode : Perulangan Dengan Kondisi ***
/*
    Kode : Perulangan Dengan Kondisi
    $counter = 1;

    for (; $counter <= 10;){
        echo "Perulangan Sampai Ke $counter" . PHP_EOL;
    $counter++;
}
*/

// *** Kode : Perulangan Dengan Init Statement ***
/*
    Kode : Perulangan Dengan Init Statement
    for ($barbar = 1; $barbar <= 10;) {
        echo "Hello For Loop : " . PHP_EOL;
        $barbar++;
    }
*/

// *** Kode : Perulangan Dengan Post Statement ***
/*
    Kode : Perulangan Dengan Post Statement
    for ($hari = 1; $hari <= 10; $hari++;){
        echo "Hari Ke Berapa Sekarang : $hari" . PHP_EOL;
    }
*/

// *** Kode : Syntax Alternatif For Loop : endfor ***
/*
    Kode : Syntax Alternatif For Loop
    for ($bulan = 1; $bulan <= 10; $bulan++) :
        echo "Bulan Ke Berapa Sekarang : $bulan" . PHP_EOL;
    endfor;
*/



?>