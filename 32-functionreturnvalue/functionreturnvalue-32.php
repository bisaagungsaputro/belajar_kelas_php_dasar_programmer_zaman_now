<?php


// *** Kode : Function Return Value (1) ***
    function sum (int $first, int $last) {
        // Cara 1 Menggunakan return
        return $first + $last;

        // Cara 2 Menggunakan return
        // $total = $first + $last;
        // return $total;
    }

    $result = sum(10, 10);
    var_dump($result);

// *** Kode : Function Return Value (2) ***
    function getFinalValue(int $value) {
        if ($value >= 80) {
            return "A";
        }

        else if ($value >= 70) {
            return "B";
        }

        else if ($value >= 70) {
            return "B";
        }

        else if ($value >= 60) {
            return "C";
        }

        else if ($value >= 50) {
            return "D";
        }

        else if ($value >= 40) {
            return "E";
        }

        else {
            return "F";
        }
    }

$switch = getFinalValue(88);
var_dump($switch);

// *** Kode : Return Type Declarations (1) ***
// function jumbo Punya Kembalian Harus Berupa  Tipe Data int, Kegunaan Untuk Memberikan Komentar (Lebih Terjaga Dari Lebih Dikit Errornya)
    function jumbo ($awal, $akhir): int {
        return $awal + $akhir;
    }

$menang = jumbo(60, 10);
var_dump($menang);

// *** Kode : Return Type Declarations (2) ***
// function mini Punya Kembalian Berupa Tipe Data string, Kegunaan Untuk Memberikan Komentar (Lebih Terjaga Dari Lebih Dikit Errornya)
    function mini ($gabungan): string {
        if ($gabungan >= 80) {
            return "A";
        }

        else if ($gabungan >= 70) {
            return "B";
        }

        else if ($gabungan >= 70) {
            return "B";
        }

        else if ($gabungan >= 60) {
            return "C";
        }

        else if ($gabungan >= 50) {
            return "D";
        }

        else if ($gabungan >= 40) {
            return "E";
        }

        else {
            return "F";
        }
    }

$declarations = mini(80);
var_dump($declarations);


// ---


// *** Function Return Value ***


// *** Function Return Value ***
// *** Kode : Function Return Value (1) ***
// *** Kode : Function Return Value (2) ***
// *** Return Type Declarations ***
// *** Kode : Return Type Declarations ***


// *** Function Return Value ***
/*
    Function Return Value
    - Secara Default function Itu Tidak Menghasilkan Value Apapun, Namun Jika Kita Ingin,
      Kita Bisa Membuat function Mengembalikan Nilai
    - Dan Di Dalam Block function, Untuk Menghasilkan Nilai Tersebut,
      Kita Harus Menggunakan Kata Kunci return, Lalu Diikuti Dengan Kata Yang Ingin Dihasilkan
    - Kita Hanya Bisa Menghasilkan 1 Jenis Data Di Sebuah function, Tidak Bisa Lebih Dari Satu / Tidak Bisa Mengembalikan 2 Data Sekaligus
*/

// *** Kode : Function Return Value (1) ***
/*
    Kode : Function Return Value (1)
    function sum (int $first, int $last) {
        return $first + $last;
    }

    $total = sum(10, 10);
    var_dump($total);

    $total = sum(20, 20);
    var_dump($total);
*/

// *** Kode : Function Return Value (2) ***
/*
    Kode : Function Return Value (2)
    function getFinalValue(int $value) {
        if ($value >= 80) {
            return "A";
        }

        else if ($value >= 70) {
            return "B";
        }

        else if ($value >= 70) {
            return "B";
        }

        else if ($value >= 60) {
            return "C";
        }

        else if ($value >= 50) {
            return "D";
        }

        else if ($value >= 40) {
            return "E";
        }

        else {
            return "F";
        }
    }

    $switch = getFinalValue(70);
    var_dump($switch);

    $switch = getFinalValue(30);
    var_dump($switch);
*/

// *** Return Type Declarations ***
/*
    Return Type Declarations
    - Sama Seperti Pada Argument, Pada return Value Pun Kita Bisa Mendeklarasikan Tipe Datanya
    - Hal Ini Selain Mempermudahkan Kita Ketika Membaca Tipe Data Kembalian function,
      Bisa Juga Digunakan Untuk Menjaga Jangan Sampai Kita Mengembalikan Tipe Data Yang Salah Di function
    - Untuk Mendeklarasikan Tipe Data Kembalian function, Setelah Kurung () Kita Bisa Tambahkan :
      Diikuti Tipe Data Kembaliannya
*/

// *** Kode : Return Type Declarations ***
/*
    Kode : Return Type Declarations
    function jumbo (int $awal, int $akhir): int {
        return $awal + $akhir;
    }

    function mini (int $gabungan): string {
        if ($value >= 80) {
            return "A";
        }

        else if ($value >= 70) {
            return "B";
        }

        else if ($value >= 70) {
            return "B";
        }

        else if ($value >= 60) {
            return "C";
        }

        else if ($value >= 50) {
            return "D";
        }

        else if ($value >= 40) {
            return "E";
        }

        else {
            return "F";
        }
    }
    }
*/



?>