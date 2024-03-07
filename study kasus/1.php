<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nilai = 84;
    ?>
    <p>nilai anda <?php echo $nilai ?> dan dinyatakan <span style="color : <?php echo $nilai >= 75 ? 'green' : 'red' ?>;"><?php echo $nilai >= 75 ? "Kompeten" : "Tidak kompeten" ;?></span></p>
</body>
</html>