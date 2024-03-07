<?php
    $nilai = [80,78,72,84,88,92];
    // MEMUNCULKAN NILAI
    echo "Nilai saya adalah : ";
    foreach ($nilai as $value) {
        echo $value." ";
    }
    echo "<br>";echo"<br>";

    // MEMUNCULKAN NILAI TERKECIL
    echo "Nilai yang terkecil adalah : " .min($nilai);
    echo "<br>";echo"<br>";

    // MEMUNCULKAN NILAI TERBESAR 
    echo "Nilai yang terbesar adalah : " .max($nilai);
    echo "<br>";echo"<br>";

    // MENGURUTKAN NILAI TERKECIL HINGGA TERBESAR
    echo "Nilai terkecil hingga yang terbesar adalah : ";
    $kecil = $nilai ;
    sort($kecil);
    foreach ($kecil as $berurut) {
        echo "$berurut ";
    }
    echo "<br>";echo"<br>";

    // MENGURUTKAN NILAI TERBESAR HINGGA TERKECIL
    echo "Nilai terbesar hingga yang terkecil adalah : ";
    $besar = $nilai;
    rsort($besar);
    foreach ($besar as $berurut) {
        echo "$berurut ";
    }
    echo "<br>";echo"<br>";

    // MENCARI RATA-RATA LALU DIBULATKAN
    echo "Nilai rata-rata saya ";
    echo (array_sum($nilai) / count($nilai));
    echo "<br>";echo"<br>";
    echo "Nilai rata-rata saya setelah dibulatkan : ";
    echo round(array_sum($nilai) / count($nilai));
    echo "<br>";echo"<br>";

    // MENCARI NILAI SETELAH PERBAIKAN
    echo "Setelah saya melakukan perbaikan pada nilai ".min($nilai)." Sekarang nilai saya adalah : ";
    echo $nilai[2]= 75;
    echo "<br>";echo"<br>";
    echo "Sehingga Nilai saya sekarang adalah : ";
    foreach ($nilai as $value) {
        echo "$value ";
    }
    echo "<br>";echo"<br>"; 


    // MENGURUTKAN NILAI SETELAH PERBAIKAN
    echo "Nilai urut dari yang terbesar hingga terkecil setelah melakukan perbaikan adalah : ";
    $baru = $nilai;
    rsort($baru);
    foreach ($baru as $berurut) {
        echo "$berurut ";
    }
    












    // MENGGUNAKAN ASORT DAN ARSORT
    // $nilai = [80,78,72,84,88,92];
    // // MEMUNCULKAN NILAI
    // echo "Nilai saya adalah : ";
    // foreach ($nilai as $value) {
    //     echo $value." ";
    // }
    // echo "<br>";echo"<br>";

    // // MEMUNCULKAN NILAI TERKECIL
    // echo "Nilai yang terkecil adalah : " .min($nilai);
    // echo "<br>";echo"<br>";

    // // MEMUNCULKAN NILAI TERBESAR 
    // echo "Nilai yang terbesar adalah : " .max($nilai);
    // echo "<br>";echo"<br>";

    // // MENGURUTKAN NILAI TERKECIL HINGGA TERBESAR
    // echo "Nilai terkecil hingga yang terbesar adalah : ";
    // asort($nilai);
    // foreach ($nilai as $berurut) {
    //     echo "$berurut ";
    // }
    // echo "<br>";echo"<br>";

    // // MENGURUTKAN NILAI TERBESAR HINGGA TERKECIL
    // echo "Nilai terbesar hingga yang terkecil adalah : ";
    // arsort($nilai);
    // foreach ($nilai as $berurut) {
    //     echo "$berurut ";
    // }
    // echo "<br>";echo"<br>";

    // // MENCARI RATA-RATA LALU DIBULATKAN
    // echo "Nilai rata-rata saya ";
    // echo (array_sum($nilai) / count($nilai));
    // echo "<br>";echo"<br>";
    // echo "Nilai rata-rata saya setelah dibulatkan : ";
    // echo round(array_sum($nilai) / count($nilai));
    // echo "<br>";echo"<br>";

    // // MENCARI NILAI SETELAH PERBAIKAN
    // ksort($nilai);
    // echo "Setelah saya melakukan perbaikan pada nilai ".min($nilai)." Sekarang nilai saya adalah : ";
    // echo $nilai[2]= 75;
    // echo "<br>";echo"<br>";
    // echo "Sehingga Nilai saya sekarang adalah : ";
    // foreach ($nilai as $value) {
    //     echo "$value ";
    // }
    // echo "<br>";echo"<br>"; 


    // // MENGURUTKAN NILAI SETELAH PERBAIKAN
    // echo "Nilai urut dari yang terbesar hingga terkecil setelah melakukan perbaikan adalah : ";
    // $baru = $nilai;
    // rsort($baru);
    // foreach ($baru as $berurut) {
    //     echo "$berurut ";
    // }
    
?>

