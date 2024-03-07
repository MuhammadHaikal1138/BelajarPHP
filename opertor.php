<?php
    $a = 5;
    $b = 2;


    //penjumlahan 
    $c = $a + $b;
    echo "$a + $b = $c";
    echo "<hr>";

    //pengurangan 
    $c = $a - $b;
    echo "$a - $b = $c";
    echo "<hr>";

    //perkalian 
    $c = $a * $b;
    echo "$a x $b = $c";
    echo "<hr>";

    //pembagian
    $c = $a / $b;
    echo "$a / $b = $c";
    echo "<hr>";

    //sisa bagi 
    $c = $a % $b;
    echo "$a % $b = $c";
    echo "<hr>";

    //perpangkatan
    $c = $a ** $b;
    echo "$a ** $b = $c";
    echo "<hr>";

    echo "<br>";echo"<br>";
    $suka = true;
    //menggunakan operator ternary
    $jawab = $suka ? "iya": "tidak";
    echo $jawab;

    //menghitung luas segitiga
    $a = 6;
    $t = 5;


    echo "<br>";echo"<br>";
    $luas = ($a * $t)/2;
    echo "luas segitiga yang memiliki alas ". $a ." dan tinggi ". $t ." adalah ". $luas ;

    echo "<br>";echo"<br>";
    //menghitung luas persegi 
    $sisi = 4;
    $luaspersegi = $sisi * $sisi ;
    echo " luas persegi yang memiliki panjang sisi ". $sisi ." cm adalah ". $luaspersegi; 

    echo "<br>";echo"<br>";
    //menghitung luas lingkaran
    $jari2 = 8;
    $phi = 22/7;
    $luaslingkaran = $phi * $jari2 * $jari2;
    echo "luas lingkaran yang memiliki jari-jari ". $jari2 ." cm adalah ". $luaslingkaran;

    echo "<br>";echo"<br>";
    $bil1 = 15;
    $bil2 = 20;

    $pembanding = $bil1 < $bil2 ? "ya, $bil1 lebih kecil dari $bil2" : "salah, $bil1 lebih besar dari $bil2";
    echo $pembanding;
?>