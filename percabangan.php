<?php
    // seorang dosen akan memberikan penilaian dengan kriteria 
    // Nilai >=80 : Mutu A
    // Nilai >=68 : Mutu B
    // Nilai >=56 : Mutu C
    // Nilai >=45 : Mutu D
    // selainnya Nilai Mutu E

    // kalau nilai mutunya A, B, C Maka Lulus, selainnya maka tidak lulus

    //buat dulu variabel
    $nilai = 40;

    //versi 1
    //kalau nilainya >= 80 maka A dan Lulus

    if($nilai >=80) {
        echo "Nilai anda ".$nilai." Maka Mutu Anda A dan dinyatakan Lulus";
    // kalau nilainya >= 68 maka B dan lulus
    }elseif($nilai >=68) {
        echo "Nilai anda ".$nilai." Maka mutu anda B dan dinyatakan Lulus";
    // kalau nilainya >= 56 maka C dan lulus 
    }elseif($nilai >=56) {
        echo "Nilai anda ".$nilai." Maka mutu anda C dan dinyatakan Lulus";
    // kalau nilainya >= 45 maka D dan dinyatakan tidak lulus 
    }elseif($nilai >=45) {
        echo "Nilai anda ".$nilai." Maka mutu anda D dan dinyatakan tidak Lulus";
    // selainnya E dan tidak lulus
    }else {
        echo "Nilai anda ".$nilai." Maka mutu anda E dan dinyatakan tidak Lulus";
    }

    echo "<br><br>";

    // Versi 2

    $nilai2 =40;
    if($nilai2 >= 80) {
        $nilaiMutu="A";
        $ket="Lulus";
    }elseif($nilai2 >= 68){
        $nilaiMutu="B";
        $ket="Lulus";
    }elseif($nilai2 >= 56){
        $nilaiMutu="C";
        $ket="Lulus";
    }elseif($nilai2 >= 45){
        $nilaiMutu="D";
        $ket="Tidak Lulus";
    }else{
        $nilaiMutu="E";
        $ket="Tidak Lulus";
    }

    echo "Versi 2 : Nilai anda ".$nilai2." Maka mutu anda ".$nilaiMutu." dan dinyatakan ".$ket;

    echo "<br><br>";

    // Versi 3
    $nilai3 =40;
    if($nilai3 >= 80) {
        $nilaiMutu3="A";
    }elseif($nilai3 >= 68){
        $nilaiMutu3="B";
    }elseif($nilai3 >= 56){
        $nilaiMutu3="C";
    }elseif($nilai3 >= 45){
        $nilaiMutu3="D";
    }else{
        $nilaiMutu3="E";
    }

    if($nilaiMutu3 =="A"){
        $ket3="Lulus";
    }elseif($nilaiMutu3 =="B"){
        $ket3="Lulus";
    }elseif($nilaiMutu3 =="C"){
        $ket3="Lulus";
    }elseif($nilaiMutu3 =="D"){
        $ket3="Tidak Lulus";
    }else {
        $ket3="Tidak Lulus";
    }
    echo "Versi 3 : Nilai anda ".$nilai3." Maka mutu anda ".$nilaiMutu3." dan dinyatakan ".$ket3;

    echo "<br><br>";

    // tambahan versi 3.1
    if($nilaiMutu3=="A" || $nilaiMutu3=="B" || $nilaiMutu3=="C"){
        $ket4="lulus";
    }else{
        $ket4="tidak lulus";
    }
    echo "Versi 3.1 : Nilai anda ".$nilai3." Maka mutu anda ".$nilaiMutu3." dan dinyatakan ".$ket4;
?>