<?php
    session_start();

    $namaTiket = $_POST["namaTiket"];
    $kategoriTiket = $_POST["kategoriTiket"];
    $hargaTiket = $_POST["hargaTiket"];

    $folderTujuan = "bukti_bayar/";
    $namaFile = basename($_FILES["buktiBayar"]["name"]);
    $alamatFile = $folderTujuan . $namaFile;
    
    if(move_uploaded_file($_FILES["buktiBayar"]["tmp_name"], $alamatFile)) {
        $pesanUpload = "Bukti pembayaran berhasil diupload.";
    }else{
        $pesanUpload = "Gagal upload bukti pembayaran.";
    }
?>