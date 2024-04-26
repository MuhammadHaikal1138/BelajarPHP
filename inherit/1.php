<?php
class hewan {
  protected $nama;
  protected $kaki;
  public function __construct($nama, $kaki) {
    $this->nama = $nama;
    $this->kaki = $kaki;
  }
  public function intro() {
    echo "Aku hewan bernama {$this->nama} aku berkaki {$this->kaki}.";
  }
  public function message() {
    echo "Hewan apakah aku ?,   ";
  }
}

class anjing extends hewan {
}

class bebek extends hewan {

}

class kucing extends hewan {

}

$anjing = new anjing("Anjing", "Empat");
$anjing->message();
$anjing->intro();

echo "<br>";
$kucing = new kucing("Kucing", "Empat");
$kucing->message();
$kucing->intro();

echo "<br>";
$bebek = new bebek("Bebek", "Dua");
$bebek->message();
$bebek->intro(); 

echo "<br>";