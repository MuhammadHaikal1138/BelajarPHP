<?php
    echo "Ini halaman awal";
    echo "<br><br>";

    $ambilHal=$_GET['page'];
    switch($ambilHal) {
        case "Resume":
            include "resume.php";
            break;
        case "contact":
            include "contact.php";
            break;
        default :
            echo "ini halaman awal";
            break;
    }
?>