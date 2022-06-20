<?php


// *** Goto : Operator ***
goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

// *** Kode : Goto Operator Di Loop ***
$counter = 1;
while (true) {
    echo "While Loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop";


// ---


// *** Goto Operator ***


// *** Goto Operator - Tidak Sarankan Digunakan Dalam Skala Banyak Karena Semakin Banyak Akan Makin Membinggungkan Pada Kode Program Kita ***
// *** Kode : Goto Operator ***
// *** Kode : Goto Operator Di Loop ***


// *** Goto Operator - Tidak Sarankan Digunakan Dalam Skala Banyak Karena Semakin Banyak Akan Makin Membinggungkan Pada Kode Program Kita ***
/*
    Goto Operator
    - Salah Satu Fitur Yang Sebenarnya Jarang Sekali Digunakan Di PHP Adalah goto Operator
    - Kenapa Jarang Digunakan Karena Jika Terlalu Banyak Menggunakan goto Operator, Kode Program Aplikasinya Akan Mudah Membingungkan Yang Membaca Kodenya
    - Goto Adalah Fitur Dimana Kita Bisa Loncat Ke Kode Program Sesuai Dengan Keinginan Kita
    - Agar goto Bisa Loncat Ke Kode Program, Kita Harus Membuat Label Di PHP Dengan Menggunakan Nama Label Lalu Diakhiri : (Colon)

    => Banyak Membuat goto Membuat Kita Makin Pusing

    => Pak Eko Kurniawan Khannedy, Bahkan Tidak Pernah Pakai Sama Sekali Menggunakan goto Di Aplikasi Saya
*/

// *** Kode : Goto Operator ***
/*
    Goto : Operator
    goto a;
    echo "Heelo A" . PHP_EOL;

    a;
    echo "Hello A" . PHP_EOL;
*/

// *** Kode : Goto Operator Di Loop ***
/*
    Kode : Goto Operator Di Loop
    $counter = 1;
    while (true) {
        echo "While Loop $counter" . PHP_EOL;
        $counter++;
        if ($counter > 10) {
            goto end;
        }
    }

    end:
    echo "End Loop";
*/



?>