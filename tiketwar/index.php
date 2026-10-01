<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket War</title>
</head>
<body>
    <?php
        $namaKonser = "Coldplay - Music of the Spheres";
        $hargaTiket = 1500000;
        $sisaTiket = 25;
        $sudahSoldOut = false;
        $kategoriTiket = "Festival";
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p>
    <p>Harga: Rp<?php echo $hargaTiket; ?></p>
    <p>Sisa tiket: <?php echo $sisaTiket; ?></p>
    <p>Kategori Tiket: <?php echo $kategoriTiket; ?> </p>

    <!-- LATIHAN DEBUGGING #7 -->
    <?php
        $namaArtis = "NCT Dream";
        echo "Konser " . $namaArtis;
    ?>

    <br><br>

    <?php
        echo "Selamat datang di TiketWar - war tiket konser paling gercep!";
        echo "<br>Saksikan idola favorit Anda tanpa takut kehabisan tiket!<br>";
    ?>

    <!-- LATIHAN DEBUGGING #6 -->
    <?php
        echo "Tiket akan segera dibuka!";
    ?>
</body>
</html>