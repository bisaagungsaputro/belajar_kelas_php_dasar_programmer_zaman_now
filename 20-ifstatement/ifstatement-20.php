<?php


// *** Kode : if Statement ***
$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
}

// *** Kode : Else Statement ***
$value = 70;
$hadir = 90;

if ($value >= 75 && $hadir >= 75) {
    echo "Selamat Anda Lulus" . PHP_EOL;
}
// Jika Tidak Terpenuhi, Akan Eksekusi else
else {
    echo "Maaf, Anda Tidak Lulus" . PHP_EOL;
}


// *** Kode : Else If Statement ***
// Rekomendasikan, Karena Lebih Familiar Semua Bahasa Pemprograman Lain
$baik = 70;
$jahat = 90;

if ($baik >= 80 && $jahat >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
}
else if ($baik >= 70 && $jahat >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
}
else if ($baik >= 60 && $jahat >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
}
else if ($baik >= 50 && $jahat >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
}
else {
    "Anda Remedial" . PHP_EOL;
}

// *** Kode : If Statement Dengan Syntax Alternatif ***
// Untuk Menggunakan : endif, Wajib Pakai elseif (Jangan Pakai Spasi / else if)
$kiri = 70;
$kanan = 70;

if ($kiri >= 80 && $kanan >= 80) :
echo "Nilai Anda A, Anda Lulus" . PHP_EOL;

elseif ($kiri >= 70 && $kanan >= 70) :
echo "Nilai Anda B, Anda Lulus" . PHP_EOL;

elseif ($kiri >= 60 && $kanan >= 60) :
echo "Nilai Anda C, Anda Remedial" . PHP_EOL;

elseif ($kiri >= 50 && $kanan >= 50) :
echo "Nilai Anda D, Anda Remidial" . PHP_EOL;

else :
"Maaf, Anda Harus Mengulang Pelajaran" . PHP_EOL;
endif;


// ---


// *** If Statement ***


// *** If Statement ***
// *** Syntax If Statement ***
// *** Kode : If Statement ***
// *** Else Statement ***
// *** Syntax Else Statement ***
// *** Kode : Else Statement ***
// *** Else If Statement ***
// *** Syntax Else If Statement ***
// *** Kode : Else If Statement ***
// *** Syntax Alternatif ***
// *** Kode : If Statement Dengan Syntax Alternatif ***


// *** If Statement ***
/*
    If Statement
    - Dalam PHP, if Adalah Salah Satu Kunci Yang Digunakan Untuk Percabangan
    - Percabangan Artinya Kita Bisa Mengeksekusi Program Tertentu Ketika Suatu Kondisi Terpenuhi
    - Hampir Di Semua Bahasa Pemprograman Mendukung if expression
*/

// *** Syntax If Statement ***
/*
    Syntax If Statement
    //* Jika Nilai true, Maka Langsung Dieksekusi, Kalau Ini false, Maka Ini Tidak Akan Dieksekusi
    if (expression)
        statement;

    //* Lebih Dari 1 Statement, Menggunakan {} => Rekomendasikan
    if (expression) {
        statement-1;
        statement-2;
    }
*/

// *** Kode : If Statement ***
/*
    Kode : If Statement
    $nilai = 70;
    $absen = 90;

    //* if (Kalau) Nilai Lebih Dari Sama Dengan 75 Dan Absen Lebih Dari Sama Dengan 75
    //* Nilai Dieksekusi Menjadi Boolean, Absen Dieksekusi Menjadi Boolean, Lalu Digabungkan Menggunakan Operator Logika And, Hasilnya Boolean Lagi Kalau Semua Kondisi Terpenuhi / true, Maka Yang Ini Akan Dieksekusi, Kalau Ini false, Maka Tidak Akan Dieksekusi
    if ($nilai >= 75 && $absen >= 75) {
        echo "Anda Lulus" . PHP_EOL;
    }
*/

// *** Else Statement ***
/*
    Else Statement
    - Block if Akan Dieksekusi Ketika Kondisi if Bernilai true
    - Kadang Kita Ingin Melakukan Eksekusi Program Tertentu Jika Kondisi if Bernilai false
    - Hal Ini Dilakukan Menggunakan else Statement
*/

// *** Syntax Else Statement ***
/*
    Syntax Else Statement
    if (expression)
        statement;
    else statement;

    //* Rekomendasikan
    if (expession) {
        statement-1;
        statement-2;
    }
    else {
        statement;
    }
*/

// *** Kode : Else Statement ***
/*
    Kode : Else Statement
    $value = 70;
    $hadir = 90;

    if ($value >= 75 && $hadir >= 75) {
        echo "Selamat Anda Lulus" . PHP_EOL;
    }
    else {
        echo "Maaf Anda Tidak Lulus" . PHP_EOL;
    }
*/

// *** Else If Statement ***
/*
    Else If Statement
    - Kadang Kala Dalam if, Kita Butuh Membuat Beberapa Kondisi
    - Kasus Seperti Ini, Di PHP Kita Bisa Menggunakan else if Statement
    - else if Di PHP Bisa Lebih Dari Satu
    - Kode else if Di PHP Bisa Menggunakan else if (Rekomendasikan Karena Familiar Di Bahasa Pemprograman Lain) Atau elseif (Digabung)
*/

// *** Syntax Else If Statement ***
/*
    if (expression)
        statement;
    elseif (expression)
        statement;
    else statement;

    //* Rekomendasikan
    if (expression) {
        statement-1;
        statement-2;
    }
    else if (expression) {
        statement;
    }
    else if (expression) {
        statement;
    }
    else {
        statement;
    }
*/

// *** Kode : Else If Statement ***
/*
    Kode : Else If Statement
    if ($baik >= 80 && $jahat >= 80) {
        echo "Nilai Anda A" . PHP_EOL;
    }
    else if ($baik >= 70 && $jahat >= 70) {
        echo "Nilai Anda B" . PHP_EOL;
    }
    else if ($baik >= 60 && $jahat >= 60) {
        echo "Nilai Anda C" . PHP_EOL;
    }
    else if ($baik >= 50 && $jahat >= 50) {
        echo "Nilai Anda D" . PHP_EOL;
    }
    else {
        "Anda Remedial" . PHP_EOL;
    }
*/

// *** Syntax Alternatif ***
/*
    Syntax Alternatif
    - Selain Menggunakan Kurung Kurawal {}, PHP Juga Menyediakan Syntax Alternatif Untuk Menggunakan if, Yaitu Dengan Menggunakan : (Titik Dua)
    - Namun Untuk Menggunakan Ini, Kita Harus Menggunakan Kata Kunci endif Diakhir if Statement
*/

// *** Kode : If Statement Dengan Syntax Alternatif ***
/*
    Kode : If Statement Dengan Syntax Alternatif
        if ($baik >= 80 && $jahat >= 80) :
        echo "Nilai Anda A" . PHP_EOL;

    else if ($baik >= 70 && $jahat >= 70) :
        echo "Nilai Anda B" . PHP_EOL;

    else if ($baik >= 60 && $jahat >= 60) :
        echo "Nilai Anda C" . PHP_EOL;
    
    else if ($baik >= 50 && $jahat >= 50) :
        echo "Nilai Anda D" . PHP_EOL;
    
    else :
        "Anda Remedial" . PHP_EOL;
    endif;
*/



?>