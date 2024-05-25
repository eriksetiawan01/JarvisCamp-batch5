<?php

// Definisi class Kendaraan
class Kendaraan {
    // Deklarasi properti
    public $merk;
    public $warna;

    // Konstruktor untuk inisialisasi properti
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Method untuk menampilkan informasi kendaraan
    public function tampilkanInfo() {
        echo "Kendaraan ini adalah $this->merk berwarna $this->warna.";
    }
}

// Definisi class baru yang mewarisi class Kendaraan
class Mobil extends Kendaraan {
    // Properti baru
    public $tipe;

    // Konstruktor baru yang menginisialisasi semua properti
    public function __construct($merk, $warna, $tipe) {
        // Memanggil konstruktor parent
        parent::__construct($merk, $warna);
        // Inisialisasi properti baru
        $this->tipe = $tipe;
    }

    // Method baru untuk menampilkan informasi mobil
    public function tampilkanInfoMobil() {
        echo "Mobil ini adalah $this->merk berwarna $this->warna dengan tipe $this->tipe.";
    }
}

// Membuat object berdasarkan class Mobil
$mobilBaru = new Mobil("Toyota", "Hitam", "SUV");

// Memanggil method untuk menampilkan informasi mobil
$mobilBaru->tampilkanInfoMobil();

?>
