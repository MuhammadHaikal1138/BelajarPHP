<?php
    if (@$_POST['bilangan_pertama'] != "" && @$_POST['bilangan_pemangkat'] != ""){
        $hasilpangkat = $_POST['bilangan_pertama'] ** $_POST['bilangan_pemangkat'];
    }else {
        echo "<p style='text-align : center; color: red;'>Data Harus Diisi Lengkap!!</p>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Formulir</title>
</head>
<body>
    <!-- 1. Pastikan menggunakan tag form dan ada attribute method action -->
    <form action="" style="display: flex; justify-content: center;" method="POST">
    <table border="1">
        <tr>
            <td>Bilangan Pertama : </td>
            <td><input type="number" name="bilangan_pertama"></td>
        </tr>
        <tr>
            <td><label for="angka_pangkat">Bilangan Pemangkat : </label></td>
            <td><input type="number" name="bilangan_pemangkat" id="angka_pangkat"></td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Hitung</button></td>
        </tr>
    </table>
    </form>

    <p style="text-align: center;">
        <?php
            if (isset($hasilpangkat) && @$_POST['bilangan_pertama'] != "" && @$_POST['bilangan_pemangkat'] != ""){
                echo "Hasil Pangkat <br>" .$_POST['bilangan_pertama']. " Pangkat " . $_POST['bilangan_pemangkat'] . " = " . $hasilpangkat . "</br>";
            }
        ?>
    </p>
</body>
</html>