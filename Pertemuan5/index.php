<?php

class Buah {
    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama, $warna, $rasa) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }
    public function jatuh(){
        echo "$this->nama jatuh \n";
    }
}

class Jeruk extends Buah{
    public $jenis;
    public function __construct($jenis, $warna, $rasa){
        parent::__construct("Jeruk", $warna, $rasa);
        $this->jenis = $jenis;
    }

    public function printJenis(){
        echo "Ini adalah Jeruk $this->jenis dengan warna $this->warna dan rasa yang $this->rasa \n";
    }
}

class Mobil {
    public $warna;
    public $merk;

    public function __construct($warna, $merk){
        $this->warna = $warna;
        $this->merk = $merk;
    }
    public function berjalan(){
        echo "mobil $this->merk berjalan \n";
    }
    public function mengerem(){
        echo "mobil $this->merk mengerem \n";
    }
}

$apel = new Jeruk("Apel", "Merah", "Manis");
$apel->printJenis();

$apel->nama = "Apel";
$apel->warna = "Merah";
$apel->rasa = "Manis";
$apel->jatuh();

$toyota = new Mobil("Silver", "Toyota");
$toyota->merk = "Toyota";
$toyota->warna = "Silver";
$toyota->berjalan();
$toyota->mengerem();
echo "Mobil $toyota->merk berwarna $toyota->warna";

echo "\n";
?>