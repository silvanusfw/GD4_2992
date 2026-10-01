<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket War</title>
</head>
<body>
    <?php
        // $namaKonser = "Coldplay - Music of the Spheres";
        
        $daftarKonser = [
            [
                "nama" => "Coldplay - Music of the Spheres",
                "tanggal" => "2026-03-15",
                "kategori" => "Festival",
                "harga" => 1500000
            ],
            [
                "nama" => "Dewa 19 Reunion Show",
                "tanggal" => "2026-04-02",
                "kategori" => "VIP",
                "harga" => 2500000
            ],
            [
                "nama" => "NCT Dream World Tour",
                "tanggal" => "2026-05-20",
                "kategori" => "Reguler",
                "harga" => 900000
            ],
        ];

        $hargaTiket = 1500000;
        $sisaTiket = 25;
        $sudahSoldOut = false;
        $kategoriTiket = "Festival";
    ?>

    <!-- <p>Konser: <?php // echo $namaKonser; ?></p> -->

    <p>Konser terdekat: <?php echo $daftarKonser[0]["nama"]; ?></p>
    <p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>

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

    <!-- LATIHAN DEBUGGING #8 -->
    <?php
        $namaKonser = "Dewa 19 Reunion Show";
        echo "Konser pilihan: " . $namaKonser;
    ?>
</body>
</html>