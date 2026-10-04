<?php
    session_start();

    $folderTujuan = "bukti_bayar/";
    $namaFile = basename($_FILES["buktiTiket"]["name"]);
    $alamatFile = $folderTujuan . $namaFile;

    $tiket = [
        "nama" => $_POST["namaTiket"],
        "kategori" => $_POST["kategoriTiket"],
        "harga" => $_POST["hargaTiket"],
        "bukti" => $alamatFile
    ];

    move_uploaded_file($_FILES["buktiTiket"]["tmp_name"], $alamatFile);

    $_SESSION["daftarWar"][] = $tiket;
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Pesanan Berhasil!</h1>
    <p>Nama: <?php echo $tiket["nama"]; ?></p>
    <p>Kategori: <?php echo $tiket["kategori"]; ?></p>
    <p>Harga tiket: Rp<?php echo $tiket["harga"]; ?></p>
    
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>