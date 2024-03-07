<?php
    $string = "Hai Aku Muhammad Haikal";
    $integer =11;
    $float = 45.4;
    $boolean = true;

    // echo "ini adalah tipe data string ". $string ."<br>";
    // echo "ini adalah tipe data integer ". $integer ."<br>";
    // echo "ini adalah tipe data float ". $float ."<br>";
    // echo "ini adalah tipe data boolean ". $boolean ."(True) <br>";



    // tipe data string menggunakan metode single quoted
    $string1 = 'ini adalah string sederhana';
    $string2 = 'string juga tidak otomatis ditampilkan : $string1' ;

    echo $string1; echo "<br>";
    echo $string2;

    echo "<br>"; echo "<br>";
    // tipe data string menggunakan metode double quoted
    $stringa = "ini adalah string sederhana 2";
    $stringb = "variabel akan otomatis ditampilkan : $stringa";
    echo $stringa;
    echo "<br>";
    echo $stringb;

    echo "<br>"; echo "<br>";
    $nama = "Muhammad Haikal";
    $umur = 20;

    echo "Nama saya adalah ", $nama ," dan umur saya ", $umur ," Tahun";
    echo "<br>";
    echo "Nama saya adalah ". $nama ." dan umur saya ". $umur ." Tahun";

    echo "<br>"; echo "<br>";
    $a = "1";
    $b = 2;
    echo $a + $b;

    echo "<br>"; echo "<br>";
    $a = "1"; // $a adalah string 
    $a++; // sekarang $a adalah integer (2)
    $a .= "3"; //sekarang adalah "23"
    $a *=0.5; //sekarang adalah 11.5

    $b = "10" . "20.25";
    $c = "10" + "20.25";
    $d =  10 + "20.5";


    echo "a = $a"; echo "<br>"; 
    echo "b = $b"; echo "<br>";
    echo "c = $c"; echo "<br>";
    echo "d = $d"; echo "<br>";
    $e = "10 rumah";
    $e = (int) $e;
    $e = (bool) $e;

    $f = 100;
    $f = (string) $f;

    echo "e = $e"; echo "<br>";
    echo "f = $f"; echo "<br>";

    echo "<br>"; echo "<br>";
    $string3 = "SMK Wikrama";
    echo substr($string3, 4);
    echo "<br>";
    echo strtolower(substr($string3, 0, 4));
?>