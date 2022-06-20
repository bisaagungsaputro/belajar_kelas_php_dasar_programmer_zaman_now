<?php


// *** Kode : Break ***
$counter = 1;

// Perulangan Tanpa Henti, Cara Atasi Pencet Ctrl C
while (true) {
    echo "Hello Break : $counter" . PHP_EOL;
    $counter++;

    /*
    - Kasih Kondisi Supaya Perulangannya Berhenti
    - Jika 11 > 10, Dia Akan true Maka Dia Akan Berhenti / break Perulangannya
    */
    if ($counter > 10) {
        break;
    }
}

// *** Kode : Continue ***
for ($continue = 0; $continue <= 20; $continue++) {
    if ($continue % 2 == 0) {
        continue;
    }
    echo "Hello Continue : $continue" . PHP_EOL;
}

// *** Kode : Continue - Bilangan Ganjil ***
for ($ganjil = 0; $ganjil <= 30; $ganjil++) {
    // Menggunakan if untuk Menggunakan Bilangan Ganjil
    if ($ganjil % 2 == 0) {
        continue;
    }
    echo "Hello Continue Ganjil : $ganjil" . PHP_EOL;
}

// *** Kode : Continue - Bilangan Genap ***
for ($ganjil = 0; $ganjil <= 30; $ganjil++) {
    // Menggunakan if untuk Menggunakan Bilangan Ganjil
    if ($ganjil % 2 == 1) {
        continue;
    }
    echo "Hello Continue Ganjil : $ganjil" . PHP_EOL;
}


// ---


// *** Break Dan Continue ***


// *** Break Dan Continue ***
// *** Kode : Break ***
// *** Kode : Continue ***


// *** Break Dan Continue ***
/*
    Break Dan Continue
    - Pada switch Statement, Kita Sudah Mengenal Kata Kunci break, Yaitu Untuk Mengehentikan case Dalam switch
    - Sama Dengan Pada Perulangan, break Juga Digunakan Untuk Mengentikan Seluruh Perulangan
    - Namun Berbeda Dengan Continue, Continue Digunakan Untuk Menghentikan Perulangan Saat Ini, Lalu Melanjutkan Ke Perulangan Selanjutnya
*/

// *** Kode : Break ***
/*
    Kode : Break
    $counter = 1;

    while (true) {
        echo "Hello Break : $counter" . PHP_EOL;
        $counter++;

        if ($counter > 10) {
            break;
        }
    }
*/

// *** Kode : Continue ***
/*
    Kode : Continue
    for ($continue = 0; $continue <= 100; $continue++) {
        if ($continue % 2 == 0) {
            continue;
        }
        echo "Hello Continue : $continue" . PHP_EOL;
    }
*/



?>