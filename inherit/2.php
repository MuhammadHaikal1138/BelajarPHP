<?php
class Kendaraan {
  public $warna;
  public $jumlahRoda;

  public function __construct($warna, $jumlahRoda) {
    $this->warna = $warna;
    $this->jumlahRoda = $jumlahRoda;
  }

  public function jalankanMesin() {

    return "Mesin kendaraan dinyalakan!";
  }
}

class Mobil extends Kendaraan {
  public $jenisBahanBakar;

  public function __construct($warna, $jumlahRoda, $jenisBahanBakar) {
    parent ::__construct($warna, $jumlahRoda);  // Memanggil konstruktor class induk
    $this->jenisBahanBakar = $jenisBahanBakar;
  }

  public function ubahGigi($gigi) {
    echo "Mobil sedang berpindah gigi...$gigi";
  }
}

$mobil = new Mobil("Merah", 4, "bensin");

echo "Mobil berwarna " . $mobil->warna . " memiliki " . $mobil->jumlahRoda . " roda dan menggunakan bahan bakar " . $mobil->jenisBahanBakar . " ";
$mobil-> ubahGigi(2);
echo " ";
echo $mobil->jenisBahanBakar ? $mobil-> jalankanMesin() : "Mesin mati";  // Meneruskan method dari class induk