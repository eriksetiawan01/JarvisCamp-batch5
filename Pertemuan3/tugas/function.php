<?php
Angka1(1, 10);

function Angka1($angkaPertama, $angkaTerakhir) {
    if ($angkaPertama > $angkaTerakhir) {
        $temp = $angkaPertama;
        $angkaPertama = $angkaTerakhir;
        $angkaTerakhir = $temp;
    }

    for ($angka = $angkaPertama; $angka <= $angkaTerakhir; $angka++) {
        if ($angka % 2 != 0)  {
            echo $angka . " ";
        }
    }
}

echo "<br>";

Angka2(1, 10);

function Angka2($angkaPertama, $angkaTerakhir) {
    if ($angkaPertama > $angkaTerakhir) {
        $temp = $angkaPertama;
        $angkaPertama = $angkaTerakhir;
        $angkaTerakhir = $temp;
    }
    for ($angka = $angkaPertama; $angka <= $angkaTerakhir; $angka++) {
        if ($angka % 2 == 0) {
            echo  $angka . " ";
        }
    }
}

echo "<br>";

echo Angka3(20, 5, 'tambah') . "\n"; 
echo Angka3(20, 5, 'kurang') . "\n";
echo Angka3(20, 5, 'kali') . "\n"; 
echo Angka3(20, 5, 'bagi') . "\n"; 
echo Angka3(20, 0, 'bagi') . "\n"; 
echo Angka3(20, 5, 'modulus') . "\n";

function Angka3($angka1, $angka2, $operasi) {
    if ($operasi == 'tambah') {
        return $angka1 + $angka2;
    } elseif ($operasi == 'kurang') {
        return $angka1 - $angka2;
    } elseif ($operasi == 'kali') {
        return $angka1 * $angka2;
    } elseif ($operasi == 'bagi') {
        if ($angka2 != 0) {
            return $angka1 / $angka2;
        } else {
            return "<br> Error: Pembagian dengan nol tidak diperbolehkan.";
        }
    } else {
        return "<br> Error: Operasi tidak valid. Gunakan 'tambah', 'kurang', 'kali', atau 'bagi'.";
    }
}
?>
