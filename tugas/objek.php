<?php 
    class orang {
        public $nama ;
        public $nomor;
        public function __construct($nama,$nomor){
            $this->nama = $nama;
            $this->nomor = $nomor;
        }
        public function showNama(){
            echo "Laptop $this->nomor ini milik : <b>$this->nama</b><br>";
        }
    }
    $orang = new orang('Anto',1);
    $orang->showNama();
    $orang2 = new orang ('Andi',2);
    $orang2->showNama();
    $orang3 = new orang ('Dina',3);
    $orang3->showNama();
?>