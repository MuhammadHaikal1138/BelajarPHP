<?php
    class laptop{
        protected $pemilik ="Haikal";
         public function akses_pemilik(){
            return $this->pemilik;
         }
         protected function hidupkan_laptop(){
            return "Hidupkan Laptop";
         }
         public function getPemilik(){
            return $this->pemilik;
         }
         public function getHidupkanLaptop(){
            return $this->hidupkan_laptop();
         }
         public function paksa_hidup(){
            return $this->hidupkan_laptop();
         }
    }
    $laptop = new laptop;

    echo $laptop->akses_pemilik();
    echo "<br>";
    echo $laptop->getPemilik();
    echo "<br>";
    echo $laptop->paksa_hidup();
    echo "<br>";
    echo $laptop->getHidupkanLaptop();
?>