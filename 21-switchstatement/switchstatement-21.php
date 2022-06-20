<?php


// *** Kode : If Statement ***
$nilai = "A";

if ($nilai == "A") {
    echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
}
else if ($nilai == "B" || $nilai == "C") {
    echo "Anda Lulus Dengan Baik" . PHP_EOL;
}
else if ($nilai == "D") {
    echo "Anda Tidak Lulus" . PHP_EOL;
}
else {
    echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}

// *** Kode : Switch Statement ***
// Rekomendasikan, Karena Lebih Familiar Di Semua Bahasa Pemprograman Lain
$value = "B";
switch ($value) {
    case "A":
        echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus Dengan Baik" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}

// *** Kode : Switch Statement Syntax Alternatif ***
$angka = "60";
switch ($angka) :
    case "90":
        echo "Anda Juara 1" . PHP_EOL;
        break;
    case "80":
    case "70":
        echo "Anda Juara 2" . PHP_EOL;
        break;
    case "60":
        echo "Anda Juara 3" . PHP_EOL;
        break;
    default:
        echo "Maaf, Anda Tidak Juara" . PHP_EOL;
endswitch;


// ---


// *** Switch Statement ***


// *** Switch Statement ***
// *** Kode : Switch Statement ***
// *** Syntax Alternatif Switch Statement ***
// *** Kode : Switch Statement Syntax Alternatif ***


// *** Switch Statement ***
/*
    Switch Statement
    - Kadang Kita Hanya Butuh Menggunakan Kondisi Sederhana if Statement, Seperti Hanya Menggunakan Perbandingan ==
    - swtich Adalah Statement Percabangan Yang Sama Dengan if, Namun Lebih Sederhana Cara Pembuatannya
    - Kondisi Di switch Statement Hanya Untuk Perbandingan ==
*/

// *** Kode : Switch Statement ***
/*
    Kode : Switch Statement
    switch ($nilai) {
        case "A":
            echo "Anda Lulus Dengan Sangat Baik" . PHP_EOL;
            break;
        case "B":
        case "C":
            echo "Anda Lulus Dengan Baik" . PHP_EOL;
            break;
        case "D":
            echo "Anda Tidak Lulus" . PHP_EOL;
            break;
        default:
            echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
    }
*/

// *** Syntax Alternatif Switch Statement ***
/*
    Syntax Alternatif Switch Statement
    - Sama Seperti if Statement, switch Statement Juga Bisa Tanpa Menggunakan Kurung Kurawal {}
    - Namun Diakhir switch Statement, Kita Harus Menambahkan Kata Kunci endswitch
*/

// *** Kode : Switch Statement Syntax Alternatif ***
/*
    Kode : Switch Statement Syntax Alternatif
    $angka = "90";
    switch ($angka) :
    case "90":
        echo "Anda Juara 1" . PHP_EOL;
        break;
    case "80":
    case "70":
        echo "Anda Juara 2" . PHP_EOL;
        break;
    case "60":
        echo "Anda Juara 3" . PHP_EOL;
        break;
    default:
        echo "Maaf, Anda Tidak Juara" . PHP_EOL;
    endswitch;
*/



?>