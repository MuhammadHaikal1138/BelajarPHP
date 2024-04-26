<?php
    class toko {
        protected function beli(){
            return "yeyyy beli baru!";
        }
// ----------------------------------------Untuk membuat protected menjadi public------------------------------------------------------
        public function getBeli(){
            return $this->beli();
        }
    }
// ---------------------------------------------------------------------------------------------------------------------------------------

    class laptop extends toko {
        public function beli_laptop(){
            return $this->beli();
        }
    }
    class komputer extends laptop {
        public function beli_komputer(){
            return $this->beli_laptop();
        }
    }
    $toko = new toko();
    $laptop = new laptop();
    $komputer = new komputer();

    echo $laptop->beli_laptop();
    echo "<br>";
    echo $toko->getBeli();


?>