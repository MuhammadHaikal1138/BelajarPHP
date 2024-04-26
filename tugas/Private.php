<?php
    class komputer{
        private $JenisProcessor = "intel core i7-4790 3.6Ghz";

        public function tampilkan_processor(){
            echo $this->JenisProcessor;
        }
        public function getJenisProcessor(){
            echo "memunculkan $this->JenisProcessor";
        }
    }
    $komputer_baru = new komputer;

    echo $komputer_baru->tampilkan_processor();
    echo "<br>";
    echo $komputer_baru->getJenisProcessor();
?>