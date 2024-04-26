<?php 
    class tag {
        public function __construct()
        {
            echo"ini berasal dari constructor laptop<br>";
        }
        public function laptop($nama,$laptop){
            echo"Hidupkan Laptop $laptop milik $nama<br>";
        }
        public function __destruct()
        {
            echo "ini berasal dari destructor laptop<br>objek dihancurkan";
        }
    }
    $laptop = new tag;
    $laptop->laptop("Andi","lenovo");
?>